<?PHP

require 'vendor/autoload.php';

$app = new \atk4\ui\App('Icons and Links');
$layout = $app->initLayout('Centered');

$button1 = $app->layout->add(['Button', 'LINK TO PHP FILE','iconRight'=>'tasks']);
$button1->link(['4_2', 'id'=>123, 'name'=>'John']);
$button2 = $app->layout->add(['Button', 'LINK TO 	TEXT FILE','iconRight'=>'book']);
$button2->link('4_text.txt'); 
$button3 = $app->layout->add(['Button', 'LINK TO 	PDF FILE','iconRight'=>'student']);
$button3->link('4_pdf.pdf'); 
$button4 = $app->layout->add(['Button', 'LINK TO 	FOTO','iconRight'=>'image']);
$button4->link('4_image.jpg'); 
$button5 = $app->layout->add(['Button', 'LINK TO 	ICONS','iconRight'=>'idea']);
$button5->link('https://semantic-ui.com/elements/icon.html'); 





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