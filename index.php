<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="">
        <input type="url" name="link" id="">
        <button type="submit">send</button>
    </form>
    <?php
    require 'conn.php';
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $link = $_POST['link'];

        $ins = "INSERT into courses(name , link) values ('$name' , '$link')";
        mysqli_query( $con , $ins);
    }
    ?>
</body>
</html>