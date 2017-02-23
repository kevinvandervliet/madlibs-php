<!DOCTYPE html>
<html>
  <head>
    <title>Madlibs</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width"/>

  </head>

<body>
<h1>Mad Libs</h1>
<div class="red">
<ul>
<br>
	<li><a href="index.php">Er heerst paniek...</a></li>
	<li class="right"><a href="onkunde.php">Onkunde</a></li>
</ul>
</div>
<div class="container">

<div class="text">

<h3>Er heerst paniek...</h3>

<form action="/verhaal.php" method="post">
  Welke dier zou je nooit als huisdier willen hebben?
  <input size="31" type="text" name="input1">
  <br><br>
  Wie is de belangrijkste persoon in je leven?
  <input size="31" type="text" name="input2">
  <br><br>
  In welk land zou je graag willen wonen?
  <input size="31" type="text" name="input3">
  <br><br>
  Wat doe je als je je verveelt?
  <input size="31" type="text" name="input4">
  <br><br>
  Met welk speelgoed speelde je als kind het meest?
  <input size="31" type="text" name="input5">
  <br><br>
  Bij welke docent spijbel je het liefst?
  <input size="31" type="text" name="input6">
  <br><br>
  Als je €100.000,- had, wat zou je dan kopen?
  <input size="31" type="text" name="input7">
  <br><br>
  Wat is je favoriete bezigheid?
  <input size="31" type="text" name="input8">
  <input type="submit" class="button">
 </form>

<?php

if (isset($_POST["input1"]))
{
	echo $_POST["input1"];
}
if (isset($_POST["input2"]))
{
	echo $_POST["input2"];
}
if (isset($_POST["input3"]))
{
	echo $_POST["input3"];
}
if (isset($_POST["input4"]))
{
	echo $_POST["input4"];
}
if (isset($_POST["input5"]))
{
	echo $_POST["input5"];
}
if (isset($_POST["input6"]))
{
	echo $_POST["input6"];
}
if (isset($_POST["input7"]))
{
	echo $_POST["input7"];
}
if (isset($_POST["input8"]))
{
	echo $_POST["input8"];
}
else echo "<br><b></b>";
?>

</div>
<br><br>
<footer>Deze website is gemaakt door Spinoza.</footer>

</div>

</body>
</html>