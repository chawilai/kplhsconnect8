<!--
=========================================================
* Paper Dashboard 2 PRO - v2.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2-pro
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img//favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        KPLHS Connect
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    @include('layouts.inc.css')
    <style>
        .image-shadow{
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }
    </style>
</head>

<body class="">
    <div class="wrapper ">

        @include('layouts.inc.sidebar')

        <div class="main-panel">
            @include('layouts.inc.nav')

            @yield('content')

            @include('layouts.inc.footer')
        </div>
    </div>
    <!--   Core JS Files   -->
    @include('layouts.inc.javascript')
    @yield('script')
</body>

</html>
