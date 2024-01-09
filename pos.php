<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<?php include("./includes.php"); ?>
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="./vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	
	<?php include("./header.php"); ?>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
							value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i
								class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i
								class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
								aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i
								class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i
								class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
							value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>
	<?php
	
	include("./sidebar.php");
	if (!isset($_SESSION['data_pos_now'])) {
		$_SESSION['data_pos_now']= array();
	}
	if(isset($_GET['pos_item'])){
		$sql = "SELECT * FROM `item_view` WHERE itemID = '{$_GET['pos_item']}'";
		$result = $conn->query($sql);
	
		// Check if the query was successful
		if ($result->num_rows > 0) {
			// Fetch each row and push values into the array
			while ($row = $result->fetch_assoc()) {
				$_SESSION['data_pos_now'][] = $row;
			}
		}
		
		
	}
	
	?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Point of Sales</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Point Of Sale</li>
								</ol>
							</nav>

						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" onclick="showTable()" 
									data-toggle="dropdown">
									View POS Cart
								</button>

							</div>
						</div>
					</div>

				</div>
				<div id="tableContainer" style="display: none; margin-top: -100px;position: fixed; /* Stay in place */ z-index: 1;height: 500px; /* Full height */ overflow: auto; /* Enable scroll if needed */; width: 78%; background-color: white; border-radius: 20px; padding: 30px;  border: 2px solid lightgray; box-shadow: 0 7px 10px rgba(0, 0, 0, 0.2);">
				
				<div class="right-align-button" style="text-align: right;">
				<button id="exitButton"  class="btn btn-danger" onclick="hideTable()" >x</button></div><form action="" method="post">
				<div class="table-responsive">
					
						<table class="table table-striped" style="border-collapse: collapse; width: 100%;">
						<thead>
							<tr>
								<th scope="col">Product ID</th>
								<th scope="col">Product Name</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row"><input type="text" readonly name="" id="" value="54634612" style="background: transparent; border: none;"></th>
								<td><input type="text" readonly name="" id="" value="Gatorade" style="background: transparent; border: none;"></td>
								<td><input type="text" readonly name="" id="" value="4" style="background: transparent; border: none;"></td>
								<td><input type="text" readonly name="" id="" value="45.67" style="background: transparent; border: none;"></td>
							</tr>
							<?php 
							foreach($_SESSION['data_pos_now'] as $tbl_items){
								?>
<script>alert('<?= $tbl_items['itemID'] ?>')</script>
								<?php }
							?>
						</tbody>
					</table>
				</div>
				<hr>
				<h3  class="text-right">Total Price = PHP <input type="text" readonly name="" id="" value="45.67" style="background: transparent; border: none;"></h3>
				<hr>
				<button  class="btn btn-primary" method="submit">Checkout</button>
				</form>
				</div>
				<div class="row clearfix">
					<?php pos_items($conn); ?>

				</div>
				

			</div>
			<?php include("./footer.php"); ?>
		</div>
	</div>
	<!-- js -->
	<script>
		function showTable() {
			var tableContainer = document.getElementById("tableContainer");
			tableContainer.style.display = "block";
		}
		function hideTable() {
			var tableContainer = document.getElementById("tableContainer");
			tableContainer.style.display = "none";
		}
		
	</script>
	<script src="./vendors/scripts/core.js"></script>
	<script src="./vendors/scripts/script.min.js"></script>
	<script src="./vendors/scripts/process.js"></script>
	<script src="./vendors/scripts/layout-settings.js"></script>
</body>

</html>