<?php 
include 'partials/dbconn.php';
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body >
    <?php
    require('partials/navbar.php');
?>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full text-center">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Welcome to My Website!</h1>
        <p class="text-gray-600 mb-6">Thank you for visiting. We hope you find what you're looking for.</p>
        <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Learn More</a>
    </div>
</div>  

</body>
</html>
