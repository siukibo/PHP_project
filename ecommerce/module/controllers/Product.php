<?php
    class Product extends Controllers{
        
        function index(){
            $sanpham = $this->Call_model('Model_Product');
            $ketqua = $sanpham->Get_sanpham();
            if($ketqua)
            {
                $data = $sanpham->data;
                $this->Call_view('Product',$data);
            }else 
            return 'lỗi câu lênh sql';
        }


    }
?>  