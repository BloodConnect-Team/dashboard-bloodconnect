@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

              <div class="card mb-5 mb-xl-10">

                <div class="card-header pt-6">
                  <div class="card-title">
                    <span>Create News</span>
                  </div>
                </div>
              
                  <div id="kt_account_settings_profile_details" class="collapse show">
                      <form action="{{ route('news_submit') }}" method="POST" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        @csrf
                          <div class="card-body border-top p-9">
                              <div class="row mb-6">
                                  <label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>   
                                  <div class="col-lg-8">
                                      <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset("assets/media/blank.svg") }}')">
                                          <div class="image-input-wrapper w-lg-500px h-lg-300px" style="background-image: url({{ asset("assets/media/blank.svg") }})"></div>
                                          <label class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-pencil fs-3"></i>
                                              <input type="file" accept=".png, .jpg, .jpeg" name="image" required>
                                              <input type="hidden" name="avatar_remove">
                                          </label>
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-cross fs-2"></i>                            
                                          </span>
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-40px h-40px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-cross fs-2"></i>                            
                                          </span>
                                      </div>
                                      <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-lg-4 col-form-label required fw-semibold fs-6">Title</label>
                                  <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                      <input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="News Title" required>
                                  <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Author</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="author" class="form-control form-control-lg form-control-solid" value="{{Auth::user()->name}}" readonly>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Content</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <textarea name="content" class="bg-light form-control-solid" id="kt_docs_ckeditor_classic" required></textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                          </div>
                          <div class="card-footer d-flex justify-content-end py-6 px-9">
                              <a href="{{route('news')}}" class="btn btn-light btn-active-light-primary me-2" >Discard</a>
                              <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save</button>
                          </div>
                    </form>
                  </div>
              </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
      ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
    </script>
@endsection
