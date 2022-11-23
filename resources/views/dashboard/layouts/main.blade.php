<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{$title}} | {{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="stylesheet" href="/assets/css/main/app-dark.css" />

    {{-- favicon --}}
    <link
      rel="shortcut icon"
      href="/assets/images/logo/favicon.svg"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="/assets/images/logo/favicon.png"
      type="image/png"
    />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Icon --}}
    <link rel="stylesheet" href="/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/shared/iconly.css" />

    {{-- datatables --}}
    <link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="/assets/css/pages/datatables.css">

    {{-- choices --}}
    <link rel="stylesheet" href="/assets/extensions/choices.js/public/assets/styles/choices.css">

    {{-- TRIX EDITOR --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <style>
      trix-toolbar[data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
  </head>

  <body>
    <div id="app">
    @include('dashboard.partials.sidebar')
      <div id="main" class="layout-navbar">
        @include('dashboard.partials.navbar')

        <div id="main-content">
            <div class="page-heading">
            <div class="page-title">
                <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav
                    aria-label="breadcrumb"
                    class="breadcrumb-header float-start float-lg-end"
                    >
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                        <a href="#">{{$active}}</a>
                        </li>
                    </ol>
                    </nav>
                </div>
                </div>
            </div>
            @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>{{ now()->year }} &copy; #LMTYWIT</p>
                </div>
                <div class="float-end">
                    <p>
                    Crafted by <a href="https://linktr.ee/apifsprd">@apifsprd n his &#x2615;</a>
                    </p>
                </div>
                </div>
            </footer>
        </div>
      </div>
    </div>


    {{-- Jquery --}}
    <script src="/assets/extensions/jquery/jquery.min.js"></script>

    {{-- Dayjs --}}
    <script src="/assets/extensions/dayjs/dayjs.min.js"></script>

    {{-- Apexchart --}}
    {{-- <script src="assets/js/pages/ui-apexchart.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script> --}}
    
    {{-- Datatables --}}
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table1').DataTable();
        } );
    </script>

    {{-- Choices.js --}}
    <script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/assets/js/pages/form-element-select.js"></script>

    {{-- Trix Editor --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script>
      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
      })
    </script>

    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/pages/dashboard.js"></script>

     {{-- myscript --}}
     {{-- <script src="assets/js/myscript.js"></script>    --}}
  </body>
</html>