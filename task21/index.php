<?php
session_start();

function gameMode(){
    $gameModeVariants = [ 
        'variants' => [
    [
	    'code' => [
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        ],
        'secret' => "
            ИКНЫПЮНЫЧЕДПЛЫШВТЭЫЖВЖРП<br>
            ЧОРНРЖУЫГПНЫЕТРИЗПЫРП<br>
            КЫУРУЗЖБОНФРЫКЫЖЗНР<br>
            ПВПРУКНЫРГКЖОНЧОЗНР<br>
            ПРЫСРЖЫЧФВТРУФЭНЙВЧРФЗН
            ",
        'answer' => "йцукенгшщзхъфывапролджэячсмитьбю",
        'extended' => "В качестве тезауруса используйте то обстоятельство, что текст составлен из двадцати первых строк произведения А. С. Пушкина 'Сказка о Золотом Петушке'.",
    ],
    [
        'code' => [
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
            ],
        'secret' => "
            1ИКНЫПЮНЫЧЕДПЛЫШВТЭЫЖВЖРП<br>
            ЧОРНРЖУЫГПНЫЕТРИЗПЫРП<br>
            КЫУРУЗЖБОНФРЫКЫЖЗНР<br>
            ПВПРУКНЫРГКЖОНЧОЗНР<br>
            ПРЫСРЖЫЧФВТРУФЭНЙВЧРФЗН
            ",
        'answer' => "а",
        'extended' => "В качестве тезауруса используйте то обстоятельство, что текст составлен из двадцати первых строк произведения А. С. Пушкина 'Акула в тюрбане'.",
    ],
    ],
];
  $mode = [ 
    [
        'code' => [],
        'secret' => "",
        'answer' => "",
        'extended' => "",
    ],
];  

$rand = rand(0, count($gameModeVariants['variants']) - 1);
$mode['secret'] = $gameModeVariants['variants'][$rand]['secret'];
$mode['answer'] = $gameModeVariants['variants'][$rand]['answer'];
$mode['extended'] = $gameModeVariants['variants'][$rand]['extended'];
$mode['code'] = $gameModeVariants['variants'][$rand]['code'];

return $mode;
}

function restart(){
    $_SESSION =[
    'gameMode' => gameMode(),
    'win' => false,
    'winText' => 'Запишите код шифрованного текста',
];
}

if (empty($_SESSION)){
    restart();
}

$answer = $_SESSION['gameMode']['answer'];
$gameMode = $_SESSION['gameMode']['secret'];
$extended = $_SESSION['gameMode']['extended'];
$code = $_SESSION['gameMode']['code'];
$win = $_SESSION['win'];

if(!empty($_POST['a'])){
$niceAnswer = $_POST['a'] . $_POST['b'] . $_POST['v'] . $_POST['g'] . $_POST['d'] . $_POST['e'] . $_POST['zh'] . $_POST['z'] . $_POST['i'] . $_POST['iq'] . $_POST['k'] . $_POST['l'] . $_POST['m'] . $_POST['n'] . $_POST['o'] . $_POST['p'] . $_POST['r'] . $_POST['s'] . $_POST['t'] . $_POST['y'] . $_POST['f'] . $_POST['h'] . $_POST['c'] . $_POST['ch'] . $_POST['sh'] . $_POST['sha'] . $_POST['q_v_otrazhenii'] . $_POST['lq_v_otrazhenii'] . $_POST['ae'] . $_POST['u'] . $_POST['ya'] . $_POST['under'];
    if($answer == $niceAnswer){
        $_SESSION['win'] = true; 
        $_SESSION['winText'] = 'Вы правильно ввели код :)';
    } else{

        
        $_SESSION['winText'] = 'Вы неправильно ввели код :(';
        $_SESSION['win'] = false;
    }
}

