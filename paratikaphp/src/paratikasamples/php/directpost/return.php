<?php 
    header('Content-type: text/html; charset=utf-8');
?> 
<html>
<head>
<title>Merchant Result Page</title>
</head>
<body>
	<?php 
        if(empty($_POST) ) {
            echo "Post Parameters are empty";
        }
        else foreach ($_POST as $key => $value){
            echo $key . ": " . $value . "</br>";
        }
	?>
</body>
</html>
