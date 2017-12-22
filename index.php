<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>
<?php
//$con = mysqli_connect("localhost","root","","ptest") or die('Db not connected');
mysql_connect("localhost","root","root");
mysql_select_db("soonero");
?>
<?php if(isset($_POST['submit'])){
    $name = $_POST["username"];
    $query = "INSERT INTO user(username) VALUES ('".$name."')";
    $run = mysql_query($query);
    if($run)
    {
        header("Location:index.php");
    }else{
        echo 'fail';
    }
}?>
<div>
    <h1>Hello World</h1>
    <form method="post">
        <div>
            <label>username : </label>
            <input type="text" name="username">
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
</div>


<div>
    <?php
    $query1 = "SELECT * FROM user";
    $result = mysql_query($query1);
    if($result)
    {
        while($row = mysql_fetch_array($result))
        {
            $name = $row["username"];
            echo "Name: " . $name;
            echo '<br>';
        }
    }
    ?>
</div>
</body>
</html>
