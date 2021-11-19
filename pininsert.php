<html>
    <body>
        <form action = "" method = "GET">
            <input type = "number" name = "key">
            <button>verify</button>
        </form>
    </body>
</html>
<?php

 $verify = $_GET;
 
 $key = $verify['key'];

 if($key == "1234")
 {
    header('Location: insert.php');
  
 }else{
    header('Loaction: pininsert.php');
 }

?>
