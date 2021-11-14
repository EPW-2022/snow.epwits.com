<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/img/logosnow.png" type="image/x-icon">
  <!-- Plugins -->
  <link href="/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css" integrity="sha512-K0/1AQCY3Ueo90Xbwxoyo70O26FSaNZgnXLLBpXZc/Id+nZEzhE0JZvy9KUJci3jDuqCstr4/wxTIqfoxYeMBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- Data Tables --}}
  <link href="/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js">
  <!-- Bootstrap CSS -->
  <link href="/vendor/bootstrap5/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/vendor/bootstrap5/dist/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="/css/admin/style.css" rel="stylesheet" />
  <link href="/css/admin/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!--Theme Styles-->
  <link href="/css/admin/dark-theme.css" rel="stylesheet" />
  <link href="/css/admin/light-theme.css" rel="stylesheet" />
  <link href="/css/admin/semi-dark.css" rel="stylesheet" />
  <link href="/css/admin/header-colors.css" rel="stylesheet" />

  <title>SNOW - EPW 2022 | {{ $title }}</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

    @include('admin.layouts.topbar')

    @include('admin.layouts.sidebar')

    <!--start content-->
    <main class="page-content">

      @yield('container')

    </main>
    <!--end page main-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    @include('admin.layouts.switcher')

  </div>
  <!--end wrapper-->


  <!-- Bootstrap bundle JS -->
  <script src="/vendor/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="/vendor/jquery/dist/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/vendor/metismenu/js/metisMenu.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js" integrity="sha512-o36qZrjup13zLM13tqxvZTaXMXs+5i4TL5UWaDCsmbp5qUcijtdCFuW9a/3qnHGfWzFHBAln8ODjf7AnUNebVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
  {{-- Data Tables --}}
  <script src="/vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>
  <script src="/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="/js/table-datatable.js"></script>
  <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>
  <!--app-->
  <script src="/js/script.js?modify={{ date("Ymd")}}"></script>
  <script src="/js/app.js"></script>

</body>

</html>