<?php
    class Model_Detail extends Database{
        public $data=[];
        protected $db="";
        function Get_sanpham($id){
            $sql = 'SELECT * FROM sanpham WHERE id = '.$id.'';
            $ketqua = $this->ThucthiSQL($sql);
            $this->data=NULL;
            if($ketqua)
            $this->data = $this->pdo_stm->fetchAll();
            return $ketqua;
        }
        function Get_all(){
            $sql = 'SELECT * FROM sanpham ORDER BY daban DESC LIMIT 4 ';
            $ketqua = $this->ThucthiSQL($sql);
            $this->data=NULL;
            if($ketqua)
            $this->data = $this->pdo_stm->fetchAll();
            return $ketqua;
        }
    }
?>