<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Space');
$app->initLayout('Centered');

$img = 'https://www.nasa.gov/sites/default/files/thumbnails/image/ocs_iss_0.jpg';
$button = $app->add(['Label', 'hello world','image'=>$img]);
$button->set(['massive'=>true]);
$button->link('http://google.com/');

$label = $app->add(['Label', 'hello world']);
$label->link('https://google.com/');

$app->add(['Label', 'МКС', 'image'=>$img,'Huge'=>true,'massive'=>true]);

$text = $app->add(['Text', 'Некий текст']);

$text = $app->add('Text')
    ->addParagraph('Первый')
    ->addParagraph('Второй');

$message = new \atk4\ui\Message('Message Title');
$app->add($message);

$icon = $app->add(['Image', $img, 'disabled']);

/*$button = new Button('Link to program');
$button->addClass('big');
$button->icon = 'book';
$button->link(['task','key'=>'ok']);
//$button->link(['4_2.php', 'id'=123]);
//$button->link(['4_2.php', 'id'=>123]);
//$button->link('http://google.com/');
//$button->link=(['http://www.agiletoolkit.org/intro/1']);
//$button->js()->hide();
$app->layout->add($button); */


/*
* use \atk4\ui\Button;
* use \atk4\ui\Buttons;
* use \atk4\ui\Header;
* use \atk4\ui\Icon;
* use \atk4\ui\Label;
* use \atk4\ui\Template;
* use \atk4\ui\View;
*/
