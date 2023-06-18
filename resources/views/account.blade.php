@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

                <div class="card mb-5 mb-xl-10">
                  <div class="card-body pt-9 pb-0">
                      <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                          <div class="me-7 mb-4">
                              <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                  <img src="{{Auth::user()->photo}}" alt="image">
                                  <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                              </div>
                          </div>
                          <div class="flex-grow-1">
                              <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                  <div class="d-flex flex-column">
                                      <div class="d-flex align-items-center mb-2">
                                          <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name}}</a>
                                          <a href="#"><i class="ki-outline ki-verify fs-1 text-primary"></i></a>
                                          <a href="#" class="btn btn-sm btn-light-danger fw-bold ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Admin</a>
                                      </div>                     
                                      <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                          <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                              {{Auth::user()->email}}
                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex flex-wrap flex-stack">
                                  <div class="d-flex flex-column flex-grow-1 pe-8">
                                      <div class="d-flex flex-wrap">
                                          <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                              <div class="d-flex align-items-center">
                                                  <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">{{Auth::user()->goldar}}</div>
                                              </div>
                                              <div class="fw-semibold fs-6 text-gray-400">Blood Type</div>
                                          </div>
                                      </div>
                                  </div>            
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                  <div class="card-header cursor-pointer">
                      <div class="card-title m-0">
                          <h3 class="fw-bold m-0">Profile Details</h3>
                      </div>
                      <a href="{{ route('account_edit') }}" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>   
                  </div>
                  <div class="card-body p-9">
                      <div class="row mb-7">
                          <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                          <div class="col-lg-8">                    
                              <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->name}}</span>                
                          </div>
                      </div>
                      <div class="row mb-7">
                          <label class="col-lg-4 fw-semibold text-muted">Blood Type</label>
                          <div class="col-lg-8 fv-row">
                              <span class="fw-semibold text-gray-800 fs-6">{{Auth::user()->goldar}}</span>                         
                          </div>
                      </div>
                      <div class="row mb-7">
                        <label class="col-lg-4 fw-semibold text-muted">
                             Email
                         </label>
                         <div class="col-lg-8 d-flex align-items-center">
                             <span class="fw-bold fs-6 text-gray-800 me-2">{{Auth::user()->email}}</span>                      
                         </div>
                     </div>
                      <div class="row mb-7">
                         <label class="col-lg-4 fw-semibold text-muted">
                              Contact Phone
                          </label>
                          <div class="col-lg-8 d-flex align-items-center">
                              <span class="fw-bold fs-6 text-gray-800 me-2">{{Auth::user()->hp}}</span>                      
                          </div>
                      </div>
                      <div class="row mb-7">
                          <label class="col-lg-4 fw-semibold text-muted">domicile</label>
                          <div class="col-lg-8">
                              <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{Auth::user()->city}}</a>                         
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
