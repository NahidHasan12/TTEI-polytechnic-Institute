<?php 




include 'config.php';

class database {


	public $db_host = HOST;
	public $db_user = USER;
	public $db_pass = PASS;
	public $db_name = DBNAME;


	public $link;
	public $error;

	public function __construct(){


		$this->dbconnection();


	}

	private function dbconnection(){

		$this->link = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);


		if (!$this->link) {
			
			$this->error="connect faild";

			echo $this->error;
			exit();

		}else{

		
          //echo "success";
			

		}

	}


	public function read($x){

		$result = $this->link->query($x);


		if ($result->num_rows > 0) {
			
			return $result;
		}else{

			return false;


		}

	}




	public function insert($x){

		$result = $this->link->query($x);

		if($result){

			return $result;

		} else{


			return false;
		}

	}







public function validate($x){

      $X = trim($x);
      $x = stripslashes($x);
      $x = htmlspecialchars($x); 
      return $x;

}




	public function delete($x){

		$result = $this->link->query($x);

		if ($result) {
			
			return $result;
		}else{

			return false;

		}


	}




		public function edit($x){

		$result = $this->link->query($x);

		if ($result) {
			
			return $result;
		}else{

			return false;

		}


	}


     public function shortText($t,$l=50){

     	$t = substr($t,0,$l);
     	$t = $t.".....";
     	 return $t;

     }


    public function selectTable($t,$c="c",$l=2){
       
        if ($c=='c' && $l==2) {
        	$x = "SELECT * FROM $t";
        }
        else{
           $x= "SELECT * FROM $t WHERE cat ='$c' OR id='$c' LIMIT $l ";
        }
    	
    	$x = $this->read($x);
    	   if($x){
              //$y = $x->fetch_assoc();
    	   	return $x;
    	   }
             }



}










 ?>