


<html>
    <title></title>
    <header>
        
    </header>
    <body>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <table>
            <tr>
               <td>Exist Name </td>
                <td><input type="text" name="name" id="name" ></td>
                <td>New Name </td>
                <td><input type="text" name="name_new" id="name_new" ></td>
            </tr>
            <tr>
                <td>Exist Email </td>
                <td><input type="text" name="email" id="email" ></td>
                <td>New Email </td>
                <td><input type="text" name="email_new" id="email_new" ></td>
            </tr>
            <tr>
                <td>Exist Phone </td>
                <td><input type="text" name="phone" id="phone" ></td>
                   <td>New Phone </td>
                <td><input type="text" name="phone_new" id="phone_new" ></td>
            </tr>
        
        </table>
        <button type="button" name="update" id="update">Update</button>
        </form>
        
        <?php 
        if(isset($_POST['update']))
        {
            $old=[];
            $new=[];
            $old[0]=$_POST['name'];
            $old[1]=$_POST['email'];
            $old[2]=$_POST['phone'];
            $new[0]=$_POST['name_new'];
            $new[1]=$_POST['email_new'];
            $new[2]=$_POST['phone_new'];
            $update = new User();
            $update->editUser($old, $new);
            echo 'update sccessfull';
            
        }
        ?>
        <a href="view.php">Home</a>
    </body>
    
    
</html>

