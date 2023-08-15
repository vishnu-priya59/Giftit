<?php 
        $server="localhost";
        $login="root";
        $pass="";
        $database="db_gift";
		
		$con=mysqli_connect($server,$login,$pass,$database);
		if(mysqli_connect_errno()){
		echo "Failed connect to MYSQL".mysqli_connect_error();
		}
		
		if(isset($_POST['Login'])){
		$Username=mysqli_real_escape_string($con,$_REQUEST['Username']);
        $Password=mysqli_real_escape_string($con,$_POST['Password']);
				
		$sql="INSERT INTO `costumer`(`Login`,`Username`,`Password`) 
		VALUES('$Login','$Username','$Password')";
		
		$insert_user = mysqli_query($con, $sql);
		if($sql){

         echo"<script>alert('The gift will deliver to you')</script>";
         echo"<script>window.open('index.php', '_self')</script>";
		}
		}
?>