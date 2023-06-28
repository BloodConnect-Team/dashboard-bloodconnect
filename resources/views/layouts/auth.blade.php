<!DOCTYPE html>
<html lang="en">
	<head><base href=""/>
		<title>BloodConnect &mdash; {{$data['title']}}</title>
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
	</head>
	<body id="kt_body" class="app-blank app-blank">
    <script>
			
      var defaultThemeMode = "light"; 
      var themeMode; 
      if ( document.documentElement ) { 
        if ( document.documentElement.hasAttribute("data-theme-mode")) {
           themeMode = document.documentElement.getAttribute("data-theme-mode"); 
          } else { 
            if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); 
          } else { 
            themeMode = defaultThemeMode; } 
          } if (themeMode === "system") { 
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        } 
        document.documentElement.setAttribute("data-theme", themeMode); 
      }
      </script>
			<div class="d-flex flex-column flex-root" id="kt_app_root">
				<style>body { background-image: url('{{ asset("assets/media/auth/bg10.jpeg") }}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset("assets/media/auth/bg10-dark.jpeg") }}'); }</style>
				<div class="d-flex flex-column flex-lg-row flex-column-fluid">
					<div class="d-flex flex-lg-row-fluid ">
						<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100 ">
							<img class="theme-light-show mx-auto mw-100 w-150px w-lg-700px mb-10 mb-lg-20 d-none d-sm-block" src="{{ asset('assets/media/blood.png') }}" alt="" />
							<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-700px mb-10 mb-lg-20 d-none d-sm-block" src="{{ asset('assets/media/blood.png') }}" alt="" />
						</div>
					</div>
					<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
						<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
							<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
								<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">	

							@yield('content')
							
								</div>
									<div class="d-flex flex-stack justify-content-center text-center">
										<div class="d-flex justify-content-center text-center fw-semibold text-primary fs-base gap-5">
											<a class="text-danger" href="http://bloodconnect.social/panduan-pengguna" target="_blank">User Guide</a>
											<a class="text-danger" href="http://bloodconnect.social/kebijakan-privasi" target="_blank">Privacy Policy</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        @yield('script')


	</body>
</html>


