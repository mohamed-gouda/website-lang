<?php
include 'lang.php';
//get lang type by get method , if the user don't select lang will open with the defulte lang .
$action = isset($_GET['action']) ? $_GET['action'] : 'english';
// put the file name in var cuz we will use it more thane time .
$pageName = 'page2';

?>


<html>
<head>
<title> <?php echo $pageName?> </title>
</head>
<body>


<!-- this links to switch btn arabic and english -->
<a href=<?php echo $pageName .".php?action=arabic" ?>>عربى</a><br>
<a  href=<?php echo $pageName .".php?action=english" ?>>english</a><br>

<?php
 // the name of function of lang write as "action" var .
    echo "<h4>" . $action("welcome"). $pageName . "</h4><br>";
    echo "<h2>" . $action("name") . "</h2><br>";
    echo "<h2>" .$action("age") . "</h2>";
?>
<br>


</body>
</html>