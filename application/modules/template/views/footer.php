
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<!-- <script src="<?php// echo base_url() ;?>ui/js/jquery-1.10.2.min.js"></script> -->
    	<script src="<?php echo base_url() ;?>ui/js/bootstrap.min.js"></script>
    	<script src="<?php echo base_url() ;?>ui/js/bootswatch.js"></script>
    	<script src="<?php echo base_url() ;?>ui/js/Chart.min.js"></script>
    	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<script src="<?php echo base_url() ;?>ui/js/ie10-viewport-bug-workaround.js"></script>
    	<script >
    		//funcction pop up delete
    		    		function confirmDialog() {
    			return confirm('Are you sure?')
    		}

    		//function PRINT
    		function myFunction() {
    			window.print();
    		}

    	</script>

    	

	<script>
		$(document).ready(function() {
			$('#example').DataTable( {
				"ordering": false,
				"language": {
					"url": "<?php echo base_url() ;?>ui/css/datatables/Indonesian.json"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'excel', 'pdf', 'print'
				]
			} );
		} );
	</script>
</body></html>

</body></html>