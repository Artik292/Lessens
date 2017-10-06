<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');

$img = 'http://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$button = $app->add(['Label', 'hello world','image'=>$img]);
$button->set(['massive'=>true]);
$button->link('http://google.com/');

$label = $app->add(['Label', 'hello world']);
$label->link('http://google.com/');

$img = 'http://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$app->add(['Label', 'МКС', 'image'=>$img,'Huge'=>true,'massive'=>true]);

$text = $app->add(['Text', 'Некий текст']);

$text = $app->add('Text')
    ->addParagraph('Первый')
    ->addParagraph('Второй');

$message = new \atk4\ui\Message('Message Title');
$app->add($message);

$img = 'http://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$icon = $app->add(['Image', $img, 'disabled']);
