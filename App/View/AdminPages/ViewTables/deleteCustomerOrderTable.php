<?php
			include($_SERVER['DOCUMENT_ROOT']."/WebTechRepo/DB/createCon.php");
			
			
			if(isset($_GET['del'])){
				$id=$_GET['del'];
				mysqli_query($conn, "DELETE FROM customer_order WHERE id=$id");
				echo"<script>alert('deleted')</script>";
				header('location: /WebTechRepo/App/View/AdminPages/ViewTables/viewCustomerOrderTable.php');
			}
			
?>
				