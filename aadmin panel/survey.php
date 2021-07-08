<?php 
    class survey{
        public function conn()
        {
            $conn = mysqli_connect('localhost', 'root', '', 'survey');
            return $conn
        }

        public function insert()
        {
            if (isset($_POST['btn1'])) {
                # code...
                $name = $_POST['name'];
                $email =  $_POST['email'];
                $phone =  $_POST['phone'];
        
              
                $json = json_encode($_FILES['fav_sport']);

                mysqli_query($conn,"INSERT INTO `userdata`(`name`, `email`, `phone`, `fav_sport`) VALUES ('$name', '$email', '$phone', '$json' )");
    
        }

        public function count()
        {
            $sql="SELECT * FROM `userdata`";
            $query =  mysqli_query($conn,$sql);
            $rowcount=mysqli_num_rows($result);
            return $rowcount;
        }

        public function select()
        {
            $sql="SELECT * FROM `userdata`";
            $query =  mysqli_query($conn,$sql);
            $result = mysqli_fetch_assoc($query);
            return $result;
        }

        public function selectbyid($id)
        {
            $sql="SELECT * FROM `userdata` WHERE id = $id";
            $query =  mysqli_query($conn,$sql);
            $result = mysqli_fetch_assoc($query);
            return $result;
        }

        public function deletebyid($id)
        {
            $sql="DELETE FROM `userdata` WHERE id = $id";
            $query =  mysqli_query($conn,$sql);
        }
    } 

    $obj = new survey;
?>