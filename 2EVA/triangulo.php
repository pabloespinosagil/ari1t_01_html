<?php
if(!isset($_GET['a']))
$_GET['a']=4;
if(!isset($_GET['b']))
$_GET['b']=4;
if(!isset($_GET['h']))
$_GET['h']=5.65;
?>
<img src="triangulo.png" alt="" width="892px" height="536px"/>
<div>
<form>
<input id="a" name="a" placeholder="area" onkeyup="calcular()"/>
<button onclick="calcular()">Calcular</button>
</form>
</div>
<div id="resultado" style="
	padding:30px;
	background-color:pink;
">
</div>
<script>

console.log('Vamos a calcular la intensidad que circula por una resistencia');
function calcular(){

a=document.getElementById('a').value;

a=parseInt(a);


A=Math.round*((2*a)**(1/2));
document.getElementById('resultado').innerHTML=A+'cm';
}
alert('hey!! pulsa aqui');
</script> 
<?php
$a=round ($_GET['a'],2);
$b=round ($_GET['b'],2);
$h=round ($_GET['h'],2);
$lado= round ((2*$a)**(1/2));
echo $lado."cm";
$a=$lado;
$b=$a;
$h=($a**2+$b**2)**(1/2);
echo $a."cm";
echo $b."cm";
echo $h."cm";




?>