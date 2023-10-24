<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding("UTF-8");
function restart(){
    $_SESSION = [
    'shift' => rand(1, 31),
	'start' => false,
	'code' => [
		'А' => '',    'Б' => '',    'В' => '',    'Г' => '',    'Д' => '',
		'Е' => '',    'Ж' => '',   'З' => '',    'И' => '',	'Й' => '',
		'К' => '',    'Л' => '',    'М' => '',    'Н' => '',    'О' => '',    
		'П' => '',    'Р' => '',    'С' => '',    'Т' => '',    'У' => '',
		'Ф' => '',    'Х' => '',    'Ц' => '',    'Ч' => '',   'Ш' => '',
		'Щ' => '',  'Ь' => '',     'Ы' => '',    'Э' => '', 	'Ю' => '',
		'Я' => '',   '_' => '',
	],
	'alph' => ['А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ь','Ы','Э','Ю','Я','_', 'А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ь','Ы','Э','Ю','Я','_'],
    'win' => false,
    'winText' => 'Запишите код шифрованного текста',
    'tried' => false,
];
}

function setGame(){
	$_SESSION['code']['А'] = $_SESSION['alph'][$_SESSION['shift']];
	$_SESSION['code']['Б'] = $_SESSION['alph'][$_SESSION['shift'] + 1];
	$_SESSION['code']['В'] = $_SESSION['alph'][$_SESSION['shift'] + 2];
	$_SESSION['code']['Г'] = $_SESSION['alph'][$_SESSION['shift'] + 3];
	$_SESSION['code']['Д'] = $_SESSION['alph'][$_SESSION['shift'] + 4];
	$_SESSION['code']['Е'] = $_SESSION['alph'][$_SESSION['shift'] + 5];
	$_SESSION['code']['Ж'] = $_SESSION['alph'][$_SESSION['shift'] + 6];
	$_SESSION['code']['З'] = $_SESSION['alph'][$_SESSION['shift'] + 7];
	$_SESSION['code']['И'] = $_SESSION['alph'][$_SESSION['shift'] + 8];
	$_SESSION['code']['Й'] = $_SESSION['alph'][$_SESSION['shift'] + 9];
	$_SESSION['code']['К'] = $_SESSION['alph'][$_SESSION['shift'] + 10];
	$_SESSION['code']['Л'] = $_SESSION['alph'][$_SESSION['shift'] + 11];
	$_SESSION['code']['М'] = $_SESSION['alph'][$_SESSION['shift'] + 12];
	$_SESSION['code']['Н'] = $_SESSION['alph'][$_SESSION['shift'] + 13];
	$_SESSION['code']['О'] = $_SESSION['alph'][$_SESSION['shift'] + 14];
	$_SESSION['code']['П'] = $_SESSION['alph'][$_SESSION['shift'] + 15];
	$_SESSION['code']['Р'] = $_SESSION['alph'][$_SESSION['shift'] + 16];
	$_SESSION['code']['С'] = $_SESSION['alph'][$_SESSION['shift'] + 17];
	$_SESSION['code']['Т'] = $_SESSION['alph'][$_SESSION['shift'] + 18];
	$_SESSION['code']['У'] = $_SESSION['alph'][$_SESSION['shift'] + 19];
	$_SESSION['code']['Ф'] = $_SESSION['alph'][$_SESSION['shift'] + 20];
	$_SESSION['code']['Х'] = $_SESSION['alph'][$_SESSION['shift'] + 21];
	$_SESSION['code']['Ц'] = $_SESSION['alph'][$_SESSION['shift'] + 22];
	$_SESSION['code']['Ч'] = $_SESSION['alph'][$_SESSION['shift'] + 23];
	$_SESSION['code']['Ш'] = $_SESSION['alph'][$_SESSION['shift'] + 24];
	$_SESSION['code']['Щ'] = $_SESSION['alph'][$_SESSION['shift'] + 25];
	$_SESSION['code']['Ь'] = $_SESSION['alph'][$_SESSION['shift'] + 26];
	$_SESSION['code']['Ы'] = $_SESSION['alph'][$_SESSION['shift'] + 27];
	$_SESSION['code']['Э'] = $_SESSION['alph'][$_SESSION['shift'] + 28];
	$_SESSION['code']['Ю'] = $_SESSION['alph'][$_SESSION['shift'] + 29];
	$_SESSION['code']['Я'] = $_SESSION['alph'][$_SESSION['shift'] + 30];
	$_SESSION['code']['_'] = $_SESSION['alph'][$_SESSION['shift'] + 31];
	$_SESSION['start'] = true;
}

