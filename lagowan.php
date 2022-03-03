<?PHP

session_start();
if(!isset($_SESSION['username'])){
    header(localition:login);
}

?>



<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

    <div class="contimum">

   

    <a href="logout.php"> LOGOUT</a>

    <h1>Welcome <?php echo $_SESSION']; ?> </h1>
     </div>
</body>
</html>