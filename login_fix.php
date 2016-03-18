<?php
    session_start();
    header('Content-type: text/html; charset=UTF-8');
    
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $id = $_POST["id"];
    $passwd = $_POST["password"];

    $db = new mysqli($servername, $username, $password, $database, $dbport);
    $db->set_charset('utf8');

    $statement = $db->prepare("SELECT * FROM muse.members WHERE name = ? and password = ?");
    $statement -> bind_param('ss',$id,$passwd);
    $statement->execute();
    $statement->bind_result($id,$passwd);

?>
<html><body>
<?php
    var_dump($statement->fetch());
    if(empty($statement->fetch())){
        echo "login failed.";
    }else{
        echo "Welcome ". $id ."!"; 
    }
?>
</body></html>