$text = '
	ЖИЛ_БЫЛ_СЛАВНЫЙ_ЦАРЬ_ДАДОН
    СМОЛОДУ_БЫЛ_ГРОЗЕН_ОН
    И_СОСЕДЯМ_ТО_И_ДЕЛО
    НАНОСИЛ_ОБИДЫ_СМЕЛО
    НО_ПОД_СТАРОСТЬ_ЗАХОТЕЛ';


function replaceLetters($text){
	$replaced = mb_strtoupper($text);
	$replaced = strtr($replaced, $_SESSION['code']);
	return $replaced;
}

if (empty($_SESSION)){
    restart();
}

if($_SESSION['start'] === false){
	setGame();
}

function getAnswer($shift){
    	$rightAnswer = '';
    	for ($i=32; $i <= 63 ; $i++) { 
    		$rightAnswer = $rightAnswer . $_SESSION['alph'][$i - $shift];
   	}
   		return $rightAnswer;
    }


if(!empty($_POST['answer'])){
    $rightAnswer = getAnswer($_SESSION['shift']);
    $userAnswer = $_POST['a'] . $_POST['b'] . $_POST['v'] . $_POST['g'] . $_POST['d'] . $_POST['e'] . $_POST['zh'] . $_POST['z'] . $_POST['i'] . $_POST['iq'] . $_POST['k'] . $_POST['l'] . $_POST['m'] . $_POST['n'] . $_POST['o'] . $_POST['p'] . $_POST['r'] . $_POST['s'] . $_POST['t'] . $_POST['y'] . $_POST['f'] . $_POST['h'] . $_POST['c'] . $_POST['ch'] . $_POST['sh'] . $_POST['sha'] . $_POST['q_v_otrazhenii'] . $_POST['lq_v_otrazhenii'] . $_POST['ae'] . $_POST['u'] . $_POST['ya'] . $_POST['under'];
    $userAnswer=mb_strtoupper($userAnswer);
    if($userAnswer == $rightAnswer){
        $_SESSION['win'] = true; 
        $_SESSION['winText'] = 'Вы правильно ввели код :)';
    } else{
        $_SESSION['winText'] = 'Вы неправильно ввели код :(';
        $_SESSION['win'] = false;
    }
}

if(!empty($_POST['try']) && $_SESSION['win'] === true){
        $replacedTry = replaceLetters($_POST['fullName']);
    }

if(!empty($_POST['answer'])){
  	$_SESSION['a'] = $_POST['a'];
  	$_SESSION['b'] = $_POST['b'];
  	$_SESSION['v'] = $_POST['v'];
  	$_SESSION['g'] = $_POST['g'];
  	$_SESSION['d'] = $_POST['d'];
  	$_SESSION['e'] = $_POST['e'];
  	$_SESSION['zh'] = $_POST['zh'];
  	$_SESSION['z'] = $_POST['z'];
  	$_SESSION['i'] = $_POST['i'];
  	$_SESSION['iq'] = $_POST['iq'];
  	$_SESSION['k'] = $_POST['k'];
  	$_SESSION['l'] = $_POST['l'];
  	$_SESSION['m'] = $_POST['m'];
  	$_SESSION['n'] = $_POST['n'];
  	$_SESSION['o'] = $_POST['o'];
  	$_SESSION['p'] = $_POST['p'];
  	$_SESSION['r'] = $_POST['r'];
  	$_SESSION['s'] = $_POST['s'];
  	$_SESSION['t'] = $_POST['t'];
  	$_SESSION['y'] = $_POST['y'];
    $_SESSION['f'] = $_POST['f'];
	$_SESSION['h'] = $_POST['h'];
	$_SESSION['c'] = $_POST['c'];
	$_SESSION['ch'] = $_POST['ch'];
	$_SESSION['sh'] = $_POST['sh'];
	$_SESSION['sha'] = $_POST['sha'];
	$_SESSION['q_v_otrazhenii'] = $_POST['q_v_otrazhenii'];
	$_SESSION['lq_v_otrazhenii'] = $_POST['lq_v_otrazhenii'];
	$_SESSION['ae'] = $_POST['ae'];
	$_SESSION['u'] = $_POST['u'];
	$_SESSION['ya'] = $_POST['ya'];
	$_SESSION['under'] = $_POST['under'];
	$_SESSION['tried'] = true;
  }