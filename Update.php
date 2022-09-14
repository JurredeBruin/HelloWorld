<?php
require_once "config.php";
 
$id = $name = $prio = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $name = trim($_POST["name"]);
    $prio=trim($_POST["prio"]);

    
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        $sql = "UPDATE prioriteit SET naam='$name', prio='$prio' WHERE id=$id";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        mysqli_stmt_close($stmt);
    }
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    Id: <input type="text" name="id"><br>
                    Name: <input type="text" name="name"><br>
                    prio: <input type="text" name="prio"><br>
                    <input type="submit">
                    </form>
</body>
</html>