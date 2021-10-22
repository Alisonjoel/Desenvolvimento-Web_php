<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numu="";
if(isset($_POST['numu'])){
	$numu=$_POST['numu'];
}

$opcao="";
if(isset($_POST['opcao'])){
	$opcao=$_POST['opcao'];
}

$comp = rand(0,10);
//$total = ($numu + $comp); 
$vencedor = "";
$dois = 2;
$vcomp = "Computador";
$vusu = "Usuário";

//$par="";
//if(isset($_POST['par'])){
//	$par=$_POST['par'];
//}

//$impar="";
//if(isset($_POST['impar'])){
//	$impar=$_POST['impar'];
//}

?>
<fieldset>
<legend>USUÁRIO</legend>

<form method = "post" action="">
    <select class="numu" name="numu">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="3">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
<p>
    <input type="radio" name="opcao" value="i">Ímpar<br>
    <input type="radio" name="opcao" value="p">Par<br>
</fieldset>

<?php $opcao = $_POST['opcao']; ?>

<br>
<input type="submit" name="button" id="button" value="Enviar" />
    </label>
    </p>
</form>
<?php
$total = ($numu + $comp); 
?>

<?php
if (($total % $dois) == 0) 

    if ($opcao=="p")
        $vencedor = $vusu;
    else
        $vencedor = $vcomp;

else

    if ($opcao=="i")
        $vencedor = $vusu;

    else 
         $vencedor = $vcomp;
?>

<br>
<fieldset>
<legend>RESULTADO</legend>
<?php echo "Numero computador :  ".$comp; ?>
<br>
<?php echo "Resultado (soma) :  ".($numu + $comp); ?>
<br>
<?php echo "Vencedor:  ".($vencedor); ?>
</body>
</html>
</fieldset>


