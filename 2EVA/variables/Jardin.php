<?php
if(!isset($_GET['j']))
$_GET['j']=1;
if(!isset($_GET['f']))
$_GET['f']=4;
if(!isset($_GET['p']))
$_GET['p']=7;
?>

Se quiere construir un jardin de 1 m de ancho alrededor de una fuente circular de 4 m de diametro. Si los paquetes de cesped fuesen de 7 m2 ¿cuantos paquetes harian falta comprar para cubrir el jardin?
<img src="jardin.png" alt="" width="892px" height="536px"/>
<div>
<form>
<input id="j" name="j" placeholder="jardin" onkeyup="calcular()" value="<?=$_GET['j']?>"/>
<input id="f" name="f" placeholder="fuente" onkeyup="calcular()" value="<?=$_GET['f']?>"/>/>
<input id="p" name="p" placeholder="paquetes" onkeyup="calcular()" value="<?=$_GET['p']?>"/>/>
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

j=document.getElementById('j').value;
f=document.getElementById('f').value;
p=document.getElementById('p').value;
j=parseInt(j);
f=parseInt(f);
p=parseInt(p);
R=j+(f/2);
A=Math.round((Math.PI*R**2)-(Math.PI*(j/2)**2)/p);
document.getElementById('resultado').innerHTML=A+'M2';
}
alert('hey!! pulsa aqui');
</script> 
<?php
//http://localhost/ari1t_01_html/2EVA/jardin.php?j=&f=&p=
$j=round ($_GET['j'],2);
$f=round ($_GET['f'],2);
$p=round ($_GET['p'],2);
$R=round ($j+($f/2));
echo round ((M_PI*$R**2)-(M_PI*($j/2)**2))."m";
?>