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

Er heerst paniek in het koninkrijk <?php echo $_POST["input1"]; ?>. Koning <?php echo $_POST["input6"]; ?> is ten einde raad en als koning
 <?php echo $_POST["input6"]; ?>
ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["input2"]; ?>. 
<br><br>
"<?php echo $_POST["input2"]; ?>! Het is een ramp! Het is een schande!"
<br><br>
"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"
<br><br>
"Mijn <?php echo $_POST["input1"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["input5"]; ?> voor hem gekocht!"
<br><br>
"Majesteit, uw <?php echo $_POST["input1"]; ?> komt vast vanzelf weer terug?"
<br><br>
"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["input8"]; ?> leren?
<br><br>
"Maar Sire, daar kunt u toch uw <?php echo $_POST["input7"]; ?> voor gebruiken."
<br><br>
"<?php echo $_POST["input2"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."
<br><br>
"<?php echo $_POST["input4"]; ?>, Sire."
</div>
<br><br>
<footer>Deze website is gemaakt door Spinoza.</footer>

</div>

</body>
</html>