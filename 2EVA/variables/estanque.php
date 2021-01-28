<?php
if(!isset($_GET['r']))
$_GET['r']=1;
if(!isset($_GET['s']))
$_GET['s']=6;
?>

<img src="fuente.png" alt="" width="892px" height="536px"/>


<div>
<form>
<input id="r" name="r" placeholder="radio" onkeyup="calcular()"/>
<input id="s" name="s" placeholder="sendero" onkeyup="calcular()"/>
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

r=document.getElementById('r').value;
s=document.getElementById('s').value;
r=parseInt(r);
s=parseInt(s);
R=r+s;
A=Math.round(Math.PI*(s*s))-(Math.PI*(r*r));
document.getElementById('resultado').innerHTML=A+'M2';
}
alert('hey!! pulsa aqui');
</script> 
<?php
$r=round ($_GET['r'],2);
$s=round ($_GET['s'],2);
echo round (M_PI*($s*$s))-(M_PI*($r*$r))."m";
?>