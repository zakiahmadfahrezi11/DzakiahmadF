<?php
        if(isset($_POST['email'])  || isset($_POST['password'])) {
            $email = $_POST['Dzakiahamd1006@gmail.com'];
            $password = $_POST['zakigeming1'];
    
            if($email == 'dzakiahmad1006@gmail.com' && $password == 'zakigeming1') {
                header('location: ./../dashboard.php');
            } else {
                echo "email atau password salah";
            }
        }
    ?>