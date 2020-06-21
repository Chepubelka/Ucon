<?php

class Home
{
        public static function insertDataRequests($phone,$date,$city,$ip,$text){
            $db = Db::get_instance();
            $result = $db->insert_requests($phone,$date,$city,$ip,$text);
            return true;
        }
        public static function SelectData(){
            $db = Db::get_instance();
            $result = $db->get_data('settings');
            if ($result){
                return $result;
            }
            return false;
        }
}