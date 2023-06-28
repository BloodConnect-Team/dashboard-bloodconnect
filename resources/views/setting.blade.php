@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

              <div class="card mb-5 mb-xl-10">

                <div class="card-header pt-6">
                  <div class="card-title">
                    <span>Update Setting</span>
                  </div>
                </div>
              
                  <div id="kt_account_settings_profile_details" class="collapse show">
                      <form action="{{ route('setting_update') }}" method="POST" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        @csrf
                          <div class="card-body border-top p-9">
                              <div class="row mb-6">
                                  <label class="col-lg-4 col-form-label required fw-semibold fs-6">Playstore Link</label>
                                  <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                      <input type="text" name="playstore" class="form-control form-control-lg form-control-solid" value="{{ $data['set']->playstore }}" required>
                                  <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Privacy Policy</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <textarea name="privacypolicy" class="bg-light form-control-solid" id="kt_docs_ckeditor_classic" required>{{ $data['set']->privacy_policy }}</textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">User Guide</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <textarea name="userguide" class="bg-light form-control-solid" id="kt_docs_ckeditor_classic1" required>{{ $data['set']->user_guide }}</textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                          </div>
                          <div class="card-footer d-flex justify-content-end py-6 px-9">
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
    ClassicEditor
    .create(document.querySelector('#kt_docs_ckeditor_classic1'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });
    </script>
@endsection
