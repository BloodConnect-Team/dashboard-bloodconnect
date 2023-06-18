@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

              <div class="card mb-5 mb-xl-10">

                <div class="card-header pt-6">
                  <div class="card-title">
                    <span>Change Profile</span>
                  </div>
                </div>
              
                  <div id="kt_account_settings_profile_details" class="collapse show">
                      <form action="{{ route('account_update') }}" method="POST" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                        @csrf
                          <div class="card-body border-top p-9">
                              <div class="row mb-6">
                                  <label class="col-lg-4 col-form-label fw-semibold fs-6">Image</label>   
                                  <div class="col-lg-8">
                                      <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset("assets/media/blank.svg") }}')">
                                          <div class="image-input-wrapper w-lg-150px h-lg-150px" style="background-image: url({{Auth::user()->photo}})"></div>
                                          <label class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-pencil fs-6"></i>
                                              <input type="file" accept=".png, .jpg, .jpeg" name="image" required>
                                              <input type="hidden" name="avatar_remove">
                                          </label>
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-cross fs-3"></i>                            
                                          </span>
                                          <span class="btn btn-icon btn-circle btn-active-color-primary w-30px h-30px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                              <i class="ki-outline ki-cross fs-3"></i>                            
                                          </span>
                                      </div>
                                      <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                                  </div>
                              </div>
                              <div class="row mb-6">
                                  <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                                  <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                      <input type="text" name="name" class="form-control form-control-lg form-control-solid"  value="{{Auth::user()->name}}" required>
                                  <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Blood Type</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <select name="goldar" data-control="select2"  class="form-select form-select-solid form-select-lg" required>
                                    <option value="{{Auth::user()->goldar}}">{{Auth::user()->goldar}}</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="b-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                  </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="email" name="email" class="form-control form-control-lg form-control-solid"  value="{{Auth::user()->email}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Phone Number</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="text" name="hp" class="form-control form-control-lg form-control-solid"  value="{{Auth::user()->hp}}">
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">City</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <select name="city"  data-control="select2" class="form-select form-select-solid form-select-lg" required>
                                    <option value="Kota Lhokseumawe">Kota Lhokseumawe</option>
                                  </select>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                          </div>
                          <div class="card-footer d-flex justify-content-end py-6 px-9">
                              <a href="{{route('news')}}" class="btn btn-light btn-active-light-primary me-2" >Discard</a>
                              <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                          </div>
                    </form>
                  </div>
              </div>

              <div class="card mb-5 mb-xl-10">

                <div class="card-header pt-6">
                  <div class="card-title">
                    <span>Change Password</span>
                  </div>
                </div>
              
                  <div  class="collapse show">
                      <form action="{{ route('password_change') }}" method="POST" enctype="multipart/form-data" class="form fv-plugins-bootstrap5 fv-plugins-framework" >
                        @csrf
                          <div class="card-body border-top p-9">
                              <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Old Password</label>
                                <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                    <input type="password" name="password_old" class="form-control form-control-lg form-control-solid" placeholder="******" required>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                            <div class="row mb-6">
                              <label class="col-lg-4 col-form-label required fw-semibold fs-6">New Password</label>
                              <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <input type="password" name="password_new" class="form-control form-control-lg form-control-solid"  placeholder="******" required>
                              <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                            <div class="row mb-6">
                              <label class="col-lg-4 col-form-label required fw-semibold fs-6">Repeat Password</label>
                              <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                  <input type="password" name="repeat" class="form-control form-control-lg form-control-solid"  placeholder="******" required>
                              <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            </div>
                          </div>  
                          <div class="card-footer d-flex justify-content-end py-6 px-9">
                              <a href="{{route('news')}}" class="btn btn-light btn-active-light-primary me-2" >Discard</a>
                              <button type="submit" class="btn btn-primary" >Save Changes</button>
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

@endsection
