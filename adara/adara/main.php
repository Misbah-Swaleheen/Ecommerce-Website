<?php session_start();
    class web{
        public function pdo1()
    {
        # code...
        $con = new pdo('mysql:host=localhost;dbname=mydatabase', 'root','') ;
        return $con;
    }
        public function sel_cat()
        {
            # code...
            $query = $this->pdo1()->prepare("SELECT count(p.id) as id_count, c.id, c.name FROM categories c left join products p on p.p_catlog = c.id GROUP BY c.name");
        
        $query->execute();
        $cat = $query->fetchAll(PDO::FETCH_ASSOC);
       
       return $cat;
        }

        public function sel_pro()
        {
            # code...
            $query = $this->pdo1()->prepare("SELECT * FROM products");
        
        $query->execute();
        $cat = $query->fetchAll(PDO::FETCH_ASSOC);
       
       return $cat;
        }

        public function sel_pro_by_proid($a)
        {
            # code...
            $query = $this->pdo1()->prepare("SELECT * FROM products where id = :id");
            $query->bindParam("id", $a, PDO::PARAM_INT);
        
        $query->execute();
        $pro = $query->fetch(PDO::FETCH_ASSOC);
       
       return $pro;
        }

        public function sel_pro_by_id($a)
        {
            # code...
            $query = $this->pdo1()->prepare("SELECT * FROM products where p_catlog = :p_catlog");
            $query->bindParam("p_catlog", $a, PDO::PARAM_INT);
        
        $query->execute();
        $pro = $query->fetchAll(PDO::FETCH_ASSOC);
       
       return $pro;
        }

        public function select()
        {
            # code...
            if (isset($_POST["btn1"])) {
                # code...
           
                # code...
                $email = $_POST['email'];
                $password = $_POST['password'];
            $query = $this->pdo1()->prepare("SELECT email, password FROM users where email = :email and password = :password");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_ASSOC);
           
           return $user;
            }
        }
    }
    $obj = new web; 
?>