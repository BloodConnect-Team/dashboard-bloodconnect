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
                      <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Stok" />
                    </div>
                  </div>
                  <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                      <i class="ki-outline ki-plus fs-2"></i>Add Stock</button>
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
                            <h2 class="fw-bold">Add Blood Stock</h2>
                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                              <i class="ki-outline ki-cross fs-1"></i>
                            </div>
                          </div>
                          <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                            <form id="kt_modal_add_user_form" class="form" action="{{ route('bloodstock_add') }}" method="POST">
                              @csrf
                              <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                <div class="row">
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">A+</label>
                                    <input type="number" name="a_pos" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">A-</label>
                                    <input type="number" name="a_neg" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">B+</label>
                                    <input type="number" name="b_pos" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">B-</label>
                                    <input type="number" name="b_neg" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">AB+</label>
                                    <input type="number" name="ab_pos" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">AB-</label>
                                    <input type="number" name="ab_neg" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">O+</label>
                                    <input type="number" name="o_pos" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
                                  <div class="fv-row mb-7 col">
                                    <label class="required fw-semibold fs-6 mb-2">O-</label>
                                    <input type="number" name="o_neg" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="0" required />
                                  </div>
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
                        <th>A+</th>
                        <th>B+</th>
                        <th>AB+</th>
                        <th>O+</th>
                        <th>A-</th>
                        <th>B-</th>
                        <th>AB-</th>
                        <th>O-</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                      @foreach ($data['stok'] as $row)
                      <tr>
                        <td class="d-flex align-items-center">
                          <div class="d-flex flex-column">
                            <span class="text-gray-800 text-hover-primary mb-1">{{ $row->created_at }}</span>
                          </div>
                        </td>
                        <td>{{ $row->a_pos }}</td>
                        <td>{{ $row->b_pos }}</td>
                        <td>{{ $row->ab_pos }}</td>
                        <td>{{ $row->o_pos }}</td>
                        <td>{{ $row->a_neg }}</td>
                        <td>{{ $row->b_neg }}</td>
                        <td>{{ $row->ab_neg }}</td>
                        <td>{{ $row->o_neg }}</td>
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
			<script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
			<script src="{{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}"></script>
@endsection
