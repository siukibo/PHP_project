<?php
    class Detail extends Controllers{
        function get_1($id){
            $this->id = $id;
            $sanpham = $this->Call_model('Model_Detail');
            $ketqua = $sanpham->Get_sanpham($id);
            if($ketqua)
            {
                $data = $sanpham->data;
                return $data;
            }else 
            return 'lỗi câu lênh sql';
        }
        function get_all(){
            $ketqua = $sanpham->Get_all();
            if($ketqua)
            {
                $data = $sanpham->data;
                return $data;
                 
            }else 
            return 'lỗi câu lênh sql';
        }
        function index($id){
            $data = get_1($id);
            $data2 = get_all();
            $this->Call_view('Detail',[$data,$data2]);
           
        }
        
    }
?>  