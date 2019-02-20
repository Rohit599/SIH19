<footer>
    &copy; All Rights Reserved by <a href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>.
</footer>

<!-- JQuery -->
<script type="text/javascript" src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{ url('js/popper.min.js') }}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ url('js/mdb.min.js') }}"></script>
<!-- AddThis -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b80e414df5112b3"></script>
@yield('script')
