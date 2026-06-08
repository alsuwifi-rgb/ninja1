<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('dashboard/assets/css/print.css') }}" rel="stylesheet">
    <title>Driver Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #333;
            padding: 6px;
            text-align: center;
        }
    </style>
    @yield('styles')
</head>
<body>

@yield('content')


@yield('scripts')

@if(request('print'))

    <script>
          window.onload = function() {
        window.print();
    }
    </script>
@endif

</body>
</html>
