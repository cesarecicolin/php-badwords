<?php
$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>paragrafo</h2>
<p>
<?php  echo $paragrafo ?>
</p>

    
<h2>paragrafo censurato</h2>
    <?php 
    $paragrafo_censurato = str_replace($censura, '***', $paragrafo); ?>
    <p>
    <?php  echo $paragrafo_censurato ?>
    </p>
</body>
</html>