
<?php
require_once('config.php');
?>


<?php

if(isset($_POST)){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO users(firstname,lastname,username,password)VALUES(?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$firstname,$lastname,$username,$password]);
    if($result){
        echo 'success';
    }else{
        echo 'Error while saving' ;
    }

}else{
echo 'no data';

}