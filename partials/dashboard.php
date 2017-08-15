<?php 

	include("../marketingPichart.php"); 
	include("../salesLinechart.php");
?>



<div ng-controller="DashboardController">
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<h2>Admin Dashboard</h2>
				<div class="col-md-3">
					<div class="adminLeads">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<p>158 <br/> Leads</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="adminLeads">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<p>158 <br/> Leads</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="adminLeads">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<p>158 <br/> Leads</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="adminLeads">
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<p>158 <br/> Leads</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<h2>User Performance</h2>
				<div class="col-md-12 userPerformance">
					<h3>Marketing(Leads)</h3>
					<div class="col-md-4">
						<div id="chart-container">FusionCharts XT will load here!</div>
					</div>
					<div class="col-md-4">
						<div id="chart-containerSecond">FusionCharts XT will load here!</div>
					</div>
					<div class="col-md-4">
						<div id="chart-containerThird">FusionCharts XT will load here!</div>
					</div>
				</div>
				<div class="col-md-12 userPerformance">
					<h3>Sales(Leads)</h3>
					<div class="col-md-4">
						<div id="chart-containerSales">FusionCharts XT will load here!</div>
					</div>
					<div class="col-md-4">
						<div id="chart-containerSalesSecond">FusionCharts XT will load here!</div>
					</div>
					<div class="col-md-4">
						<div id="chart-containerSalesThird">FusionCharts XT will load here!</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="container">
			<div class="row">
				<h2>Revenue Overview</h2>
				<div class="revenueOverview">
					<div class="col-md-4">
						<h4 style="color: red">Total Earning</h4>
						<p style="font-size: 20px">Rs. 34,45,678</p><br/><br><br>
						<p>Today &nbsp;&nbsp;&nbsp;  Rs.29,00,000</p>
						<hr>
						<p>This week &nbsp;&nbsp;&nbsp; Rs.1,08,02,500</p>
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<p>Total Leads Converted this month:26</p>
					</div>
					<div class="col-md-8">
						<div id="chart-containerLine">FusionCharts XT will load here!</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>