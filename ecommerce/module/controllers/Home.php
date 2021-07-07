<?php
    class Home extends Controllers{
        
        function index(){
            $sanpham = $this->Call_model('Model_Home');
            $ketqua = $sanpham->Get_sanpham();
            if($ketqua)
            {
                $data = $sanpham->data;
                $this->Call_view('Home',$data);
            }else 
            return 'lỗi câu lênh sql';
        }


    }
?>  