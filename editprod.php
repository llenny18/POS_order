<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="./vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<?php include("./header.php"); ?>
	<?php include("./sidebar.php");
	
	
	if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];

    $sql = "SELECT * FROM item_view WHERE itemID = $item_id";
    $result = $conn->query($sql);

    
} else {
    echo "Item ID not provided";
}

	 ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
				

				<!-- Form grid Start -->
				<?php // Step 3: Fetch the result and display the data
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Edit Item by ID</h4>
							<p class="mb-30">All bootstrap element classies</p>
						</div>
					
					</div>
					<form>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>ID</label>
									<input readonly value="<?= $row['itemID']; ?>" type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" value="<?= $row['itemName']; ?>"  class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Stock</label>
									<input type="text" value="<?= $row['itemStock']; ?>"  class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Price</label>
									<input type="text" value="<?= $row['itemPrice']; ?>"  class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Description</label>
									<input type="text" value="<?= $row['itemDescription']; ?>"  class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Brand</label>
									<input type="text" value="<?= $row['itemBrand']; ?>"  class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Category</label>
									<input type="text" value="<?= $row['itemCategory']; ?>"  class="form-control">
								</div>
							</div>
						</div>
						
					<hr>
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
							
								<label>Image</label>
								<br>	
								<img src="data:image/png;base64,<?= base64_encode($row["itemImage"]) ?>" alt="" style="height: 250px; padding: 10px; border: 1px solid lightgray; border-radius: 20px;">
									<input type="file" class="form-control">
								</div>
							</div>
						</div>
						
					</form>
					
				</div>
				<!-- Form grid End -->
<?php

        }
    } else {
        echo "No records found";
    }


?>

			</div>
			<?php include("./footer.php"); ?>
		</div>
	</div>
	<!-- js -->
	<script src="./vendors/scripts/core.js"></script>
	<script src="./vendors/scripts/script.min.js"></script>
	<script src="./vendors/scripts/process.js"></script>
	<script src="./vendors/scripts/layout-settings.js"></script>
</body>
</html>