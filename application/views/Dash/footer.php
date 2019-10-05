<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- this is last div for main body content -->
</div>

<!-- jQuery 3 -->
		<script src='<?= base_url("Assets/dashdata/bower_components/jquery/dist/jquery.min.js"); ?>'></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="<?= base_url('Assets/dashdata/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?= base_url('Assets/dashdata/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>

		<script src="<?= base_url('Assets/dashdata/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
		<script src="<?= base_url('Assets/dashdata/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
		<script>
			
			$(function () {
   				$('#example1').DataTable()
    			$('#example2').DataTable({
      				'paging'      : true,
      				'lengthChange': false,
      				'searching'   : false,
      				'ordering'    : true,
      				'info'        : true,
      				'autoWidth'   : false
    			})
  			})

		</script>








		<!-- Morris.js charts -->
		<script src="<?= base_url('Assets/dashdata/bower_components/raphael/raphael.min.js'); ?>"></script>
		<script src="<?= base_url('Assets/dashdata/bower_components/morris.js/morris.min.js'); ?>"></script>
		<!-- Sparkline -->
		<script src="<?= base_url('Assets/dashdata/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
		<!-- jvectormap -->
		<script src="<?= base_url('Assets/dashdata/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
		<script src="<?= base_url('Assets/dashdata/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
		<!-- jQuery Knob Chart -->
		<script src="<?= base_url('Assets/dashdata/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
		<!-- daterangepicker -->
		<script src="<?= base_url('Assets/dashdata/bower_components/moment/min/moment.min.js'); ?>"></script>
		<script src="<?= base_url('Assets/dashdata/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
		<!-- datepicker -->
		<script src="<?= base_url('Assets/dashdata/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="<?= base_url('Assets/dashdata/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
		<!-- Slimscroll -->
		<script src="<?= base_url('Assets/dashdata/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
		<!-- FastClick -->
		<script src="<?= base_url('Assets/dashdata/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('Assets/dashdata/dist/js/adminlte.min.js'); ?>"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="<?= base_url('Assets/dashdata/dist/js/pages/dashboard.js'); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url('Assets/dashdata/dist/js/demo.js'); ?>"></script>

		<!-- Data Table -->
		<script src="<?= base_url('Assets/Css/MDB/js/ownDatatable.js'); ?>" rel="stylesheet"></script>

		<script>
			function initMap(){
				var data = {lat: 18.5204, lng:73.8567};
				var map = new google.maps.Map(
					document.getElementById('gmap'),{zoom: 4,center: data}
					);
				var marker = new google.maps.marker({position: data, map: map});

				//AIzaSyA9cdCrDg8szAZW8cuLGXwqJvCku3NZb-8
				//AIzaSyBbg9eocspEZOo61mJwhOJL3iZIUDJY4dc
				//AIzaSyDC-_xT-Ydu7J5LpMuGwrgYhBozFs_3a3Y

			}
		</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC-_xT-Ydu7J5LpMuGwrgYhBozFs_3a3Y&callback=initMap">
		</script>





	</body>
</html>

