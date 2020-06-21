<?php
include_once ROOT.'/models/Home.php';

class HomeController{
    public function actionMain(){
        if (isset($_POST['phone'])){
            $city = $_POST['city'];
            $phone = $_POST['phone'];
            $date = str_replace('.','-',date_format(date_create($_POST['date']), 'Y-m-d'));
            $ip = $_SERVER['REMOTE_ADDR'];
                $firstfile = $_FILES['upload']['tmp_name'];
                $text = file_get_contents($firstfile);
                $uploaddir = ROOT . '/temp/email/' . date("Y-m-d H:i:s") . '.txt';
                $movefile = move_uploaded_file($firstfile,$uploaddir);
            $result = Home::insertDataRequests($phone,$date,$city,$ip,$text);
            if ($result== true){
//                print_r($_FILES['upload']['name']);
//                exit();
            }
        }
        if (isset($_POST['lengthp']) && isset($_POST['lamp']) && isset($_POST['chandelier']) && isset($_POST['pipe']) && isset($_POST['angle'])){
            $lengthp = $_POST['lengthp'];
            $lamp = $_POST['lamp'];
            $chandelier = $_POST['chandelier'];
            $pipe = $_POST['pipe'];
            $angle = $_POST['angle'];
            $data_settings = Home::SelectData();
            foreach ($data_settings as $new_data){
//                $result = (int)$lengthp * $new_data['price_one_m'] * $new_data['glossy'] + (int)$lamp * $new_data['price_lamp'] + (int)$chandelier * $new_data['price_chandelier'] + (int)$pipe * $new_data['price_pipe'] + (int)$angle * $new_data['price_angle'];
                if($_POST['glossy']==true) {
                    $result = (int)$lengthp * $new_data['price_one_m'] * $new_data['glossy'] + (int)$lamp * $new_data['price_lamp'] + (int)$chandelier * $new_data['price_chandelier'] + (int)$pipe * $new_data['price_pipe'] + (int)$angle * $new_data['price_angle'];
                }elseif ($_POST['matte']==true){
                    $result = (int)$lengthp * $new_data['price_one_m'] * $new_data['matte'] + (int)$lamp * $new_data['price_lamp'] + (int)$chandelier * $new_data['price_chandelier'] + (int)$pipe * $new_data['price_pipe'] + (int)$angle * $new_data['price_angle'];
                }
            };
            echo $result;
            exit();
        }


        include_once(ROOT.'/views/main.php');
        return true;
    }
}

?>