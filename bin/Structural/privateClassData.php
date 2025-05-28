<?php

use App\Structural\PrivateClassData\UserProfile;

require __DIR__ . '/../../vendor/autoload.php';

echo "INCIANDO EXEMPLO PRIVATE CLASS DATA" . PHP_EOL;

$userProfile = new UserProfile('23', 'ALEXANDRE', 'alexandre.beilner@gmail.com');
