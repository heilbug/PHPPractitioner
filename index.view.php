<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            padding: 20px;
            background-color: #223;
            color: #eee;
        }
    </style>
</head>
<body>
    
    <ul>
        <?php 
            forEach ($person as $feature => $val) {
                echo "<li><strong>$feature</strong>  $val</li>";
            }
        ?>
       
    </ul>

    

</body>
</html>


