<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
        <a href="/projecten/HelloWorld/Create.php">Create prio</a></br>
        <a href="/projecten/HelloWorld/Update.php">Update prio</a></br>
        <a href="/projecten/HelloWorld/Delete.php">Delete prio</a></br>

        <a href="/projecten/HelloWorld/Read.php">get prio</a>
        <p>prio:</p>
        <form action="Read.php" method="get">
        Id: <input type="text" name="id"><br>
        <input type="submit">
        </form>

</body>
</html>