<!doctype html>
<html>
    @include('includes.admin_head')
    <style type="text/css">    	
    	body{
    		background-color: #eeeeee;
    	}
    </style>
<body class="fixed-sn deep-purple-skin">
    @include('includes.admin_header')
    <main>
		@yield('content')
	</main>
	@include('includes.admin_footer')
	<script type="text/javascript">
		// SideNav Button Initialization
		$(".button-collapse").sideNav();
		// SideNav Scrollbar Initialization
		var sideNavScrollbar = document.querySelector('.custom-scrollbar');
		Ps.initialize(sideNavScrollbar);
	</script>
</body>
</html>
