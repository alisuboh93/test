<?php
error_reporting(E_ALL);
include 'lib/User.php';

$obj = new User();
$users = $obj->listUsers();
//print_r($users);die;

function get_fun()
{
    $data = new DBConnection();
    $options='';
    foreach ($data->reshapeData($result) as $key => $value) {
       $options .= '<option value="'.$key.'">'.$value.'</option>';
    }  
}

?>
<html>
    <title>
        
    </title>
  
    <body>
       
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <select name="list_name" id="list_name" onchange="this.form.submit();">
            <option value="pleas select">pleas select</option>
            <?php
            
              for ($i=0;$i<count($users);$i++) 
               {
                  
                 echo '<option value=' . $users[$i][0]. '>'. $users[$i][1].'</option>';
               }
            ?> 
        </select>
        </form>
            <br/>
         <br/>
         <div id="2"> <a href="edit.php">To Edit User</a> </div>
         <br/>
         <br/>
         
        <div id="1">  
        <?php
        
if((string)$_POST['list_name']!="pleas select"){
if(isset($_POST['list_name']))
{
    $id;
  $id=  $_POST['list_name'];

$full= new DBConnection();
$f= $full->execute('select * from info_p where id ='.$id) ;
//print_r($f);
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>";

    echo "<tr>";
    echo "<td>" . $f['name'] . "</td>";
    echo "<td>" . $f['email'] . "</td>";
    echo "<td>" . $f['phone'] . "</td>";

    echo "</tr>";

}}
        
        ?>
        </div>
        
        
       
        
    </body>
    
    
</html>
    
    