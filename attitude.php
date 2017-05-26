<?PHP

require 'vendor/autoload.php';

$app = new \atk4\ui\App('letters and numbers');
$layout = $app->initLayout('Centered');

/* $c = 'Hello';
//$b = $c[5];
if (isset($c[6])) {
	echo $c[2];
} */

$tr = array(
	'a' => '1',
	'b' => '2',
	'c' => '3',
	'd' => '4',
	'e' => '5',
	'f' => '6',
	'g' => '7',
	'h' => '8',
	'i' => '9',
	'j' => '10',
	'k' => '11',
	'l' => '12',
	'm' => '13',
	'n' => '14',
	'o' => '15',
	'p' => '16',
	'q' => '17',
	'r' => '18',
	's' => '19',
	't' => '20',
	'u' => '21',
	'v' => '22',
	'w' => '23',
	'x' => '24',
	'y' => '25',
	'z' => '26',
); 

$m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$m_register->addField('word');

$f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));
$f->setModel($m_register);

	 $f->onSubmit(function ($f) {
        if ($f->model['word'] == '') {
            return $f->error('word', "This place can't be empty.");
        } else {
			$a = $f->model['word'];
			$i = 0;
			$c = '';
			While (isset($a[$i])) {
				$b = $a[$i];
				$i = $i+1;
				$c = $c.$tr[$b];	
			}
				return $c;
			

		}
    });   