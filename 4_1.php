<?PHP

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Icons and Links');
$layout = $app->initLayout('Centered');

$button = $app->layout->add(['Button', 'caption'=>'Hello there']);