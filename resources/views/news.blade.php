@extends('layouts.app')

@section('pageTitle', 'Buat Akun')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

              <div class="card">
                <div class="card-header pt-6">
                  <div class="card-title">
                    <span>News Publish</span>
                  </div>
                  <div class="card-toolbar">
                    <div class="d-flex justify-content-end mb-3" data-kt-user-table-toolbar="base">
                      <a href="{{ route('news_add') }}" class="btn btn-danger" >
                      <i class="ki-outline ki-plus fs-2"></i>Add News</a>
                    </div>
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                      <div class="fw-bold me-5">
                      <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                      <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                    </div>
                  </div>
                </div>
                <div class="card-body py-4">
                  <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                      <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Image</th>
                        <th>title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                      @foreach ($data['news'] as $row)
                      <tr>
                       <td class="d-flex align-items-center">
                          <div class="d-flex flex-column">
                            <span class="text-gray-800 text-hover-primary mb-1">
                              <img src="{{ $row->image }}" class="shadow-sm rounded image-input-wrapper w-lg-200px image-input image-input-outline" alt="">
                            </span>
                          </div>
                       </td>  
                        <td> {{ $row->title }} </td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->news_created }}</td>
                        <td class="text-end">
                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                          <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                              <a href="news/edit/{{ $row->id_news }}"  class="menu-link px-3">Edit</a>
                            </div>
                            <div class="menu-item px-3">
                              <a class="menu-link px-3" onclick="confirmButtonText('news/delete/{{ $row->id_news }}')" data-kt-users-table-filter="delete_row">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <!--end::Table-->
                </div>
                <!--end::Card body-->
              </div>

        </div>
    </div>
</div>
@endsection

@section('script')
			<script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
@endsection
