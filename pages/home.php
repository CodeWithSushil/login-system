<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: ./login.php');
    exit();
}
include_once('./header.php');
?>

<section class="section">
<h1>Home Page</h1>    
</section>

<?php
include_once('./footer.php');
?>