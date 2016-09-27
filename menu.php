<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
 $curpage = basename($_SERVER['PHP_SELF']);
?>

<div id="menu"> 
<ul>
	<li><a href="p1.php" <?php if ($curpage == 'p1.php') { echo 'class="active"'; } ?>>Side 1</a></li>
	<li><a href="p2.php" <?php if ($curpage == 'p2.php') { echo 'class="active"'; } ?>>Marc</a></li>
	<li><a href="p3.php" <?php if ($curpage == 'p3.php') { echo 'class="active"'; } ?>>Jesper</a></li>
	<li><a href="p4.php" <?php if ($curpage == 'p4.php') { echo 'class="active"'; } ?>>Ditlev</a></li>
</ul>
</div>