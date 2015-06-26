<?php
	$currentPage = 'store';
	$pageTitle = 'Store'; 
	include('includes/header.php'); 
?>
<div class = "container">

<?php

	//Product array to hold the data of each available course
	$products = array(
		"PHP Web Course, $100"		=> "imgs/1.png",
		"HTML Training Guide, $55" 	=> "imgs/2.png",
		"CSS Crash Course, $75" 	=> "imgs/3.png",
		); 
	$image_data = array();
	$image_data[] = ("/imgs/1.png");

	//Goal: Implement loop to output image directory data
	foreach($products as $product => $value) { ?>

	<div id = "data_container">
		<div id = "product_box">

			<?php echo $product; ?>

			<br>

			<img src = <?php echo $value; ?> />

		</div>
	</div>

	<?php } ?> <br>
</div>

<?php include("includes/footer.php"); ?> 