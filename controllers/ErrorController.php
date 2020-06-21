<?php


class ErrorController
{
    public function actionIndex(){
        include_once(ROOT.'/views/404error.php');
        return true;
    }
}