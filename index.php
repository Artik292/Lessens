<?PHP

require 'vendor/autoload.php';
//require 'conect.php';
use \atk4\ui\Button;
/* creating page */
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
/* button for people who are already registered */
$button = new Button();
$button->set('Log in');
$button->set(['primary'=>true]);
$button->set(['size small'=>true]);
$button->link('login.php');
$app->add($button);

/*$img = 'https://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$button = $app->add(['Label', 'hello world','image'=>$img]);
$button->set(['massive'=>true]);
$button->link('http://google.com/');

$label = $app->add(['Label', 'hello world']);
$label->link('https://google.com/');

$img = 'https://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$app->add(['Label', 'МКС', 'image'=>$img,'Huge'=>true,'massive'=>true]);

$text = $app->add(['Text', 'Некий текст']);

$text = $app->add('Text')
    ->addParagraph('Первый')
    ->addParagraph('Второй');

$message = new \atk4\ui\Message('Message Title');
$app->add($message);

$img = 'https://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$icon = $app->add(['Image', $img, 'disabled']); */
