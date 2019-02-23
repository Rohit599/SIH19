<title>{{ config('app.name') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#999">
<!-- Global site tag (gtag.js) - Google Analytics -->



<!--  Font Awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="{{ url('css/mdb.min.css') }}" rel="stylesheet">
<link href="{{ url('css/style.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
<style> 
/*body {
  background-color: #fff;
}
main {
    padding-top: 100px;
}*/
</style>
@yield('css')