<?php
echo("
<!DOCTYPE html>
<html>
<head>
  <title>Word Count</title>
</head>
<style>
h2{
font-size: 12px;
}
div#header {
    border:1px solid grey;
    margin:5px;margin-bottom:150px;padding:8px;
    background-color:white;
	}
div#footer	 {
    border:1px solid grey;height: 20px;
    margin:5px;margin-bottom:1px;padding:0.1px;
    background-color:white;
	}

	
div#header,div#footer {
 text-align: center;
    color:white;background-color:red;margin-bottom:500px;
}	
#nav {
    line-height:20px;
    background-color:#eeeeee;
    height:480px;
    width:200px;
    float:left;
    padding:5px;
top: 50px;	
margin: -500px 0px 0px 0px;
}
#aa{
background-color:#6699FF;
	font-size: 20px;
	position: center;
	heigth:20px;
	text-align:center;
	}


</style>
<body>");
echo("
<div id='header'>
<h1>Text Analysis Tool</h1>
<h2>Description of text analysis tool</h2>
</div>
");
echo('
<div id="nav">
<div id="aa"><a href="drop.php">text analysis</a><br></div><br>
<div id="aa"><a href="wordcount.php">word count</a><br></div><br>
<div id="aa"><a href="lexicaldensity.php">lexical density</a><br></div><br>
<div id="aa"><a href="textanalysistool.php">text analysis tool</a><br></div><br>
<div id="aa"><a href="textstatistics.php">text statistics</a><br></div><br>
<div id="aa"><a href="text.php">text</a><br></div><br>
<div id="aa"><a href="textmining.php">text mining</a><br></div><br>
<div id="aa"><a href="frequencyanalysis.php">frequency analysis</a><br></div><br>
<div id="aa"><a href="word.php">word</a><br></div><br>
<div id="aa"><a href="nigritudeultramarine.php">nigritude ultramarine</a><br></div><br>
<div id="aa"><a href="stoplist.php">stoplist</a><br></div><br>
<div id="aa"><a href="stoplist.php">textalyser comments </a><br></div>
</div>
<div id="section">

<div style="opacity:0.5;position:absolute;left:220px;top:140px;width:1120px;height:470px;background-color:orange; box-shadow: 10px 10px 5px #993300
;">
<fieldset style="height:440px">
<legend style="font-size:40px;color:blue">Word Count :</legend>
<p style="font-size:30px">it will count each of your words, and make statistics, for example, wich is the most used word..</p>
</fieldset>
</div>
<div id="footer">
<p>&copy; 2014 Monday Times. All rights reserved.</p>

 

</body>

</html>
');
?>