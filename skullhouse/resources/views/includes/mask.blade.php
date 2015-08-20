<!-- Fade in page loader-->
<div id="mask">
	<div id="loader">
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(window).load(function() {
            $("#loader").fadeOut();
            $("#mask").delay(200).fadeOut("slow");
        });
    });
</script>
