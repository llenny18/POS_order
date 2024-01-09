<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="./src/images/LOGO.png" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="index.php">Dashboard</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Inventory</span>
						</a>
						<ul class="submenu">
							<li><a href="./stableprod.php">Stable Products</a></li>
							<li><a href="./unstableprod.php">Low Stock Products</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> POS </span>
						</a>
						<ul class="submenu">
							<li><a href="pos.php">POS</a></li>
							<li><a href="./receipt.php">Receipts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> Delivery </span>
						</a>
						<ul class="submenu">
							<li><a href="dreports.php">Reports</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>

	<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pos_inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

function stable_items($conn){
$sql = "SELECT * FROM `item_view` where itemStock > 50";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	<td>'.$row["itemID"].'</td><td scope="row">'.$row["itemStock"].'</td><td scope="row">'.$row["itemPrice"].'</td><td scope="row">'.$row["itemName"].'</td><td scope="row">'.$row["itemDescription"].'</td><td scope="row">'.$row["itemBrand"].'</td><td scope="row">'.$row["itemCategory"].'</td><td><a href="editprod.php?item_id='.$row["itemID"].'" style="background-color: darkblue; color: #ffffff; padding: 7px; border-radius: 5px;">Edit</a></td></tr>';
  }
} else {
  echo "0 results";
}
}


function unstable_items($conn){
$sql = "SELECT * FROM `item_view` where itemStock < 50";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	<td>'.$row["itemID"].'</td><td scope="row">'.$row["itemStock"].'</td><td scope="row">'.$row["itemPrice"].'</td><td scope="row">'.$row["itemName"].'</td><td scope="row">'.$row["itemDescription"].'</td><td scope="row">'.$row["itemBrand"].'</td><td scope="row">'.$row["itemCategory"].'</td><td><a href="editprod.php?item_id='.$row["itemID"].'" style="background-color: darkblue; color: #ffffff; padding: 7px; border-radius: 5px;">Edit</a></td></tr>';
  }
} else {
  echo "0 results";
}
}

function pos_items($conn){
$sql = "SELECT * FROM `item_view` where itemStock > 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<a href="pos.php?pos_item='.$row["itemID"].'"><div class="col-lg-3 col-md-6 col-sm-12 mb-30" style="cursor: pointer;">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="data:image/png;base64,'.base64_encode($row["itemImage"]).'" alt="" style="height: 250px;display: block; margin-left: auto; margin-right: auto;">
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li><i class="fa fa-plus-square"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">'.$row["itemName"].'</h5>
								<p class="mb-0">'.$row["itemPrice"].'</p>
							</div>
						</div>
					</div></a>
				';
			}
} else {
  echo "0 results";
}
}




function receipts($conn){
$sql = "SELECT * FROM `receipt_sums`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	<td>'.$row["oID"].'</td><td scope="row">'.$row["totalPricer"].'</td><td scope="row">'.$row["orderDate"].'</td><td><a href="receiptrecs.php?rid='.$row["oID"].'" style="background-color: darkblue; color: #ffffff; padding: 7px; border-radius: 5px;">View</a></td></tr>';
  }
} else {
  echo "0 results";
}
}


function receiptid($conn, $rid){
$sql = "SELECT * FROM `receipts` where oID = '$rid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	
	<td>
                           <span class="text-inverse">'.$row["itemName"].'</span><br>
                           <small>'.$row["itemDescription"].'</small>
                        </td>
	<td class="text-center">'.$row["itemPrice"].'</td>
	<td class="text-center">'.$row["oQuantity"].'</td>
	<td class="text-right">'.$row["totalPrice"].'</td>
	</tr>';
  }
} else {
  echo "0 results";
}
}

function receiptidsum($conn, $rid){
$sql = "SELECT * FROM `receipt_sums` where oID = '$rid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    return $row["totalPricer"];
  }
} else {
  echo "0 results";
}
}

function deliveriesbyID($conn, $id){
$sql = "SELECT * FROM `delivery_info` WHERE delivery_info.delivery_groupID = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	<td>'.$row["itemName"].'</td>
	<td scope="row">PHP '.$row["itemPrice"].' x '.$row["itemCount"].'</td>
	<td scope="row">'.$row["totalPrice"].'</td>
	<td scope="row">'.$row["itemBrand"].'</td>
	<td scope="row">'.$row["dCostumerName"].'</td>
	<td scope="row">'.$row["dCostumerNumber"].'</td>
	<td scope="row">'.$row["dPlace"].'</td>
	<td scope="row">'.$row["dDate"].'</td>
	<td scope="row">'.$row["dtName"].'</td>';
  }
} else {
  echo "0 results";
}
}

function dreports($conn){
$sql = "SELECT * FROM `delivery_grouped`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '<tr>	<td>'.$row["delivery_groupID"].'</td><td scope="row">'.$row["dDate"].'</td><td scope="row">'.$row["dCostumerName"].'</td><td><a href="deliveries.php?did='.$row["delivery_groupID"].'" style="background-color: darkblue; color: #ffffff; padding: 7px; border-radius: 5px;">View</a></td></tr>';
  }
} else {
  echo "0 results";
}
}



function receiptiddate($conn, $rid){
$sql = "SELECT * FROM `receipt_sums` where oID = '$rid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    return $row["orderDate"];
  }
} else {
  echo "0 results";
}
}


?>