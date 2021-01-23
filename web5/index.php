
<?php

session_start();
///$_SESSION['count'] = 0;
$_SESSION['count'] += 1;
$num_visits = $_SESSION['count'];


?>
<body>
<h1>Hello</h1>
<p>You have visited this page <?php echo$num_visits;?> times</p>

<?php

if($num_visits >4){
echo  "Thank you for visiting the page a lot.";
}
if ($num_visits == 10){

    header('location: congratulations.php');
}



?>

<p><a href="?link=1">Reset</a></p>

</body>