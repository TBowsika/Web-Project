<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="script.js"></script>
<link rel="stylesheet" href="index.css">
<style>
 .content p{
     font-size:20px;
     margin:25px 0px;
 }
 .btn{
    width:100px;
    padding:15px;
    border-style:solid;
    border-color:blue;
    color:white;
    background:transparent;
    margin:20px 10px;
    font-family:sans-serif;
    text-align:center;
    font-weight:bold;
    border-radius:25px;
    text-decoration:none ;
}
    .btn:hover{
        background:blue;
        color:white;
    }
 </style>
</head>
<body>
    <div class="main">
<nav class="navbar">
<img src="logo.png" class="logo">
<ul>
    <li><a href=""  >Home</a></li>
    <li><a href="lengthconverter.html" >Length Converter </a></li>
    <li><a href="weightconverter.html">Weight Converter</a></li>
    <li><a href="temperature.html">Temperature Converter</a></li>
</ul>
</nav>
<div class="content">
<h1 style="font-size:70px;">Measurements Converter</h1>
<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?><br>
   <a href="logout.php" class="btn">Logout</a>
<div>
    
</body>
</html>