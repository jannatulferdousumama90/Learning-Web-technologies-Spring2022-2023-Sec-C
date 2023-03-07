<?php 
    session_start();

    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "null data found...";
        }

        else
        {
        $file = fopen('login.txt', 'r');
        while (!feof($file)) 
        {
            $data=fgets($file);
            $user = explode('|', $data);
            if($username == trim($user[0]) && $password == trim($user[1]))
            {
                $_SESSION['status'] = true;
                setcookie('status', 'true', time()+3600, '/');
                header('location: dashboard.php');
            }
        }
        echo "invalid user";
        }
    
    }else
    {
        //echo "invaid request, please login first!";
        //echo "<a href='index.html'>Go back to login page</a>";
        header('location: dashboard.php');
    }

?>