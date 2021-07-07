<?php
class Controllers{

    public function Call_model($model){
        include_once('./module/models/'.$model.'.php');
        return new $model;
    }

    public function Call_view($action ,$data=[]){
    include_once('./module/views/layouts/Header.php');
    include_once('./module/views/problem/'.$action.'.php');
    include_once('./module/views/layouts/Footer.php');

    }

}
?>