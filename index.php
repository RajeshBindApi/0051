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
        <input type="text" name="first_name" placeholder="First Name"><br><br>
        <input type="text" name="second_name" placeholder="Second Name"><br><br>
        <button type="submit" name="submit">Send</button>

        <h1>Hello</h1>

    </form>

    <?php
    
        if(isset($_POST['first_name'],$_POST['second_name']))
        {
            $first = $_POST['first_name'];
            $second = $_POST['second_name'];

        }

        echo "$first $second";
    
    ?>

</body>
</html>