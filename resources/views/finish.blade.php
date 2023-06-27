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
                      <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Request" />
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
                              <label class="form-label fs-6 fw-semibold">Donor Type:</label>
                              <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                <option value="Whole Blood">Whole Blood</option>
                                <option value="Apheresis">Apheresis</option>
                                <option value="Plasma Konvalesen">Plasma Konvalesen</option>
                              </select>
                            </div>
                            <div class="mb-10">
                              <label class="form-label fs-6 fw-semibold">Blood Type:</label>
                              <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                <option></option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                              </select>
                            </div>
                            <div class="d-flex justify-content-end">
                              <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                              <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                            </div>
                          </div>
                        </div>
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
                        <th class="min-w-125px">user</th>
                        <th>Patient</th>
                        <th>Blood Type</th>
                        <th>Donor Type</th>
                        <th>quantity</th>
                        <th>BDRS</th>
                        <th>Request Date</th>
                        <th class="text-end min-w-100px">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                      @foreach ($data['req'] as $row)
                      <tr>
                        <td class="d-flex align-items-center">
                          <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <span>
                              <div class="symbol-label">
                                <img src="{{ $row->photo }}" alt="Emma Smith" class="w-100">
                              </div>
                            </span>
                          </div>
                          <div class="d-flex flex-column">
                              <span class="text-gray-800 text-hover-primary mb-1">{{ $row->name }}</span>
                              <span>{{ $row->email }}</span>
                          </div>
                      </td>
                        <td>{{ $row->requests_pasien }}</td>
                        <td>{{ $row->requests_goldar }}</td>
                        <td>{{ $row->requests_jenis }}</td>
                        <td>{{ $row->requests_jumlah }}</td>
                        <td>{{ $row->bdrs_nama }}</td>
                        <td>{{ $row->requests_waktu }}</td>
                        <td class="text-end">
                          <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user{{ $row->id }}" class="btn btn-light btn-active-light-primary btn-icon btn-sm"><i class="ki-duotone ki-magnifier"><i class="path1"></i><i class="path2"></i></i></button>
                        </td>
                      </tr>

                      <div class="modal fade" id="kt_modal_add_user{{ $row->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header" id="kt_modal_add_user_header">
                              <h2 class="fw-bold">Detail Requests</h2>
                              <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki-outline ki-cross fs-1"></i>
                              </div>
                            </div>
                            <div class="modal-body scroll-y ">
                                <div class="d-flex flex-column scroll-y " id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                  <div class="fv-row mb-7">
                                    <div class="card-body pt-5">                 
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Patient</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_pasien }}</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Blood Type</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_goldar }}</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Donor Type</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_jenis }}</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Quantity</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_jumlah }}</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">BDRS</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->bdrs_nama }}</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="d-flex flex-stack">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Contact</div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_hp }}({{ $row->requests_nama }})</span> 
                                          </div>  
                                      </div>
                                      <div class="separator separator-dashed my-3"></div>
                                      <div class="">
                                        <div class="text-gray-700 fw-semibold fs-6 me-2">Note: </div>                   
                                          <div class="d-flex align-items-senter">
                                            <span class="text-gray-400 fw-bold fs-6">{{ $row->requests_catatan }}</span> 
                                          </div>  
                                      </div>
                                    </div>
                                  </div>
                                </div>  
                                <div class="text-center pt-5">
                                  <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      @endforeach
                    </tbody>
                  </table>
                </div>
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
