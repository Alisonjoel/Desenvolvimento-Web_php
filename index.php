<!DOCTYPE html>
 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>JOKEN</title>
</head>
<body>
 
 
<?php
 
$opcao="";
if(isset($_POST['opcao'])){
    $opcao=$_POST['opcao'];
}
 
 $comp = rand(1, 3);
 $venc = "";
 $opcao = "";
 $computador = "Computador";
 $usuario = "Usuario";
 $nulo = "Dedos iguais";
 
?>
 
<fieldset>
<legend>USUÁRIO</legend>
 
<form action="" method="post">
<input type="radio" name="opcao" value="1">Pedra<br>
<input type="radio" name="opcao" value="2">Papel<br>
<input type="radio" name="opcao" value="3">Tesoura<br>
 
</fieldset>
 
<?php
$opcao = $_POST['opcao'];
?>
 
<p>
<input type="submit" value="Enviar">
<p>
<fieldset>
<legend>COMPUTADOR</legend>
<?php
   echo "<img src='img/$comp.jpeg' alt=''>";
?>
</fieldset>
<P>
<fieldset>
<legend>USUÁRIO</legend>
<?php
    echo "<img src='img/$opcao.jpeg' alt=''>";
?>
</fieldset>
</form>
 
<p>
<Fieldset>
<legend>GANHADOR</legend>
<?php
 
if (($opcao==1)&&(($comp==2)||($comp==3))){
    $venc = $computador;
    echo $venc;    
}
if (($opcao==2)&&($comp==1)){
    $venc = $usuario;
    echo $venc;
}
if (($opcao==2)&&($comp==3)){
    $venc = $computador;
    echo $venc;
}
if (($opcao==3)&&($comp==2)){
    $venc = $usuario;
    echo $venc;
}
if (($opcao==3)&&($comp==1)){
    $venc = $computador;
    echo $venc;
}  
if ($opcao==$comp){
    $venc = $nulo;
    echo $venc;
} 
 
?>
</Fieldset>
</body>
</html>