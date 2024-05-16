
<?php 


if (isset($_GET['action']) && $_GET['action']=='logout') {
	session::destroy();
}

 ?>

 <div id="main1"> 
      <li> <a class="a1" href="home00000111.php"> Dashbord </a> </li>
      <li> <a class="a2" href="admissions00000112.php"> Admission </a> </li>
      <li> <a href="students00000113.php"> Upload student details </a> </li>
      <li> <a href="gallerys00000114.php"> Upload gallery photos </a> </li>
      <li> <a class="a3" href="teachers00000115.php"> Upload Teachers </a> </li>
      <li> <a class="a4" href="user00011100221.php"> Create User </a> </li>
      <li> <a class="a5" href="?action=logout"> Log Out </a> </li>
 </div>