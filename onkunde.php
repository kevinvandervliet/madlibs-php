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

<h3>Onkunde</h3>

<form action="/verhaal_onkunde.php" method="post">
  Wat zou je graag willen kunnen?
  <input size="31" type="text" name="input1">
  <br><br>
  Met welke persoon kun je goed opschieten?
  <input size="31" type="text" name="input2">
  <br><br>
  Wat is je favoriete getal?
  <input size="31" type="text" name="input3">
  <br><br>
  Wat heb je altijd bij je als je op vakantie gaat?
  <input size="31" type="text" name="input4">
  <br><br>
  Wat is je beste persoonlijke eigenschap?
  <input size="31" type="text" name="input5">
  <br><br>
  Wat is je slechte persoonlijke eigenschap?
  <input size="31" type="text" name="input6">
  <br><br>
  Wat is het ergste dat je kan overkomen?
  <input size="31" type="text" name="input7">
  <br><br>
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
else echo "<br><b></b>";
?>

</div>
<br><br>
<footer>Deze website is gemaakt door Spinoza.</footer>

</div>

</body>
</html>