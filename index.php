<html>
<head><title>GIEF name</title>
</head>
<body>

 <?php
    error_reporting(0);
    include_once("secret.php");
    if(isset($_GET['name'])){
      if($_GET['name'] === 'ş+ğü++Rক+ল+ম+ۿåæç+èéêëì+íîï'){
		header("Location: flag.php?sec=".$adm);
      }
        echo '<hr>';
    if(strip_tags($_GET['name']) === 'admin')
        echo "show_my_code=1"; 
    else
        echo '<br> Hi ' . strip_tags($_GET['name']) . "<br>";
    }
    

    if($_GET['show_my_code'] == 1)
    highlight_file(__FILE__);
?>
  <br><br>
  <form action="index.php">
  Name:<br>
  <input type="text" name="name" value=""><br>
</form> 

</body>
</html>
