<?php
/**
/** inserir contador e limitador de caracteres no textarea com jQuery.

* @Author Quebrando a Cabeça
* @Author URL http://quebrandoacabeca.com
* @Post URL http://quebrandoacabeca.com/contador-e-limitador-de-caracteres-no-textarea-jquery/
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contador e limitador de Caracteres no Textarea com- jQuery</title>
<!-- CHAMANDO O JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script tytpe="text/javascript">
// MAXIMO DE CARACTERES NO CAMPO REQUISITOS NA ABA DE CLASSIFICADOS
var $j = jQuery.noConflict();
// Use jQuery com a variavel $j(...)
$j(document).ready(function(){
$j('#resumo').keyup(function() {
var len = this.value.length;
if (len >= 350) { //VERIFICA SE TEM MAIS DE 350 CARACTERES
this.value = this.value.substring(0, 350);
}
$j('#resta').text(350 - len); //EXIBE OS CARACTERES RESTANTES
});
});
</script>
<style type="text/css">
.conteudo {
	width:960px;
	text-align:justify;
	margin:0 auto;
	
}
h1 { text-align:center }

.rodape {
	width:940px;
	margin:0 auto;
	height:30px;
	line-height:30px;
	color:#FFF;
	font-weight:bold;
	background-color:#000;
	padding:0 10px;
}
label { width:100%; }

textarea { width:100%; }
</style>
</head>

<body>

<h1>Contador e limitador de Caracteres no Textarea com jQuery</h1>
<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
<h4>Exemplo com textarea</h4>
<p>
<label>Resumo</label>
<textarea cols="150" rows="5" maxlenght="350" name="resumo" id="resumo" value=""/></textarea>
<!-- EXIBE A QUANTIDADE DE CARACTERES RESTANTES -->
<span id="resta"> </span> Caracteres Restantes
</p>

</body>
</html>
