<div class="col-sm-12">
				
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<!-- <script src="<?=base_url('assets_admin/js')?>/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/bootstrap.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/chart.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/chart-data.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/easypiechart.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/easypiechart-data.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/bootstrap-datepicker.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/custom.js"></script> -->
	<script src="<?=base_url('assets_admin/js')?>/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/bootstrap.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/chart.min.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/chart-data.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/easypiechart.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/easypiechart-data.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/bootstrap-datepicker.js"></script>
	<script src="<?=base_url('assets_admin/js')?>/bootstrap-table.js"></script>
	

	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>





	<script>
 		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
	
		
</body>
</html>