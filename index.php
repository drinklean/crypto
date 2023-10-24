<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding("UTF-8");
include 'code.php';
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
Прочтите нижеприведённый текст, а затем найдите код его алфавита. В качестве тезауруса используйте то обстоятельство, что текст составлен из двадцати первых строк произведения А. С. Пушкина 'Сказка о Золотом Петушке'
</p>
</div>

<div class="secretBox">
<h2 class="secret">
<?php
    echo replaceLetters($text);
?>
</h2>
</div> 

<div class="center">
<div class="bukavBox">
<h3 class="chto"><?php echo $_SESSION['winText']; ?></h3>
<form action="" method="POST">
<div class="lBox"><label id="dvaa" for="a">А</label></div><input class="poleVvoda" name="a" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['a'] . "'"?>>
<div class="lBox"><label id="zb"for="b">Б</label></div><input class="poleVvoda" name="b" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['b'] . "'"?>>
<div class="lBox"><label id="zv" for="v">В</label></div><input class="poleVvoda" name="v" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . 	$_SESSION['v'] . "'"?>>
<div class="lBox"><label id="zg" for="g">Г</label></div><input class="poleVvoda" name="g" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['g'] . "'"?>>
<div class="lBox"><label id="zd" for="d">Д</label></div><input class="poleVvoda" name="d" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['d'] . "'"?>>
<div class="lBox"><label id="ze" for="e">Е</label></div><input class="poleVvoda" name="e" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['e'] . "'"?>>
<div class="lBox"><label id="zzh" for="zh">Ж</label></div><input class="poleVvoda" name="zh" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['zh'] . "'"?>>
<div class="lBox"><label id="zz" for="z">З</label></div><input class="poleVvoda" name="z" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['z'] . "'"?>>
<div class="lBox"><label id="zi" for="i">И</label></div><input class="poleVvoda" name="i" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['i'] . "'"?>> 
<div class="lBox"><label id="ziq" for="iq">Й</label></div><input class="poleVvoda" name="iq" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . 	$_SESSION['iq'] . "'"?>>
<div class="lBox"><label id="zk" for="k">К</label></div><input class="poleVvoda" name="k" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['k'] . "'"?>>
<div class="lBox"><label id="zl" for="l">Л</label></div><input class="poleVvoda" name="l" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['l'] . "'"?>>
<div class="lBox"><label id="zm" for="m">М</label></div><input class="poleVvoda" name="m" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['m'] . "'"?>>
<div class="lBox"><label id="zn" for="n">Н</label></div><input class="poleVvoda" name="n" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['n'] . "'"?>>
<div class="lBox"><label id="zo" for="o">О</label></div><input class="poleVvoda" name="o" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['o'] . "'"?>>
<div class="lBox"><label id="zp" for="p">П</label></div><input class="poleVvoda" name="p" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['p'] . "'"?>>
<div class="lBox"><label id="zr" for="r">Р</label></div><input class="poleVvoda" name="r" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['r'] . "'"?>>
<div class="lBox"><label id="zs" for="s">С</label></div><input class="poleVvoda" name="s" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['s'] . "'"?>> 
<div class="lBox"><label id="zt" for="t">Т</label></div><input class="poleVvoda" name="t" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['t'] . "'"?>>
<div class="lBox"><label id="zy" for="y">У</label></div><input class="poleVvoda" name="y" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['y'] . "'"?>>
<div class="lBox"><label id="zf" for="f">Ф</label></div><input class="poleVvoda" name="f" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['f'] . "'"?>>
<div class="lBox"><label id="zh" for="h">Х</label></div><input class="poleVvoda" name="h" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['h'] . "'"?>>
<div class="lBox"><label id="zc" for="c">Ц</label></div><input class="poleVvoda" name="c" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['c'] . "'"?>>
<div class="lBox"><label id="zch" for="ch">Ч</label></div><input class="poleVvoda" name="ch" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['ch'] . "'"?>>
<div class="lBox"><label id="zsh" for="sh">Ш</label></div><input class="poleVvoda" name="sh" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true)echo "value='" . $_SESSION['sh'] . "'"?>>
<div class="lBox"><label id="zsha" for="sha">Щ</label></div><input class="poleVvoda" name="sha" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['sha'] . "'"?>>
<div class="lBox"><label id="zq_v_otrazhenii" for="q_v_otrazhenii">Ь</label></div><input class="poleVvoda" name="q_v_otrazhenii" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['q_v_otrazhenii'] . "'"?>>
<div class="lBox"><label id="zlq_v_otrazhenii" for="lq_v_otrazhenii">Ы</label></div><input class="poleVvoda" name="lq_v_otrazhenii" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['lq_v_otrazhenii'] . "'"?>>
<div class="lBox"><label id="zae" for="ae">Э</label></div><input class="poleVvoda" name="ae" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['ae'] . "'"?>>
<div class="lBox"><label id="zu"for="u">Ю</label></div><input class="poleVvoda" name="u" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['u'] . "'"?>>
<div class="lBox"><label id="zya" for="ya">Я</label></div><input class="poleVvoda" name="ya" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['ya'] . "'"?>>
<div class="lBox"><label id="zunder" for="under">_</label></div><input class="poleVvoda" name="under" placeholder="?" maxlength="1" required <?php if($_SESSION['tried'] === true) echo "value='" . $_SESSION['under'] . "'"?>>

<input class="sendBukv" name="answer" type="submit" value="Ввести" <?php if($_SESSION['win'] === true) echo ' disabled ' ?>>
<a class="tezaurus" href="tezaurus.html " target="_blank">Тезаурус</a><br>
</form>
</div>
</div>

<div class="useBox">
<h3 class="use">Используя полученный код (шифр;)), закодируйте с его помошью свою фамилию (имя, отчество):</h3>
<form action="" method="POST">
    <input <?php if(!empty($_POST['try']) && $_SESSION['win'] === true){echo 'value="' . $replacedTry . '"';} if($_SESSION['win'] === false){echo 'placeholder="вы не ввели код"';} if($_SESSION['win'] === false) echo ' disabled ' ?> class="wantName" type="text" name="fullName" required>
    <input name="try" class="sendName" type="submit" value="Ввести" <?php if($_SESSION['win'] === false) echo ' disabled ' ?>>
</form>
</div>
</body>
</html>