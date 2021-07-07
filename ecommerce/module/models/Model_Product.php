<?php
    class Model_Product extends Database{
        public $data=[];
        protected $db="";
        
        function Get_sanpham(){
            $sql = 'SELECT * FROM sanpham  ';
            $ketqua = $this->ThucthiSQL($sql);
            $this->data=NULL;
            if($ketqua)
            $this->data = $this->pdo_stm->fetchAll();
            return $ketqua;
        }
    }
?>