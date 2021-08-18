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
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KPLHS Connect
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  @include('layouts.inc.css')

  @yield('style')

  <style>
        .content{
            padding-top: 60px !important;
        }

        .container{
        margin-top:0px !important;
        }

        .image-shadow{
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }

      @media only screen and (max-width: 413px) {
            .login-page .container{
                padding-top:0px !important;
                margin-top:0px !important;
            }

            h2{
                font-size: 20px;
            }
        }

  </style>

</head>

<body class="login-page">
  <div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="{{ $background_image }}">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                {{-- <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li> --}}
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                <strong>Copyright &copy; 2020-2021 Chawilai</strong> All rights reserved.
                {{-- <strong>Copyright &copy; 2020-2021 <a target="_blank" href="http://chawilai.com">Chawilai</a></strong> All rights reserved. --}}
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  @include('layouts.inc.javascript')

  @yield('script')

  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>

</body>

</html>
