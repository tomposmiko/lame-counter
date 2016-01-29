<html>
<br>
<br>
<br>
<br>
<h1><center><font color=white>ChemAxon Lame Counter++</font></center></h1>
<body bgcolor="#00bab0">
<br>
<br>
<center>
<font color=white size=+1>
Screwed up? Hit the Counter! 
<br>
<br>Released the development code to the production server?
<br>Arrived one week early at the Xmas party venue by accident? 
<br>
<br>
Just hit Lame Counter++ and let the pain go away!
</font>
<center>
<br>
<br>
<br>

<style>
div {
    background-color: white;
    width: 350px;
    padding: 10px;
    border: 22px solid white;
    margin: 20px;
    font-size: 150px;
}
</style>

<body bgcolor="#00bab0">
<br>
<h2><font color=white>Current state:
<?php
$file = "do/storage/counter.txt";
$count = trim(file_get_contents($file));
file_put_contents($file, $count); ?>

<center><div><center><b><font color="#00bab0"><?php echo $count ?></font></b></center></div></center>
<a href='do/'><font color=white size=+3>Lame counter</font></a>
</html>
