<?php

class Db{
     public $db;
     public $i = 1;
     
     static private $_ins = NULL;
     
     static public function get_instance() {
      if(self::$_ins instanceof self) {
     return self::$_ins;
      }
      return self::$_ins = new self;
     }
     
     public function __construct() {
    $paramsPath = ROOT.'/config/db_params.php';
//         $paramsPath = ROOT.'/config/db_local.php';
      $params = include($paramsPath);
//       echo "<h1>Соединение с базой данных</h1>";
      $this->db = new mysqli($params['host'],$params['user'],$params['password'],$params['dbname']);
     
      if($this->db->connect_error) {
     throw new DbException("Ошибка соединения : ");
      }
     
      $this->db->query("SET NAMES 'UTF8'");
     }
     
     private function __clone() {
     
     }
     public function login($login,$password){
        $sql = "SELECT * from users Where login='$login'";
         $pass = $this->db->query($sql);
         $completepass = $pass->fetch_assoc();
         $result = password_verify($password,$completepass['password']);
         if ($result == true) {
             return $completepass;
         }
             return false;
     }
     public function check_user($login){
        $sql = "SELECT * from users Where login='$login'";
         $result = $this->db->query($sql);
         $row = $result->fetch_assoc();
         return $row;
     }
     public function update_settings($price_one_m,$price_lamp,$price_angle,$glossy,$price_chandelier,$matte,$price_pipe){
        $query = "Update settings set price_one_m = '$price_one_m',price_lamp = '$price_lamp',glossy='$glossy',price_chandelier='$price_chandelier',matte='$matte',price_pipe='$price_pipe' where id=1";
        $result = $this->db->query($query);
       return true;
    }
     public function get_data($table) {
      $query = "SELECT * from $table";
      $result = $this->db->query($query);
      for($i = 0; $i < $result->num_rows; $i++) {
     $row[] = $result->fetch_assoc();
      }
      return $row;
     }
     public function insert_data($login,$password){
        $query = "Insert into users(login,password) values ('$login','$password')";
        $result = $this->db->query($query);
        return true;
     }
     public function  insert_requests($phone,$date,$city,$ip,$text){
        $query = "Insert into requests(city,birthday,phone,statement,ip_user) values ('$city','$date','$phone','$text','$ip')";
         $result = $this->db->query($query);
//         if ($result == true){
//         return true;}
//         else return false;
         return true;
     }

     public function delete($id,$table){
        $query = "Delete from $table where id = '$id'";
         $result = $this->db->query($query);
        return true;
     }
    public function update_user($id,$login){
        $query = "Update users set login ='$login' where id = '$id'";
        $result = $this->db->query($query);
        return true;
    }

    public function insert_color($jsondata){
         $query = "Update settings set color = '$jsondata' where id=1";
         $result = $this->db->query($query);
         return true;
    }



}

?>