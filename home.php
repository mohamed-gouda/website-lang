<?php
include 'lang.php';
//get lang type by get method , if the user don't select lang will open with the defulte lang .
$action = isset($_GET['action']) ? $_GET['action'] : 'english';
// put the file name in var cuz we will use it more thane time .
$pageName = 'home';

?>


<html>
<head>
<title> <?php echo $pageName?> </title>
</head>
<body>
<!-- this links to switch btn arabic and english -->
<a href=<?php echo $pageName .".php?action=arabic" ?>>عربى</a><br>
<a  href=<?php echo $pageName .".php?action=english" ?>>english</a>

<?php
    // the name of function of lang write as "action" var .
    echo "<h4>" . $action("welcome"). $pageName . "</h4><br>";
    echo "<h2>" . $action("name") . "</h2><br>";
    echo "<h2>" .$action("age") . "</h2>";
?>
<br>
<!-- this links to going to anther page with the current lang selected 'inportant' -->
<h3> <a href="<?php echo 'page1.php?action='.$action ?>"> <?php echo $action("page1")?> </a> </h3>
<h3> <a href="<?php echo 'page2.php?action='.$action ?>"> <?php echo $action("page2")?> </a> </h3>

</body>
</html>