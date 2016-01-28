<!-- Fade in page loader-->
<div id="mask">
	<div id="loader">
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(window).load(function() {
            $("#mask").delay(300).fadeOut(1500);
        });
    });
</script>
