<?php
    class Detail extends Controllers{

        function index($id){
            $sanpham = $this->Call_model('Model_Detail');
            $data = $sanpham->Get_1sp($id);
            $data2 = $sanpham->Get_sanpham();
            $this->Call_view('Detail',['data1'=>$data,'all'=>$data2]);
           
        }
        
    }
?>  