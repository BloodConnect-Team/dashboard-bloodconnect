<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class NewsController extends Controller
{
    public function index()
    {
        $data['title'] = 'News';
        $data['news'] = DB::table('news')
        ->join('users', 'news.user_id', '=', 'users.id')
        ->get();
        return view('news', compact('data'));
    }

    public function add()
    {
        $data['title'] = 'Add News';
        return view('news_add', compact('data'));
    }

    public function submit(Request $request)
    {
        // dd($request->file());
        $imagePath = $request->file('image')->getRealPath();
        $result = Cloudinary::upload($imagePath,  ['folder' => 'bc/news']);
        $imageUrl = $result->getSecurePath();

        DB::table('news')->insert([
            'user_id' => Auth::user()->id,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageUrl,

        ]);
        return redirect()->route('news')->with('success', "News has been added successfully");
    }

    public function edit($id)
    {
        $data['title'] = 'Edit News';
        $data['news'] = DB::table('news')->where('id_news', $id)->first();
        return view('news_edit', compact('data'));
    }

    public function update(Request $request)
    {    if(empty($request->image)){
            DB::table('news')->where('id_news', $request->id)->update([
                'user_id' => Auth::user()->id,
                'slug' => Str::slug($request->title),
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }else{
            $imagePath = $request->file('image')->getRealPath();
            $result = Cloudinary::upload($imagePath,  ['folder' => 'bc/news']);
            $imageUrl = $result->getSecurePath();
            DB::table('news')->where('id_news', $request->id)->update([
                'user_id' => Auth::user()->id,
                'slug' => Str::slug($request->title),
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imageUrl,
            ]);
        }
        return redirect()->route('news')->with('success', "News has been added successfully");
    }

    public function delete($id)
    {
        DB::table('news')->where('id_news', $id)->delete();
        return redirect()->route('news')->with('success','News has been deleted successfully');
    }
}
