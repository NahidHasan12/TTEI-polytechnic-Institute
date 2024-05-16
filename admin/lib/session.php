

<?php



 class session{

 	    public static function init(){
 	    	session_start();
 	    }

        public static function set($a,$b){
        	$_SESSION["$a"] = $b;

        }

        public static function get($a){
        	if(isset($_SESSION["$a"])){
        		return $_SESSION["$a"];
        	}
        	else{
        		return false;
        	}
        }

        public static function chklogin(){
        	self::init();
        	if (self::get('login')==false) {
        		self::destroy();
        	}
        }


        public static function chksession(){
        	self::init();
        	if (self::get('login')==true) {
        		header("Location:home.php");
        	}
        }

        public static function destroy(){
        	session_destroy();
        	header("Location:index.php");
        }

 }






?>