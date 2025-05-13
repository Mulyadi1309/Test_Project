<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Akun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #5873e2 40%, transparent 40%);
            background-color: rgb(231, 231, 231);
            min-height: 30vh;
            color: white;
            padding: 1rem 1rem;
        }

        .sidebar-link {
            padding: 0.6rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .sidebar-link:hover {
            background-color: #f0f4ff;
            color: #3456d1 !important;
            font-weight: 400;
        }
    </style>

</head>

<body>

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')
    <!-- End Sidebar-->

    <!-- ======= Header ======= -->
    @include('layouts.header')
    <!-- End Header -->

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
