<?php
include_once ROOT.'/models/Apanel.php';

class ApanelController{
    public function actionIndex(){
        session_start();
        if (isset($_SESSION['admin'])){
        $datausers = Apanel::getUsersData();
        $datarequests = Apanel::getRequestsData();
        $datasettings = Apanel::getSettingsData();
        if (isset($_POST['updateSettings'])){
            $price_one_m = $_POST['price_one_m'];
            $price_lamp = $_POST['price_lamp'];
            $price_angle = $_POST['price_angle'];
            $glossy = $_POST['glossy'];
            $price_chandelier = $_POST['price_chandelier'];
            $matte = $_POST['matte'];
            $price_pipe = $_POST['price_pipe'];
            $result = Apanel::UpdateSettings($price_one_m,$price_lamp,$price_angle,$glossy,$price_chandelier,$matte,$price_pipe);
        };
        if (isset($_POST['addUser'])){
            $login = $_POST['login'];
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $result = Apanel::insertData($login,$password);
        }
        if (isset($_POST['deletereq'])){
            $idreq = $_POST['deletereq'];
            $result = Apanel::deleteRequest($idreq);
            if ($result == true){
                echo "Good";
                exit();
                }
        }
            if (isset($_POST['deleteuser'])){
                $iduser = $_POST['deleteuser'];
                $result = Apanel::deleteUser($iduser);
            }
            if (isset($_POST['updateuser'])){
                $iduser = $_POST['updateuser'];
                $newname = $_POST['newname'];
                $result = Apanel::updateUser($iduser,$newname);
            }
            if (isset($_POST['newcolor'])){
                $newcolor = $_POST['newcolor'];
                $result = Apanel::insertColor($newcolor);
                exit();
            }
            if (isset($_POST['deletecolor'])){
                $deletecolor = $_POST['deletecolor'];
                $result = Apanel::deleteColor($deletecolor);
                exit();
            }

        require_once(ROOT.'/views/Admin/admin.php');
        return true;
    }
    else{
        header("Location: /admin");
    }
}
    public function actionLogout(){
        session_start();
        unset($_SESSION['admin']);
        unset($_SESSION['login']);
        header("Location: /admin");
    }
}

?>