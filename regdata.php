   <body>    
      
<?php
   if(isset($_FILES['image'])&&isset($_POST["sname"])){
	$sname=$_POST["sname"];
	$regno=$_POST["regno"];
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$address=$_POST["address"];
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$regno.".jpg");
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

     
   </body>
</html>