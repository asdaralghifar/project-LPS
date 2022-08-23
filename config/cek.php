<?php

$error=''; 

include "koneksi.php";
if(isset($_POST['submit']))
{               
    $username   = $_POST['username'];
    $password   = md5($_POST['password']);
    
    $query = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($query) == 0)
    {
        // $error = "Username or Password is invalid";
        echo "<script language=javascript>
            window.alert ('Salah Username/Password')
            javascript:document.location='index.php'
            </script>";
    }
    else
    {
        $row = mysqli_fetch_assoc($query);
        $_SESSION['username']=$row['username'];
        $_SESSION['level'] = $row['level'];
        
        if($row['level'] == "admin")
        {
            
            // header("Location: admin");
            echo "<script language=javascript>
            window.alert ('Anda Login Sebagai Admin')
            javascript:document.location='auth/admin'
            </script>";
        }
        
        else if($row['level'] == "guru")
        {
            
            // header("Location: member");
            echo "<script language=javascript>
            window.alert ('Anda Login Sebagai Guru')
            javascript:document.location='auth/guru'
            </script>";
        }

        else
        {
            $error = "Failed Login";
        }
    }
}           
?>

