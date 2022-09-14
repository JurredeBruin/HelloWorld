<?php
require_once "config.php";
 
$name = $prio = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $input_name = trim($_POST["name"]);
    $input_prio = trim($_POST["prio"]);

    $name=$input_name;
    $prio=$input_prio;
        $sql = "INSERT INTO prioriteit (naam, prio) VALUES ('$name', '$prio')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
Name: <input type="text" name="name"><br>
prio: <input type="text" name="prio"><br>
<input type="submit">
</form>

</body>
</html>