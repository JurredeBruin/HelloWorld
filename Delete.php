<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "config.php";
    $id=trim($_POST["id"]);
    
    $sql = "DELETE FROM prioriteit WHERE id = $id";
    
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
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
id: <input type="text" name="id"><br>
<input type="submit">
</form>
</body>
</html>