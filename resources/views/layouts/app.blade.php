<!DOCTYPE html>
<html lang="en">
	<head><base href="./"/>
		<title>BloodConnect &mdash; 
		@if (empty($data['title']))
				404
		@else
			{{$data['title']}}
		@endif
		</title>
		<meta charset="utf-8" />
		<meta name="description" content="Dashboard for admin BloodConnect" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="BloodConnect &mdash; {{$data['title']}}" />
		<meta property="og:url" content="{{url()->full()}}" />
		<meta property="og:site_name" content="BloodConnect &mdash; {{$data['title']}}" />
		<meta property="og:image" content="{{ asset('assets/media/banner.png') }}" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
		<script>
			var defaultThemeMode = "light";
			var themeMode;
			if (document.documentElement) {
					if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
							themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
					} else {
							if (localStorage.getItem("data-bs-theme") !== null) {
									themeMode = localStorage.getItem("data-bs-theme");
							} else {
									themeMode = defaultThemeMode;
							}
					}
					if (themeMode === "system") {
							themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
					}
					document.documentElement.setAttribute("data-bs-theme", themeMode);
			}
		</script>
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
					<div class="app-container container-fluid d-flex flex-stack" id="kt_app_header_container">
						<div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-2"></i>
							</div>
							<a href="{{ route('home') }}">
								<img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="h-30px theme-light-show" />
								<img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="h-30px theme-dark-show" />
							</a>
						</div>
						<div class="d-flex flex-stack flex-lg-row-fluid" id="kt_app_header_wrapper">
							<div class="page-title gap-4 me-3 mb-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
								<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 mb-2">
									<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
										<a href="../../demo27/dist/index.html" class="text-gray-700 text-hover-primary me-1">
											<i class="ki-outline ki-home text-gray-700 fs-6"></i>
										</a>
									</li>
									<li class="breadcrumb-item">
										<i class="ki-outline ki-right fs-7 text-gray-700 mx-n1"></i>
									</li>
									<li class="breadcrumb-item text-gray-600 fw-bold lh-1">
										@if (empty($data['title']))
										404
										@else
											{{$data['title']}}
										@endif	
									</li>
								</ul>
								<h1 class="text-gray-900 fw-bolder m-0">
									@if (empty($data['title']))
									404
									@else
										{{$data['title']}}
									@endif	
								</h1>
							</div>
							<div class="d-flex align-items-center gap-2 gapl-lg-4">
								<div class="m-0">
									<a href="#" class="btn btn-flex  btn-icon h-40px btn-light fw-bold" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
										<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
										<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
									</a>
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-night-day fs-2"></i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-moon fs-2"></i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-screen fs-2"></i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
									</div>
								</div>
								<button onclick="toggleFullScreen()" class="btn btn-flex  btn-icon h-40px fw-bold btn-dark">
									<i class="ki-outline ki-duotone ki-arrow-two-diagonals fs-2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-header d-none d-lg-flex px-0 pt-10 pb-0" id="kt_app_sidebar_header">
							<div data-kt-element="selected" class="w-100">
								<span class="d-flex flex-start ms-5">
									<img  alt="Logo" src="{{ asset('assets/media/icon.svg') }}" data-kt-element="logo" class="h-40px" />
								</span>
							</div>
						</div>
						<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
							<div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
								<div class="menu menu-rounded menu-column">
                  <div class="app-sidebar-separator separator"></div>

									<div class="menu-item">
										<div class="menu-content menu-heading">Main Menu</div>
									</div>

								</div>
								<div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="menu menu-column menu-rounded menu-sub-indention menu-active-bg">
									<div class="menu-item <?php if(route('home') == url()->full()){ echo'here show'; } ?>">
										<a href="{{ route('home') }}" class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-home-2 fs-2"></i>
											</span>
											<span class="menu-title">Home</span>
										</a>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if((route('pending')  == url()->full()) OR (route('show')  == url()->full())){ echo'here show'; } ?>">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-pulse fs-2"></i>
											</span>
											<span class="menu-title">Blood Request</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<a href="{{ route('pending') }}" class="menu-item menu-accordion <?php if(route('pending')  == url()->full()){ echo'here show'; } ?>">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Pending</span>
												</span>
											</a>
                      <a href="{{ route('show') }}" class="menu-item menu-accordion <?php if(route('show')  == url()->full()){ echo'here show'; } ?>">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Show</span>
												</span>
											</a>
										</div>
									</div>
									<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if((route('news')  == url()->full()) OR (route('news_add')  == url()->full())){ echo'here show'; } ?>">
										<span class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-save-2 fs-2"></i>
											</span>
											<span class="menu-title">News</span>
											<span class="menu-arrow"></span>
										</span>
										<div class="menu-sub menu-sub-accordion">
											<a href="{{ route('news_add') }}" class="menu-item menu-accordion <?php if(route('news_add')  == url()->full()){ echo'here show'; } ?>">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Add New</span>
												</span>
											</a>
                      <a href="{{ route('news') }}" class="menu-item menu-accordion <?php if(route('news')  == url()->full()){ echo'here show'; } ?>">
												<span class="menu-link">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Publish</span>
												</span>
											</a>
										</div>
									</div>
									<div class="menu-item <?php if(route('bdrs')  == url()->full()){ echo'here show'; } ?>">
										<a href="{{ route('bdrs') }}" class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-flask fs-2"></i>
											</span>
											<span class="menu-title">BDRS</span>
										</a>
									</div>
									<div class="menu-item <?php if(route('bloodstock')  == url()->full()){ echo'here show'; } ?>">
										<a href="{{ route('bloodstock') }}" class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-graph-2 fs-2"></i>
											</span>
											<span class="menu-title">Blood Stock</span>
										</a>
									</div>
									<div class="menu-item <?php if(route('jadwalmu')  == url()->full()){ echo'here show'; } ?>">
										<a href="{{ route('jadwalmu') }}" class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-calendar fs-2"></i>
											</span>
											<span class="menu-title">MU Schedule</span>
										</a>
									</div>
									<div class="menu-item <?php if(route('user')  == url()->full()){ echo'here show'; } ?>">
										<a href="{{ route('user') }}" class="menu-link">
											<span class="menu-icon">
												<i class="ki-outline ki-user fs-2"></i>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="app-sidebar-footer d-flex flex-stack px-11 pb-10" id="kt_app_sidebar_footer">
							<div class="">
								<div class="cursor-pointer symbol symbol-circle symbol-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
									<img src="{{Auth::user()->photo}}" alt="image" />
								</div>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{Auth::user()->photo}}" />
											</div>
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">{{Auth::user()->name}}
												<span class="badge badge-light-danger fw-bold fs-8 px-2 py-1 ms-2">{{Auth::user()->goldar}}</span></div>
												<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{Auth::user()->email}}</a>
											</div>
										</div>
									</div>
									<div class="separator my-2"></div>
									<div class="menu-item px-5">
										<a href="{{ route('account') }}" class="menu-link px-5">My Profile</a>
									</div>
									<div class="menu-item px-5">
										<a href="{{ route('logout') }}" class="menu-link px-5">Sign Out</a>
									</div>
								</div>
							</div>
							<a href="{{ route('logout') }}" class="btn btn-sm btn-outline btn-flex btn-custom px-3">
							<i class="ki-outline ki-entrance-left fs-2 me-2"></i>Logout</a>
						</div>
					</div>
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						

							@yield('content')


              <div id="kt_app_footer" class="app-footer">
                <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                  <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="https://gariskode.com" target="_blank" class="text-gray-800 text-hover-primary">GarisKode Team</a>
                  </div>
                  <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                      <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">User Guide</a>
                    </li>
                    <li class="menu-item">
                      <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Privacy Policy</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
      </div>
      
      <script>var hostUrl = "assets/";</script>
      <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
			<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

			@yield('script')

			@if (session('success'))
			<script>
					Swal.fire({ text: '{{ session("success") }}', icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
			</script>	
			@endif

			@if (session('error'))
			<script>
					Swal.fire({ text: '{{ session("error") }}', icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
			</script>	
			@endif

			@if (session('msg'))
			<script>
					Swal.fire({
            text: '{{ session("msg") }}',
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Yes, login again!",
            cancelButtonText: "No, return",
						closeOnConfirm: false,
   					closeOnCancel: false,
            customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
          }).then(function (isConfirm) {
							if (isConfirm.value){
								window.location.href = "/logout";
							} else {
                Swal.fire({ text: "Your action has been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
   						}
          });
			</script>	
			@endif

			<script>
				function confirmButtonText(link) {
					Swal.fire({
            text: "Are you sure delete this?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, return",
						closeOnConfirm: false,
   					closeOnCancel: false,
            customClass: { confirmButton: "btn btn-active-light", cancelButton: "btn btn-primary" },
          }).then(function (isConfirm) {
							if (isConfirm.value){
								window.location.href = link;
							} else {
                Swal.fire({ text: "Your action has been cancelled!.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
   						}
          });
				}
			</script>

      <script>
        function toggleFullScreen() {
          var doc = window.document;
          var docEl = doc.documentElement;
  
          var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
          var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;
  
          if(!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
          requestFullScreen.call(docEl);
          }
          else {
          cancelFullScreen.call(doc);
          }
        }
      </script>
    </body>
  </html>
  