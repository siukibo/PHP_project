<?php
    class Model_Home extends Database{
        public $data=[];
        protected $db="";
        
        function Get_sanpham(){
            $sql = 'SELECT * FROM sanpham ORDER BY daban DESC LIMIT 8 ';
            $ketqua = $this->ThucthiSQL($sql);
            $this->data=NULL;
            if($ketqua)
            $this->data = $this->pdo_stm->fetchAll();
            return $ketqua;
        }
        function Get_1($id){
            $sql = 'SELECT * FROM sanpham WHERE id ='.$id.'';
            $ketqua = $this->ThucthiSQL($sql);
            $this->data=NULL;
            if($ketqua)
            $this->data = $this->pdo_stm->fetchAll();
            return $ketqua;
        }
    }
?>