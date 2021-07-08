<?php session_start();
    if (isset($_GET['btn']) && $_GET['btn'] == 'logout') {
        # code...
        session_destroy();
        echo("<script>window.location.href='signin.php'</script>");
    } 
?>