<html>
<head>
<br>
<br>
<br>
<br>
<h1><center><font color=white>ChemAxon lame counter++</font></center></h1>
<style>
div {
    background-color: white;
    width: 350px;
    padding: 30px;
    border: 22px solid white;
    margin: 100px;
	font-size: 150px;
}
</style>

<body bgcolor="#00bab0">
<br>

<h2><center><font color=white>Congratulations! You are definitely lame!</font></center></h2>
<?php
$file_all = "storage/counter.txt";
$count_all = trim(file_get_contents($file_all));
$count_all++;
file_put_contents($file_all, $count_all);
?>

<?php
$day_name = date('D', strtotime());
$file_day = "storage/days/$day_name";
$count_day = trim(file_get_contents($file_day));
$count_day++;
file_put_contents($file_day, $count_day);
?>

<center><div><center><b><font color="#00bab0"><?php echo $count_all ?></font></b></center></div></center>
</html>
