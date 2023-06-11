@extends('layouts.app')

@section('pageTitle', 'Buat Akun')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

              <div class="card">
                <div class="card-header border-0 pt-6">
                  <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                      <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i>
                      <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search BDRS" />
                    </div>
                  </div>
                  <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                      <i class="ki-outline ki-plus fs-2"></i>Add Schedule</button>
                    </div>
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                      <div class="fw-bold me-5">
                      <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                      <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                    </div>
                    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                          <div class="modal-header" id="kt_modal_add_user_header">
                            <h2 class="fw-bold">Add MU Schedule</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                              <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                          </div>
                          <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <form id="kt_modal_add_user_form" class="form" action="{{ route('jadwalmu_add') }}" method="POST">
                              @csrf
                              <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Date</label>
                                  <input type="date" name="waktu" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="date" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Agency</label>
                                  <input type="textd" name="instansi" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Agency Name" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Address</label>
                                  <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Target</label>
                                  <input type="number" name="target" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                </div>
                              </div>
                              <div class="text-center pt-15">
                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                  <span class="indicator-label">Submit</span>
                                  <span class="indicator-progress">Please wait...
                                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body py-4">
                  <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                      <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">Date</th>
                        <th class="min-w-125px">Agency</th>
                        <th class="min-w-125px">Address</th>
                        <th class="min-w-125px">target</th>
                        <th class="text-end min-w-100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                      @foreach ($data['jadwal'] as $row)
                      <tr>
                        <td class="d-flex align-items-center">
                          <div class="d-flex flex-column">
                            <span class="text-gray-800 text-hover-primary mb-1">{{ $row->waktu }}</span>
                          </div>
                        </td>
                        <td>{{ $row->instansi }}</td>
                        <td>{{ $row->alamat }}</td>
                        <td>{{ $row->target }}</td>
                        <td class="text-end">
                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                          <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user{{ $row->id }}" class="menu-link px-3">Edit</a>
                            </div>
                            <div class="menu-item px-3">
                              <b class="menu-link px-3" onclick="confirmButtonText('jadwal/delete/{{ $row->id }}')" data-kt-users-table-filter="delete_row">Delete</b>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <div class="modal fade" id="kt_modal_add_user{{ $row->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                          <div class="modal-content">
                            <div class="modal-header" id="kt_modal_add_user_header">
                              <h2 class="fw-bold">Edit Schedule</h2>
                              <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki-outline ki-cross fs-1"></i>
                              </div>
                            </div>
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                              <form id="kt_modal_add_user_form" class="form" action="{{ route('jadwalmu_update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Date</label>
                                    <input type="date" name="waktu" value="{{ $row->waktu }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" name" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Agency</label>
                                    <input type="text" name="instansi" value="{{ $row->instansi }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Address</label>
                                    <input type="text" name="address" value="{{ $row->alamat }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Target</label>
                                    <input type="number" name="target" value="{{ $row->target }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Latitude" required />
                                  </div>
                                <div class="text-center pt-15">
                                  <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                  <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Save</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

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
  <script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
  <script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
@endsection
