<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Beautiful links');
$layout = $app->initLayout('Centered');
$view = $app->layout->add([
	'View',
	'LINK TO PHP FILE'
]);
$view->link(['4_2', 'id'=>123, 'name'=>'John']);  //если не указывать куда, то ссылается сам на себя

$button1 = $app->layout->add(
	['Button', 'LINK TO 	TEXT FILE','iconRight'=>'book']
);
$button1->link('4_text.txt');
$button1->addClass('mini red');

$button2 = $app->layout->add(['Button', 'LINK TO 	PDF FILE','iconRight'=>'student']);
$button2->link('4_pdf.pdf');
$button2->addClass('medium green');

$button3 = $app->layout->add(['Button', 'LINK TO 	FOTO','iconRight'=>'image']);
$button3->link('4_image.jpg');
$button3->addClass('big blue');

$button4 = $app->layout->add(['Button', 'LINK TO 	WEB-SITE','iconRight'=>'idea']);
$button4->link('https://semantic-ui.com/elements/icon.html');
$button4->addClass('massive pink');





/*
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Links');
$layout = $app->initLayout('Centered');
$view = $app->layout->add([
	'View',
	'LINK TO PHP FILE'
]);
$view->link(['4_2', 'id'=>123, 'name'=>'John']);  //если не указывать куда, то ссылается сам на себя

$button1 = $app->layout->add(
	['Button', 'LINK TO 	TEXT FILE','iconRight'=>'book']
);
$button1->link('4_text.txt');

$button2 = $app->layout->add(['Button', 'LINK TO 	PDF FILE','iconRight'=>'student']);
$button2->link('4_pdf.pdf');

$button3 = $app->layout->add(['Button', 'LINK TO 	FOTO','iconRight'=>'image']);
$button3->link('4_image.jpg');

$button4 = $app->layout->add(['Button', 'LINK TO 	WEB-SITE','iconRight'=>'idea']);
$button4->link('https://semantic-ui.com/elements/icon.html');
*/
