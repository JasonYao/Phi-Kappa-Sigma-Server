<!-- jQuery pull from Google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="/assets/js/bootstrap.min.js"></script>

	<!-- jQuery header injection of CSRF token for security -->
	<script>
	$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	});
	</script>
