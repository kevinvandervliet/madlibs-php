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

Er zijn veel mensen die niet kunnen <?php echo $_POST["input1"]; ?>. Neem nou <?php echo $_POST["input2"]; ?>. Zelfs met de hulp van een <?php echo $_POST["input4"]; ?> of zelfs <?php echo $_POST["input3"]; ?> kan <?php echo $_POST["input2"]; ?> niet <?php echo $_POST["input1"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["input5"]; ?>, maar met een te veel aan <?php echo $_POST["input6"]; ?>. Te veel <?php echo $_POST["input6"]; ?> leidt tot <?php echo $_POST["input7"]; ?> en dat is niet goed als je wilt <?php echo $_POST["input1"]; ?>. Helaas voor <?php echo $_POST["input2"]; ?>.

</div>
<br><br>
<footer>Deze website is gemaakt door Spinoza.</footer>

</div>

</body>
</html>