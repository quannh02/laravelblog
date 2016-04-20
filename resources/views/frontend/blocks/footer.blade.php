</div>
	<!-- end row -->
	</div>   

	<script type="text/javascript" src="{{ url('public/user/js/jquery.js') }}"></script>
	<script type="text/javascript">
		$.ajaxSetup({
   		headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
	</script>
	<script type="text/javascript" src="{{ url('public/user/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('public/user/js/select.js') }}"></script>