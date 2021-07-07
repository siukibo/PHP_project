<?php
    class Model_Home extends Database{

        function Get_sanpham(){
            $sql = 'SELECT * FROM sanpham ORDER BY daban DESC LIMIT 8 ';
            $ketqua = $this->ThucthiSQL($sql);
            $data=[];
            if($ketqua){
                $data = $this->pdo_stm->fetchAll();
                return $data;
            }else return 'loi cau lenh sql';
            
        }
    }
?>