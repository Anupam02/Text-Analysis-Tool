<html>
<head>
<style>
body {
    background-color: lightblue;
}
#header {
    background-color:blue;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:700px;
    width:300px;
    float:left;
    padding:5px;	      
}
#section {
    width:1000px;
    float:right;
    padding:1px;	 	 
}
#footer {
    background-color:blue;
    color:white;
    clear:both;
    text-align:center;
   padding:5px; 
margin:60px -450px 0px -1332px;   
}
 input 
  { 
    width:150px; 
    height:30px; 
	 border-radius: 5px;
   }
.fileUpload {
	position: relative;
	overflow: hidden;
	margin: 10px;
}
.fileUpload input.upload {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
#aa{
background-color:#6699FF;
	font-size: 30px;
	position: center;
	heigth:20px;
	text-align:center;
	
}
#sub{
position:absolute;
margin:400px 0px 0px 380px;
}
h{  border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
	height:70px;
	width:80px;
	font-size:20px;
	background-color:#CC99FF;
}
p{
position:absolute;
margin:150px 40px 100px 330px;
font-size:20px;
}
#bb{
position:absolute;
margin:150px 40px 100px 20px;
}
#uploadBtn{
position:absolute;
margin:300px 40px 100px 330px;
}
#sub1{
  position: absolute;
  margin: 50px 40px 100px 330px;
}
#box
{
    position: absolute;

}

</style>
</head>

<body>
<p>
Text mining, also referred to as text data mining, roughly equivalent to text analytics, refers to the process of deriving high-quality information from text. High-quality information is typically derived through the devising of patterns and trends through means such as statistical pattern learning
</p>
<form action="_8dec1.php" method="post">
<div id="header">
<h1>TEXT ANALYSIS TOOL</h1>
</div>
<div id="nav">
<div id="aa"><a href="index.php">text analysis</a><br></div><br>
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
<div>

<textarea name="text" rows="8" cols="120" id = "bb"></textarea>

<div id="section">
<h2>TEXT ANALYSIS</h2>
</div>
<div id="uploadBtn">
<h>PLEASE SELECT THE FILE</h>
 <input type="file" name="upload"  />
</div>
<div style="opacity:0.5;position:absolute;left:400px;top:465px;width:800px;height:250px;background-color:orange; box-shadow: 10px 10px 5px #993300
;">


<fieldset style="height:230px;">
<legend style="font-size:20px;">Special word or expression to analyze :</legend>
<p>

<div id="box">
<h> Minimum characters per word</h>   <select name ="noword" style="height:30px">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option> 
  <option value="5">5</option></select><br>
  <h> Special word or expression to analyze </h>   <input type="text" name="expression" size="30"><br>
 <h>number of words to be analysed</h>  <select name ="character" style="height:30px">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option> 
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option> 
  <option value="10">10</option></select><br>
 


<h>Apply Stoplist</h>  <select name="stoplist" style="height:30px">
  <option value="english">english</option>
  <option value="french">french</option>
  <option value="none">none</option></select><br>
<h>Apply own Stoplist</h>   <input type="text" name="owns" size="10"><br>
</select>
</div>
</fieldset>

<div id="sub1">
<input type='submit' name='sub' value="Analyse the text">
</form>
</p>
<div id="footer">

</div>
</div>
</p>
</fieldset>
</div>
</div>
</form>
</body>
<html>
