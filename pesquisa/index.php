<!DOCTYPE html>

<html lang="pt">
<head>
<meta charset="utf-8">
<title>Pesquisa de Satisfação</title>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>document.createElement('main');</script>
<![endif]-->
<link rel="stylesheet" href="css/style.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>
<header>
<div id="header">
<h1 id="logo">Baixa Grande News</h1>
</div>
</header><!--/header -->

<main role="main">

<div class="text-area">
<h2>Pesquisa de Satisfação</h2>
</div>

<div id="form-area">

<form id="enquete-form" method="post">
<dl class="enquete-list">
<dt>Com que frequência você acessa o site Baixa Grande News? </dt>
<dd>
	<label><input type="radio" value="Diariamente" name="answer1"> Diariamente</label><br>
	<label><input type="radio" value="Semanalmente" name="answer1"> Semanalmente</label><br>
	<label><input type="radio" value="Mensalmente" name="answer1"> Mensalmente</label>
</dd>

<dt>Qual sua opinião sobre o site Baixa Grande News?</dt>
<dd><textarea id="answer2"></textarea></dd>

<dt>Qual a chance de você recomendar o nosso site?</dt>
<dd><textarea id="answer3"></textarea></dd>

</dl>

<div class="button-area">
<button id="button">Enviar</button>
</div>

</form>

</div>
</main>

<footer>
<address>&copy; DB Mídias</address>
</footer>

<script src="js/func.js"></script>
</body>

</html>