<?PHP

require 'vendor/autoload.php';

use \atk4\ui\Header;

$app = new \atk4\ui\App('Get and Links');
$layout = $app->initLayout('Centered');

$c = $_GET['id'];

$app->add(new Header([$c, 'size'=>1]));



















/*use \atk4\ui\Button;
use \atk4\ui\Buttons;
use \atk4\ui\Header;
use \atk4\ui\Icon;
use \atk4\ui\Label;
use \atk4\ui\Template;
use \atk4\ui\View; */