<?php
    class Cart extends Controllers{

        function index(){
            $sanpham = $this->Call_model('Model_Cart');
            $data = $sanpham->Get_sanpham();
            $this->Call_view('Cart');
           
        }
        
    }
?>  