if(!empty($_POST['kodiry']) && $win === true){
        $replaced = $_POST['kodiry'];
        $replaced = strtr($replaced, $code);
    } elseif (!empty($_POST['kodiry']) && $win === false) {
        $replaced = 'вы не записали код';
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="hihi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hee-hee</title>
</head>

<body>
    
<div class="header">
<h1 class="zadanie">ЗАДАНИЕ 3</h1>
</div>

<div class="textSome">
<p class="fff">
Прочтите нижеприведённый текст, а затем найдите код его алфавита.
<?php
echo $extended;
?>
</p>
</div>

<div class="secretBox">
<h2 class="secret">
<?php
    echo $gameMode;
?>
</h2>
</div>

<div class="center">
<div class="bukavBox">
<h3 class="chto"><?php echo $_SESSION['winText']; ?></h3>
<form action="" method="POST">
<div class="lBox"><label id="dvaa" for="a">А</label></div><input class="poleVvoda" name="a" placeholder="?">
<div class="lBox"><label id="zb"for="b">Б</label></div><input class="poleVvoda" name="b" placeholder="?">
<div class="lBox"><label id="zv" for="v">В</label></div><input class="poleVvoda" name="v" placeholder="?">
<div class="lBox"><label id="zg" for="g">Г</label></div><input class="poleVvoda" name="g" placeholder="?">
<div class="lBox"><label id="zd" for="d">Д</label></div><input class="poleVvoda" name="d" placeholder="?">
<div class="lBox"><label id="ze" for="e">Е</label></div><input class="poleVvoda" name="e" placeholder="?">
<div class="lBox"><label id="zzh" for="zh">Ж</label></div><input class="poleVvoda" name="zh" placeholder="?">
<div class="lBox"><label id="zz" for="z">З</label></div><input class="poleVvoda" name="z" placeholder="?">
<div class="lBox"><label id="zi" for="i">И</label></div><input class="poleVvoda" name="i" placeholder="?">
<div class="lBox"><label id="ziq" for="iq">Й</label></div><input class="poleVvoda" name="iq" placeholder="?">
<div class="lBox"><label id="zk" for="k">К</label></div><input class="poleVvoda" name="k" placeholder="?">
<div class="lBox"><label id="zl" for="l">Л</label></div><input class="poleVvoda" name="l" placeholder="?">
<div class="lBox"><label id="zm" for="m">М</label></div><input class="poleVvoda" name="m" placeholder="?">
<div class="lBox"><label id="zn" for="n">Н</label></div><input class="poleVvoda" name="n" placeholder="?">
<div class="lBox"><label id="zo" for="o">О</label></div><input class="poleVvoda" name="o" placeholder="?">
<div class="lBox"><label id="zp" for="p">П</label></div><input class="poleVvoda" name="p" placeholder="?">
<div class="lBox"><label id="zr" for="r">Р</label></div><input class="poleVvoda" name="r" placeholder="?">
<div class="lBox"><label id="zs" for="s">С</label></div><input class="poleVvoda" name="s" placeholder="?"> 
<div class="lBox"><label id="zt" for="t">Т</label></div><input class="poleVvoda" name="t" placeholder="?">
<div class="lBox"><label id="zy" for="y">У</label></div><input class="poleVvoda" name="y" placeholder="?">
<div class="lBox"><label id="zf" for="f">Ф</label></div><input class="poleVvoda" name="f" placeholder="?">
<div class="lBox"><label id="zh" for="h">Х</label></div><input class="poleVvoda" name="h" placeholder="?">
<div class="lBox"><label id="zc" for="c">Ц</label></div><input class="poleVvoda" name="c" placeholder="?">
<div class="lBox"><label id="zch" for="ch">Ч</label></div><input class="poleVvoda" name="ch" placeholder="?">
<div class="lBox"><label id="zsh" for="sh">Ш</label></div><input class="poleVvoda" name="sh" placeholder="?">
<div class="lBox"><label id="zsha" for="sha">Щ</label></div><input class="poleVvoda" name="sha" placeholder="?">
<div class="lBox"><label id="zq_v_otrazhenii" for="q_v_otrazhenii">Ь</label></div><input class="poleVvoda" name="q_v_otrazhenii" placeholder="?">
<div class="lBox"><label id="zlq_v_otrazhenii" for="lq_v_otrazhenii">Ы</label></div><input class="poleVvoda" name="lq_v_otrazhenii" placeholder="?">
<div class="lBox"><label id="zae" for="ae">Э</label></div><input class="poleVvoda" name="ae" placeholder="?">
<div class="lBox"><label id="zu"for="u">Ю</label></div><input class="poleVvoda" name="u" placeholder="?">
<div class="lBox"><label id="zya" for="ya">Я</label></div><input class="poleVvoda" name="ya" placeholder="?">
<div class="lBox"><label id="zunder" for="under">_</label></div><input class="poleVvoda" name="under" placeholder="?">

<input class="sendBukv" name="vvozy" type="submit" value="Ввести">
<a class="tezaurus" href="tezaurus.html ">Тезаурус</a><br>
</form>
</div>
</div>

<div class="useBox">
<h3 class="use">Используя полученный код (шифр;)), закодируйте с его помошью свою фамилию (имя, отчество):</h3>
<form action="" method="POST">
    <input <?php if(!empty($_POST['kodiry']) && $win === true){echo 'value="' . $replaced . '"';} if($win === false){echo 'placeholder="вы не ввели код"';} ?> class="wantName" type="text" name="kodiry">
    <input class="sendName" type="submit" value="Ввести">
</form>
</div>


</body>
</html>