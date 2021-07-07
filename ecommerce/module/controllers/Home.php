<?php
    class Home extends Controllers{
        
        function index(){
            $sanpham = $this->Call_model('Model_Home');
            $data = $sanpham->Get_sanpham();
            $this->Call_view('Home',$data);
            
        }


    }
?>  