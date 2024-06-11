<!DOCTYPE html>
<html lang="tr" >
<body>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{asset('styleLog.css')}}">
</head>

<body >
  <div style="background-color: rgb(109, 178, 146)" class="login-root">

      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">

        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              @yield('form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<!-- partial -->

</body>
</html>
{{--




