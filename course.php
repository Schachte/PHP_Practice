<?php
	$currentPage = 'store';
	$pageTitle = 'Store'; 
	include('includes/header.php'); 
	include('includes/products_list.php');

	$product_id = $_GET["class_id"];

	$item = $products[$product_id]; 

?>

<?php echo "<a href = 'store.php'>Entire Store</a> ->" . $item['course'] . "<br>"; ?>

<center>

<?php 	echo "<h1>{$item['course']}</h1><br><hr>" ; 
		echo "<img src = {$item['img_location']}><br><br>"; 
		echo "<h3>The cost of the {$item['course']} course is {$item['cost']}</h3>";
?>

</center>



<?php 
	include("includes/footer.php") 
?>