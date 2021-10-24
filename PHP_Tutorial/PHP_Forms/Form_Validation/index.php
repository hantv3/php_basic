<?php
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post">
    Name: <input type="text" name="name">
    <br>
    E-mail: <input type="text" name="email">
    <br>
    Website: <input type="text" name="email">
    <br>
    Comment: <textarea name="comment"  cols="40" rows="5"></textarea>
    <br>
    Gender:
    <input type="radio" name="gender" value="famale">Female
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="other">Other
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>