
<?php
include 'lib/database.php';
include 'lib/session.php';
session::chksession();
$db=new database();
?>

<script> 

function nahid(){
    setTimeout(function(){
        window.location='home00000111.php';
    },1500)
}

 </script>


<?php


$text="";
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $db->validate($_POST['name']);
    $pass = $db->validate($_POST['password']);
     if(empty($name) || empty($pass)){
        $text="<span style='color:red'>empty not allowed</span>";
     }
     else{

        $s = "SELECT * FROM user WHERE 
                                      username = '$name' and 
                                      password = '$pass'";
        $r = $db->read($s);
          if (!$r) {
            $text = "<span style='color:red'>wrong user or password </span>";
          }else{
            $text = "<span style='color:blue'>success<span>";
            session::set("login",true);
            echo "<script> nahid(); </script>";

            $q = $r->fetch_assoc();
            $userRole = $q['role'];
            session::set("userRole",$userRole);
            $_SESSION['userRole']=$userRole; 
          }

     }
}




?>





<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<style> 

body{
	padding: 0;
	margin: 0;
	outline: 0;
	transition: 1s;
}
#h1{
	text-align: center;
    font-size: 29px;
    font-family: system-ui;
    color: #2839ad;
    margin-top: 82px;
}
#main{
	width: 45%;
    height: 298px;
    margin: 42px auto;
    border-radius: 40px;
    background: #9C27B0;
    box-shadow: 1px 3px 17px #00000078;
}

#main #main1, #main2{
	width: 49.969%;
    height: 298px;
    background: #fcfffe;
    border-radius: 40px;
    float: left;
}
#main #main1{
	position: relative;
}
#main #main1 img{
	position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 40px;

}

#main #main2{
	text-align: center;
}
#main #main2 h1{
	font-size: 27px;
    color: black;
    font-family: system-ui;
}

#main #main2 #main21{
	width: 90%;
    height: 207px;
    margin: -7px auto;
}
#main #main2 #main21 h2{
	font-size: 19px;
    color: black;
    font-family: system-ui;
}
#main #main2 #main21 a{
	font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    color: black;
    font-family: system-ui;
}
#main #main2 #main21 a:hover{
	text-decoration: underline;
	color: #0be8a1;
	transition: 1s;

}

#main #main2 #main21 .input{
	width: 124%;
    height: 27px;
    margin: 1px 9px;
    border: none;
    border-bottom: 1px solid black;
    outline: none;
    padding-left: 5px;
    font-family: system-ui;
    font-weight: bold;
    color: gray;
}
#main #main2 #main21 .sub{
	width: 91%;
    height: 28px;
    background: black;
    color: white;
    font-size: 19px;
    margin: 10px 40px;
}
#main #main2 #main21 .sub:hover{
    background: white;
    color: black;
    transition: 1s;
}

@media only screen and (max-width: 700px){
	#main{
		width: 82%;
	}
}
@media only screen and (max-width: 600px){
	#main{
		width: 58%;
        height: 305px;
	}
	#main #main1{
       display: none;
}
	#main #main2 {
        width: 100%;
        height: 305px;
}

}

</style>

</head>
<body>
<h1 id="h1"> Welcome TTEI Admin Door </h1>
<div id="main">
  <div id="main1"> 
     <img src="clgt.jpg">
  </div>
  <div id="main2">
       <h1> Log in </h1>
       <div id="main21"> 
       	<h2> Sign into your Account. </h2>
           <p> <?php echo $text; ?> </p>

       	  <table> 
             <form action="" method="post"> 

                 <tr> 
                    <td> <input class="input" type="text" name="name" placeholder="UserName"> </td>
                 </tr>
                 <tr> 
                    <td> <input class="input" type="password" name="password" placeholder="Password"> </td>
                 </tr>
                 <tr> 
                    <td> <input class="sub" type="submit" name="submit" value="Login"> </td>
                 </tr>
             </form>
       	  </table>
           <a href="#"> Forgate Passawor? </a>
       </div>
   </div>

</div>

</body>
</html>