<?PHP

echo 'Work';

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Links');
$layout = $app->initLayout('Centered');

/*$button1 = $app->layout->add(
	['Button', 'LINK TO 	TEXT FILE','iconRight'=>'book']
);
//$button1->link('4_text.txt');

$button2 = $app->layout->add(['Button', 'LINK TO 	PDF FILE','iconRight'=>'student']);
//$button2->link('4_pdf.pdf');

$button3 = $app->layout->add(['Button', 'LINK TO 	FOTO','iconRight'=>'image']);
//$button3->link('4_image.jpg');

$button4 = $app->layout->add(['Button', 'LINK TO 	WEB-SITE','iconRight'=>'idea']);
$button4->link('https://semantic-ui.com/elements/icon.html');

$button5 = $app->layout->add(['Button','UPGRADE','icon'=>'space shuttle']);
$button5->link(['beatiful']); */
