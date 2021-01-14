<?php
    if($_POST['logout']){
        unset($_SESSION['id']);
        unset($_SESSION['user_admin']);
        unset($_SESSION['pass_admin']);
        unset($_SESSION['login']);
    }
    if(isset($_POST['login'])){
        $user=addslashes($_POST[username_log]);
        $pass=addslashes($_POST[password_log]);
        
        $data=$conn->query("SELECT * FROM admin WHERE email='$user' AND pass='$pass'");
        if(mysqli_num_rows($data)==1){
            $iki=mysqli_fetch_array($data); 
             $_SESSION['id'] = $iki[id_admin];
             $_SESSION['user_admin'] = $user;
             $_SESSION['pass_admin'] = $pass;
             $_SESSION['login'] = TRUE;
            
           
            
            ?>
    <script>
        document.location="?page=dashboard";
</script>
<?php
            
        }else{
            ?>  
            <script>
                alert("User Dan Password Salah !");
            </script>
<?php
        }
       
    }
?>