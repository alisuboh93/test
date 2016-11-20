<?php
error_reporting(E_ALL);
include 'lib/User.php';

$obj = new User();
$userInfo = $obj->getUserById($_GET['id']);

?>
<html>
    <title></title>
    <header>
    </header>

    <body>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <table border='1'>
            <tr>
                <td>Name </td>
                <td><input type="text" name="name" id="name" ></td>
            </tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email" id="email" ></td>
            </tr>
            <tr>
                <td>Phone </td>
                <td><input type="text" name="phone" id="phone" ></td>
            </tr>
            <tr><td><input type="submit" name="submit" id="submit"></td></tr>
            
            
        </table> 
            <br/>
           
           
        
        </form>
        <?php 
        if(isset($_POST["submit"]))
        {
           $s = [];
            $s[0]=$_POST["name"];
            $s[1]=$_POST["email"];
            $s[2]=$_POST["phone"];
           $obj->InsertUser($s);
        }
        
        ?>
        <a href="list.php">View List of Pepol</a>
        
    </body>
    
    
    
    
    
    
</html>



