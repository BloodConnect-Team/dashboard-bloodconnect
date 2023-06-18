
<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8"/>
        <link rel="shortcut icon" href="/metronic8/demo27/assets/media/logos/favicon.ico"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <style>
            body {
                background-color: white;
            }
        
            [data-bs-theme="dark"] body {
                background-color: black;    
                }
        </style>
    <script>
        var defaultThemeMode = "light";
        var themeMode;
    
        if ( document.documentElement ) {
            if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if ( localStorage.getItem("data-bs-theme") !== null ) {
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
    </head>
    <body  id="kt_body"  class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" >
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <div class="d-flex flex-column flex-center flex-column-fluid">    
                <div class="d-flex flex-column flex-center text-center p-10">        
                    <div class="card card-flush w-lg-650px py-5 border-0">
                        <div class="card-body py-15 py-lg-20">                
                            <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">
                                Oops!
                            </h1>
                            <div class="fw-semibold fs-6 text-gray-500 mb-7">
                                We can't find that page.
                            </div>
                            <div class="mb-0">
                                <a href="{{route('home')}}" class="btn btn-sm btn-primary">Return Home</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>