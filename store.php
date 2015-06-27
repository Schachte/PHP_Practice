<?php
	$currentPage = 'store';
	$pageTitle = 'Store'; 
	include('includes/header.php'); 
	include('includes/products_list.php')
?>

<div class = "container">

	<?php foreach($products as $product_index => $product_value) { ?>

	<div id = "data_container">
		<div id = "product_box">

			<br>
			<?php echo $product_value["course"]; ?>
			<?php echo "<a href = course.php?class_id={$product_index} </a>"; ?> 
			<?php 
				echo '<img src = ' . $product_value["img_location"] . ' />'; 
			?>

		</div>
	</div>

	<?php } ?> 

	<br>
</div>

<?php include("includes/footer.php"); ?> 