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
    $query = "SELECT * FROM muse.members WHERE name ='$id' and password = '$passwd'";
    $result = $db->query($query);

?>
<html><body>
<?php
    if(empty($result->fetch_assoc())){
        echo "login failed.";
    }else{
        echo "Welcome ". $id ."!"; 
    }
?>
</body></html>