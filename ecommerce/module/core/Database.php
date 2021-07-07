<?php
    class Database{
        Protected $conn = NULL;
        protected $pdo_stm = NULL;
        function Database()
        {
            try{
                $this->conn = new PDO("mysql: host=localhost ; dbname=banhang","root","");
                $this->conn->exec("SET NAMES UTF_8");
            }catch(PDOException $ex)
            {
                echo "<h3>".$ex->getMessage()."</h3>";
                echo "lỗi kết nối cơ sở dữ liệu";
            }
        }
        function ThucthiSQL($sql,$data=NULL)
        {
            $this->pdo_stm = $this->conn->prepare($sql);
            $ketqua = false;
            if($data!=NULL)
                $ketqua = $this->pdo_stm->execute($data);
            else
                $ketqua = $this-> pdo_stm->execute();
            return $ketqua;
        }
    }
?>
