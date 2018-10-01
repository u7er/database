<?php
	if (empty($_POST))
		exit();
	// Rights answers
	$cor_ans = array(
		'prado_1' => '6', 
		'reichstag_2' => '9',
		'scala_3' => '4', 
		'bronze_horseman_4' => '1',
		'western_wall_5' => '3',
		'tretyakov_gallery_6' => '2',
		'triumphal_arch_7' => '5',
		'statue_of_liberty_8' => '8',
		'tower_9' => '7'
	);

	// Resault
	$user_score = 0;
	
	foreach($_POST as $key => $value)
		if($value == $cor_ans[$key])
			$user_score++;

	echo '<h1>Уважаемый, ' . $_POST['name'] . ' у вас ';
	switch($user_score) {
		case 2: echo 'совершенно плохое знание ';
				break;
		case 3: echo 'плохо знание ';
				break;
		case 4: echo 'терпимое зние ';
				break;	
		case 5: echo 'среднее знание ';
				break;
		case 6: echo 'хорошее знание ';
				break;
		case 7: echo 'превосходное знание ';
				break;
		case 8: echo 'отличное знание ';
				break;
		case 9: echo 'великолепное зние ';
				break;
		default: echo 'УЖАСНОЕ знание ';
				break;
	}
	echo 'географии.';
	echo ' Результат: ' . $user_score . ' из ' . count($cor_ans) . ' вопросов.';
	echo '<br><a href = "z08-3a.htm">Назад</a>';
?>