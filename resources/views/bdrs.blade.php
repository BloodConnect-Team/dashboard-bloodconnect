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
                      <button type="button" class="btn btn-light-danger me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                      <i class="ki-outline ki-filter fs-2"></i>Filter</button>
                      <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <div class="px-7 py-5">
                          <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                          <div class="mb-10">
                            <label class="form-label fs-6 fw-semibold">City:</label>
                            <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                              <option></option>
                              <option value="Kota Lhokseumawe">Kota Lhokseumawe</option>
                            </select>
                          </div>
                          <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                      <i class="ki-outline ki-plus fs-2"></i>Add BDRS</button>
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
                            <h2 class="fw-bold">Add BDRS</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                              <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                          </div>
                          <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <form id="kt_modal_add_user_form" class="form" action="{{ route('bdrs_add') }}" method="POST">
                              @csrf
                              <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">BDRS Name</label>
                                  <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" name" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Phone Number</label>
                                  <input type="number" name="hp" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Address</label>
                                  <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">City</label>
                                  <select  name="kota" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                    <option value="Kota Lhokseumawe">Kota Lhokseumawe</option>
                                  </select>
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Latitude</label>
                                  <input type="text" name="lat" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Latitude" required />
                                </div>
                                <div class="fv-row mb-7">
                                  <label class="required fw-semibold fs-6 mb-2">Longitude</label>
                                  <input type="text" name="lng" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Longitude" required />
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
                        <th class="min-w-125px">Name</th>
                        <th class="min-w-125px">Phone Number</th>
                        <th class="min-w-125px">Address</th>
                        <th class="min-w-125px">City</th>
                        <th class="min-w-125px">Longitude</th>
                        <th class="min-w-125px">Latitude</th>
                        <th class="text-end min-w-100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                      @foreach ($data['bdrs'] as $row)
                      <tr>
                        <td class="d-flex align-items-center">
                          <div class="d-flex flex-column">
                            <span class="text-gray-800 text-hover-primary mb-1">{{ $row->bdrs_nama }}</span>
                          </div>
                        </td>
                        <td>{{ $row->bdrs_kontak }}</td>
                        <td>{{ $row->bdrs_alamat }}</td>
                        <td>{{ $row->bdrs_kota }}</td>
                        <td>{{ $row->bdrs_lat }}</td>
                        <td>{{ $row->bdrs_lng }}</td>
                        <td class="text-end">
                          <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                          <i class="ki-outline ki-down fs-5 ms-1"></i></a>
                          <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                            <div class="menu-item px-3">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user{{ $row->id_bdrs }}" class="menu-link px-3">Edit</a>
                            </div>
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3" onclick="confirmButtonText('bdrs/delete/{{ $row->id_bdrs }}')" data-kt-users-table-filter="delete_row">Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <div class="modal fade" id="kt_modal_add_user{{ $row->id_bdrs }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                          <div class="modal-content">
                            <div class="modal-header" id="kt_modal_add_user_header">
                              <h2 class="fw-bold">Edit   BDRS</h2>
                              <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki-outline ki-cross fs-1"></i>
                              </div>
                            </div>
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                              <form id="kt_modal_add_user_form" class="form" action="{{ route('bdrs_update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $row->id_bdrs }}">
                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">BDRS Name</label>
                                    <input type="text" name="name" value="{{ $row->bdrs_nama }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" name" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Phone Number</label>
                                    <input type="number" name="hp" value="{{ $row->bdrs_kontak }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone Number" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Address</label>
                                    <input type="text" name="address" value="{{ $row->bdrs_alamat }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">City</label>
                                    <select  name="kota" class="form-control form-control-solid mb-3 mb-lg-0" required>
                                      <option value="Kota Lhokseumawe">Kota Lhokseumawe</option>
                                    </select>
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Latitude</label>
                                    <input type="text" name="lat" value="{{ $row->bdrs_lat }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Latitude" required />
                                  </div>
                                  <div class="fv-row mb-7">
                                    <label class="required fw-semibold fs-6 mb-2">Longitude</label>
                                    <input type="text" name="lng" value="{{ $row->bdrs_lng }}" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Longitude" required />
                                  </div>
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
