
<?php
  include"inc/header.php";
?>





<script> 
 function nahid(){
    setTimeout(function(){
       window.location ="index.php";
    },1000);

 }

</script>

<?php
 $text = "";
if ($_SERVER['REQUEST_METHOD']=='POST') {

	$name = $db->validate($_POST['name']);
	$pass = $db->validate($_POST['pass']);
	$repass = $db->validate($_POST['repass']);
	$area = $db->validate($_POST['area']);


	 if(empty($name) || empty($pass) || empty($repass) || empty($area)){
	 	$text = "<span style='color:red'>empty not allowed</span>";
	 }
   else{
      
           $x = "INSERT INTO user (username,password,repassword,area) values ('$name','$pass','$repass','$area')";

          $x = $db->insert($x);
            if ($x) {
              $text = "<span style='color:blue'>Insert Successful</span>";
            }else{
              $text = "<span style='color:red'>Insert Failed</span>";
              
            }
            echo "<script> nahid(); </script>";
         }
   }
?>



<div id="main">

<?php
  include"inc/menu.php";
?>

 <div id="main2"> <h1> Create User Page </h1>

        <div id="sign"> 
           		<form  class="form" action="" method="post">
				<h1>sign-up </h1>
                 
                  <p><?php echo $text; ?> </p>

				<input type="text"   class="fname" name="name" placeholder="type your  username">
				<input type="password"   class="fname" name="pass" placeholder="type your password">
				<input type="password"   class="fname" name="repass" placeholder="type your repassword">
				<input type="text"  class="fname" name="area" placeholder="type your area">
				
				<input type="submit" class="submit" name="submit" value="sign-up">


		</form>
          
        </div>
 </div>

 </div>




<?php
  include"inc/footer.php";
?>