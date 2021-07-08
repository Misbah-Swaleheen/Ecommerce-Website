<?php session_start();
    
class shopping_db{

    public function pdo1()
    {
        # code...
        $con = new pdo('mysql:host=localhost;dbname=mydatabase', 'root','') ;
        return $con;
    }

    public function insert()
    {
        # code...
       
            # code...
            $file = $_FILES['img'];
        move_uploaded_file($_FILES['img']['tmp_name'], 'assets/images/users/'.$_FILES['img']['name'] );
        $photo = $file['name'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $photo1 =  $photo;
       
            $query = $this->pdo1()->prepare('insert into users (name, email, password, user_type_id, photo) values (:name, :email, :password, 2, :photo)');
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("password", $password, PDO::PARAM_STR);
            $query->bindParam("photo", $photo1, PDO::PARAM_STR);
            $query->execute();

            // header('location:signin.php');
            echo("<script>window.location.href='signin.php'</script>");


        
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

    public function fetchUser()
    {
        # code...
        $email = $_SESSION['user'];
        
        $query = $this->pdo1()->prepare("SELECT * FROM users where email = :email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
       
       return $user;
 

    }
    public function fetchsignup()
    {
        # code...
        $email = $_POST['email'];
        $query = $this->pdo1()->prepare("SELECT email FROM users WHERE email = :email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function addCategory(){
        if (isset($_POST['btn1'])) {
            # code...
            $name = $_POST['category'];
            $query = $this->pdo1()->prepare('insert into categories (name) values (:name)');
            $query->bindParam("name", $name, PDO::PARAM_STR);
            
            $query->execute();   
            var_dump($query);  
            }

       
    }

    public function addProduct()
    {
        # code...
        if (isset($_POST['btn1'])) {
            # code...
            $name = $_POST['name'];
            $stock =  $_POST['stock'];
            $b_price =  $_POST['b_price'];
            $s_price = $_POST['s_price'];
            $c_id = $_POST['c_id'];
            $img = $_FILES['img'];
            $dec = $_POST['dec'];
            $user = $this->fetchUser();
            $json = json_encode($_FILES['img']['name']);

            $query = $this->pdo1()->prepare('insert into products( name, p_dec, p_buy_price, p_sale_price, p_stock, p_catlog, p_img, p_user ) values ( :name, :p_dec, :p_buy_price, :p_sale_price, :p_stock, :p_catlog, :p_img, :p_user)');
            $query->bindParam("name", $name, PDO::PARAM_STR);
            $query->bindParam("p_dec", $dec, PDO::PARAM_STR);
            $query->bindParam("p_buy_price", $b_price, PDO::PARAM_INT);
            $query->bindParam("p_sale_price", $s_price, PDO::PARAM_INT);
            $query->bindParam("p_stock", $stock, PDO::PARAM_INT);
            $query->bindParam("p_catlog", $c_id, PDO::PARAM_INT);
            $query->bindParam("p_img", $json, PDO::PARAM_STR);
            $query->bindParam("p_user", $user['id'], PDO::PARAM_INT);            
            $query->execute(); 
            
            $count = count($_FILES['img']['name']);
		for($i=0; $i< $count; $i++){
			$tmp_name = $_FILES['img']['tmp_name'][$i];
			$o_name = "assets/images/products/".$_FILES['img']['name'][$i];
			move_uploaded_file($tmp_name, $o_name);
		}



        }
    }

    public function selectCategories()
    {
        # code...
        $query = $this->pdo1()->prepare("SELECT * FROM categories");
        
        $query->execute();

        $user = $query->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

}

$obj = new shopping_db;
