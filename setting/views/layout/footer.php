
<!-- Required Jqurey -->
<script src="<?php echo $server; ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo $server; ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo $server; ?>/assets/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?php echo $server; ?>/assets/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="<?php echo $server; ?>/assets/plugins/waves/js/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?php echo $server; ?>/assets/plugins/slimscroll/js/jquery.slimscroll.js"></script>
<script src="<?php echo $server; ?>/assets/plugins/slimscroll/js/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?php echo $server; ?>/assets/plugins/search/js/classie.js"></script>

<!-- notification -->
<script src="<?php echo $server; ?>/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="<?php echo $server; ?>/assets/plugins/charts/sparkline/js/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="<?php echo $server; ?>/assets/plugins/countdown/js/waypoints.min.js"></script>
<script src="<?php echo $server; ?>/assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?php echo $server; ?>/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo $server; ?>/assets/pages/dashboard.js"></script>
<script type="text/javascript" src="<?php echo $server; ?>/assets/pages/elements.js"></script>
<script src="<?php echo $server; ?>/assets/js/menu.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("li.lang").click(function(){
			var varlang=$(this).attr('value');
			$.post(server+'/home/dashboard', {lang: varlang}, function(data, textStatus, xhr) {
				/*optional stuff to do after success */
				location.reload();
			});
		});
	})
</script>
</body>

</html>
