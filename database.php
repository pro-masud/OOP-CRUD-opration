<?php 
// require_once"./config.php";
class Database{
   public $host = DB_HOST;
   public $user = DB_USER;
   public $pass = DB_PASS;
   public $dbname = DB_NAME;

   // construct function creating here 

   public function __construct(){
      $this -> connentionDB();
   }

   public $connection;
   public $error;

   private function connentionDB(){
      $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> dbname );
      if(!$this -> connection){
         $this -> error = "Connection Fail". $this -> connection -> connection_error;
      }
   }


   /**
    * Select and Read Database
    */ 
    public function selected($query){
      $result = $this -> connection -> query($query) or die($this -> error . __FILE__);
      if( $result -> num_rows > 0){
         return $result;
      }else{
         return false;
      }
    }
}