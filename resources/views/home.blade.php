@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row g-5 g-xl-10">

                <div class="col-xl-4 mb-xl-10">       
                    <div class="card card-flush h-xl-100">   
                        <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('{{ asset('assets/media/frame.png') }}')" data-bs-theme="light">
                            <h3 class="card-title align-items-start flex-column text-white pt-15">
                                <span class="fw-bold fs-2x mb-3">Daily Stock</span>
                                <div class="fs-6 text-white">
                                    <span class="opacity-75">Update On {{ $data['stok']->created_at }}</span>
                                </div>    
                            </h3>
                        </div>
                        <div class="card-body mt-n20 bg-light">
                            <div class="mt-n20 position-relative">
                                <div class="row g-3 g-lg-6">
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        A+                           
                                                    </span>                
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->a_pos }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        A-                           
                                                    </span>                    
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->a_neg }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        B+                           
                                                    </span>                 
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->b_pos }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        B-                           
                                                    </span>               
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->b_neg }}</span>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        AB+                           
                                                    </span>                
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->ab_pos }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        AB-                           
                                                    </span>                    
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->ab_neg }}</span>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        O+                           
                                                    </span>                
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->o_pos }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                        <div class="col-6">
                                            <div class="bg-white shadow-sm bg-opacity-70 rounded-2 px-6 py-5">
                                                <div class="symbol symbol-30px me-5 mb-8">
                                                    <span class="fs-2 text-primary fw-bold">  
                                                        O-                           
                                                    </span>                    
                                                </div>
                                                <div class="m-0">
                                                    <span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">{{ $data['stok']->o_neg }}</span>
                                                </div>
                                            </div>    
                                        </div>    
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>

                <div class="col-xxl-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-flush h-xl-100 bg-light-danger text-danger">  
                                        <div class="card-header flex-nowrap">
                                            <h3 class="card-title align-items-start flex-column">            
                                                <span class="card-label fw-bold fs-4 text-gray-800">Pending</span>
                                                <span class="mt-1 fw-semibold fs-7" style="color: ">On verification</span>
                                            </h3>
                                            <div class="card-body text-center">     
                                                <div class="text-end">            
                                                    <span class="d-block fw-bold fs-1 text-gray-800">{{ $data['pending'] }}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 border-0 d-flex my-auto">
                                                <a href="{{ route('pending') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-outline ki-arrow-right fs-2"></i>                                
                                                </a>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-flush h-xl-100 bg-light-danger text-danger">  
                                        <div class="card-header flex-nowrap">
                                            <h3 class="card-title align-items-start flex-column">            
                                                <span class="card-label fw-bold fs-4 text-gray-800">Show</span>
                                                <span class="mt-1 fw-semibold fs-7" style="color: ">Already Verified</span>
                                            </h3>
                                            <div class="card-body text-center">     
                                                <div class="text-end">            
                                                    <span class="d-block fw-bold fs-1 text-gray-800">{{ $data['show'] }}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 border-0 d-flex my-auto">
                                                <a href="{{ route('show') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-outline ki-arrow-right fs-2"></i>                                
                                                </a>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-flush h-xl-100 bg-light-danger text-danger">  
                                        <div class="card-header flex-nowrap">
                                            <h3 class="card-title align-items-start flex-column">            
                                                <span class="card-label fw-bold fs-4 text-gray-800">Finished</span>
                                                <span class="mt-1 fw-semibold fs-7" style="color: ">Already Fulfilled</span>
                                            </h3>
                                            <div class="card-body text-center">     
                                                <div class="text-end">            
                                                    <span class="d-block fw-bold fs-1 text-gray-800">{{ $data['finish'] }}</span>
                                                </div>
                                            </div>
                                            <div class="card-footer p-0 border-0 d-flex my-auto">
                                                <a href="{{ route('finish') }}" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-outline ki-arrow-right fs-2"></i>                                
                                                </a>                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </div>
                        </div>
                        <div class="col-12 mt-10">
                            <div class="card">
                                <div class="card-header position-relative py-0 border-bottom-2">
                                    <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-3">
                                        <li class="nav-item p-0 ms-0 me-8">
                                            <a class="nav-link btn btn-color-muted active px-0" data-bs-toggle="tab" id="kt_chart_widgets_22_tab_1" href="#kt_chart_widgets_22_tab_content_1">
                                                <span class="nav-text fw-semibold fs-4 mb-3">RH Positive</span>
                                                <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item p-0 ms-0">
                                            <a class="nav-link btn btn-color-muted px-0" data-bs-toggle="tab" id="kt_chart_widgets_22_tab_2" href="#kt_chart_widgets_22_tab_content_2">
                                                <span class="nav-text fw-semibold fs-4 mb-3">RH Negative</span>
                                                <span class="bullet-custom position-absolute z-index-2 w-100 h-2px top-100 bottom-n100 bg-primary rounded"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body pb-3">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_chart_widgets_22_tab_content_1">
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="me-md-5 w-100">
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">A+</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['a_pos']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">B+</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['b_pos']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">AB+</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['ab_pos']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">O+</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['o_pos']}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                                                    <div class="fs-4 fw-bold text-gray-900 text-center mb-5">Graphics Chart <br>blood Request</div>
        
                                                    <div id="kt_chart_widgets_22_chart_1" class="mx-auto mb-4"></div>
        
                                                    <div class="mx-auto">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">A+</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">B+</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-dark me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">AB+</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">O+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_chart_widgets_22_tab_content_2">
                                            <div class="d-flex flex-wrap flex-md-nowrap">
                                                <div class="me-md-5 w-100">
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">A-</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['a_neg']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">B-</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['b_neg']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">AB-</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['ab_neg']}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                                        <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                            <div class="symbol symbol-50px me-4">
                                                                <span class="symbol-label">
                                                                    <i class="ki-outline ki-pulse fs-2qx text-primary"></i>
                                                                </span>
                                                            </div>
                                                            <div class="me-2">
                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold">O-</span>
                                                                <span class="text-gray-400 fw-bold d-block fs-7">Blood Type</span>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <span class="text-dark fw-bolder fs-2x">{{$data['o_neg']}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                                                    <div class="fs-4 fw-bold text-gray-900 text-center mb-5">Graphics Chart <br>blood Request</div>
        
                                                    <div id="kt_chart_widgets_22_chart_2" class="mx-auto mb-4"></div>
                                                    
                                                    <div class="mx-auto">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">A-</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">B-</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-dark me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">AB-</div>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
                                                            <div class="fs-8 fw-semibold text-muted">O-</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var KTChartsWidget22 = (function () {
    var e = function (e, t, a, l) {
        var r = document.querySelector(t);
        if (r) {
            parseInt(KTUtil.css(r, "height"));
            var o = {
                    series: a,
                    chart: { fontFamily: "inherit", type: "donut", width: 250 },
                    plotOptions: { pie: { donut: { size: "50%", labels: { value: { fontSize: "10px" } } } } },
                    colors: [KTUtil.getCssVariableValue("--bs-info"), KTUtil.getCssVariableValue("--bs-success"), KTUtil.getCssVariableValue("--bs-dark"), KTUtil.getCssVariableValue("--bs-danger")],
                    stroke: { width: 0 },
                    labels: ["A", "B", "AB", "O"],
                    legend: { show: !1 },
                    fill: { type: "false" },
                },
                i = new ApexCharts(r, o),
                s = !1,
                n = document.querySelector(e);
            !0 === l && (i.render(), (s = !0)),
                n.addEventListener("shown.bs.tab", function (e) {
                    0 == s && (i.render(), (s = !0));
                });
        }
    };
    return {
        init: function () {
            e("#kt_chart_widgets_22_tab_1", "#kt_chart_widgets_22_chart_1", [{{$data['a_pos']}}, {{$data['b_pos']}}, {{$data['ab_pos']}}, {{$data['o_pos']}}], !0), 
            e("#kt_chart_widgets_22_tab_2", "#kt_chart_widgets_22_chart_2", [{{$data['a_neg']}}, {{$data['b_neg']}}, {{$data['ab_neg']}}, {{$data['o_neg']}}], !1);
        },
    };
})();
"undefined" != typeof module && (module.exports = KTChartsWidget22),
    KTUtil.onDOMContentLoaded(function () {
        KTChartsWidget22.init();
    });
</script>
@endsection

