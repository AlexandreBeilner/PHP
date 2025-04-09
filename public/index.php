<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Impl\Example;

$example = new Example();

$message = $example->greet('mundo viaa web');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teste PHP Docker</title>
</head>
<body>
<h1><?php echo $message; ?></h1>
<p>Horário atual: <?php echo date('Y-m-d H:i:s'); ?></p>
</body>
</html>

