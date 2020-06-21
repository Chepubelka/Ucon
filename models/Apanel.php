<?php


class Apanel{
    public static function getUsersData(){
        $db =  Db::get_instance();
        $resultdatausers = $db->get_data('users');
        if ($resultdatausers){
            return $resultdatausers;
        }
        return false;
    }
    public static function getRequestsData(){
        $db =  Db::get_instance();
        $resultdatausers = $db->get_data('requests');
        if ($resultdatausers){
            return $resultdatausers;
        }
        return false;
    }
    public static function getSettingsData(){
        $db =  Db::get_instance();
        $resultdatausers = $db->get_data('settings');
        if ($resultdatausers){
            return $resultdatausers;
        }
        return false;
    }
    public static function UpdateSettings($price_one_m,$price_lamp,$price_angle,$glossy,$price_chandelier,$matte,$price_pipe){
        $db = Db::get_instance();
        $resultdataUpdate = $db->update_settings($price_one_m,$price_lamp,$price_angle,$glossy,$price_chandelier,$matte,$price_pipe);
    }
    public static function insertData($login,$password){
        $db =  Db::get_instance();
        $checkuser = $db->check_user($login);
        if ($checkuser==null){
        $result = $db->insert_data($login,$password);
        }else
        return false;
    }
    public static function checkLogged(){
        session_start();
        if (isset($_SESSION['admin'])){
            return $_SESSION['admin'];
        }
    }
    public  static  function  deleteRequest($id){
        $table = 'requests';
        $db = Db::get_instance();
        $deletereq = $db->delete($id,$table);
    }
    public  static  function  deleteUser($id){
        $table = 'users';
        $db = Db::get_instance();
        $deleteuser = $db->delete($id,$table);
    }
    public  static  function  updateUser($id,$login){
        $db = Db::get_instance();
        $updateuser = $db->update_user($id,$login);
    }
    public static function insertColor($newcolor){
        $db = Db::get_instance();
        $json_data = $db->get_data('settings');
        foreach ($json_data as $json_item){
        $arraydata = json_decode($json_item['color'],TRUE);
        $last_key = (int)(array_search(end($arraydata),$arraydata))+1;
        $arraydata +=[$last_key=>$newcolor];
        $jsondata = json_encode($arraydata,JSON_UNESCAPED_UNICODE);
        }
        $insertcolor = $db->insert_color($jsondata);
    }
    public static function deleteColor($idcolor){
        $db = Db::get_instance();
        $json_data = $db->get_data('settings');
        foreach ($json_data as $json_item){
            $arraydata = json_decode($json_item['color'],TRUE);
            unset($arraydata[$idcolor]);
            $jsondata = json_encode($arraydata,JSON_UNESCAPED_UNICODE);
        }
        $insertcolor = $db->insert_color($jsondata);
    }
}
?>