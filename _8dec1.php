<?php
error_reporting(E_ALL);
//include 'drop.php';
if(isset($_POST['sub'])){
$no_of_chars_per_word = $_POST['noword'];
$no_chars_to_be_displayed =  $_POST['character'];
$special_word =  $_POST['expression'];
$stop_list_language = $_POST['stoplist'];
$sop_list =  $_POST['owns'];
$String = $_POST['text'];

//echo $_POST['upload'];
//$x= $_POST['upload'];
//$str="C:\\xampp\\htdocs\\";
//$homepage = file_get_contents("C:\\xampp\\htdocs\\".$x);
	//echo "<br/>";
	//echo $homepage;
}
//$String = "Welcome to the online text analysis tool, the detailed statistics of your text, perfect for translators (quoting), for webmasters (ranking) or for normal users, to know the subject of a text. Now with new features as the analysis of words groups, finding out the keyword density, analyse the prominence of word or expressions. Webmasters can analyse the links on their pages. More instructions are about to be written, please send us your feedback !";
//$no_of_chars_per_word  = 3;
//$special_word = "is";
//$stop_list = " ";
$param1 = $String;
$param2 = $no_of_chars_per_word;
$param3 = $special_word;
$param4 = $stop_list;
 
$command = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Total_word_count.py";
$command .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle = popen($command, "r");
$read = fread($handle,10);
/*echo " '$handle' ; ".gettype($handle)."\n";*/

$command1 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Number_of_different_words.py";
$command1 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle1 = popen($command1, "r");
$read1 = fread($handle1, 10);
#echo $read ;

$command2 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Total_no_of_chars.py";
$command2 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle2 = popen($command2, "r");
$read2 = fread($handle2,10);

$command3 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Total_no_of_letters.py";
$command3 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle3 = popen($command3, "r");
$read3 = fread($handle3,10);

$command4 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Total_no_of_syllables_1.py";
$command4 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle4 = popen($command4, "r");
$read4 = fread($handle4,10);

$command5 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Total_number_of_Sentences.py";
$command5 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle5 = popen($command5, "r");
$read5 = fread($handle5,10);

$command6 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Average_sentence_length.py";
$command6 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle6 = popen($command6, "r");
$read6 = fread($handle6,10);

$command7 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_dictionary_len_sentence_max.py";
$command7 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle7 = popen($command7, "r");
$read7 = fread($handle7,10);

$command8 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_dictionary_largest_sen.py";
$command8 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle8 = popen($command8, "r");
$read8 = fread($handle8,1000);

$command9 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_dictionary_len_sentence_min.py";
$command9 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle9 = popen($command9, "r");
$read9 = fread($handle9,10);

$command10 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_dictionary_smallest_sen.py";
$command10 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle10 = popen($command10, "r");
$read10 = fread($handle10,1000);

$command11 = "python /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_Readability_flesch.py '".$param1."' 2>&1 ";
$handle11 = popen($command11, "r");
$read11 = fread($handle11,10);

$command12 = "python /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_Readability_kincaid_grade.py '".$param1."' 2>&1 ";
$handle12 = popen($command12, "r");
$read12 = fread($handle12,10);

$command13 = "python /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_Readability_coleman_liau_index.py '".$param1."' 2>&1 ";
$handle13 = popen($command13, "r");
$read13 = fread($handle13,10);

$command14 = "python /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_Readability_automated_readability_index.py '".$param1."' 2>&1 ";
$handle14 = popen($command14, "r");
$read14 = fread($handle14,10);

$command15 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_01.py  2>&1 ";
$command15 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle15 = popen($command15, "r");
$read15 = fread($handle15,100);

$command16 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_00.py  2>&1 ";
$command16 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle16 = popen($command16, "r");
$read16 = fread($handle16,100);

$command17 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_0_freq.py  2>&1 ";
$command17 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle17 = popen($command17, "r");
$read17 = fread($handle17,4);

$command18 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_10.py  2>&1 ";
$command18 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle18 = popen($command18, "r");
$read18 = fread($handle18,100);

$command19 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_11.py  2>&1 ";
$command19 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle19 = popen($command19, "r");
$read19 = fread($handle19,100);

$command20 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_1_freq.py  2>&1 ";
$command20 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle20 = popen($command20, "r");
$read20 = fread($handle20,4);

$command21 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_20.py  2>&1 ";
$command21 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle21 = popen($command21, "r");
$read21 = fread($handle21,100);

$command22 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_21.py  2>&1 ";
$command22 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle22 = popen($command22, "r");
$read22 = fread($handle22,100);

$command23 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_2_freq.py  2>&1 ";
$command23 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle23 = popen($command23, "r");
$read23 = fread($handle23,4);

$command24 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_30.py  2>&1 ";
$command24 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle24 = popen($command24, "r");
$read24 = fread($handle24,100);

$command25 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_31.py  2>&1 ";
$command25 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle25 = popen($command25, "r");
$read25 = fread($handle25,100);

$command26 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_3_freq.py  2>&1 ";
$command26 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle26 = popen($command26, "r");
$read26 = fread($handle26,4);

$command27 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_40.py  2>&1 ";
$command27 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle27 = popen($command27, "r");
$read27 = fread($handle27,100);

$command28 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_41.py  2>&1 ";
$command28 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle28 = popen($command28, "r");
$read28 = fread($handle28,100);

$command29 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_4_freq.py  2>&1 ";
$command29 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle29 = popen($command29, "r");
$read29 = fread($handle29,4);

$command30 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_50.py  2>&1 ";
$command30 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle30 = popen($command30, "r");
$read30 = fread($handle30,100);

$command31 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_51.py  2>&1 ";
$command31 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle31 = popen($command31, "r");
$read31 = fread($handle31,100);

$command32 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_5_freq.py  2>&1 ";
$command32 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle32 = popen($command32, "r");
$read32 = fread($handle32,4);

$command33 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_00.py  2>&1 ";
$command33 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle33 = popen($command33, "r");
$read33 = fread($handle33,10);

$command34 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_01.py  2>&1 ";
$command34 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle34 = popen($command34, "r");
$read34 = fread($handle34,10);

$command35 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_0.py  2>&1 ";
$command35 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle35 = popen($command35, "r");
$read35 = fread($handle35,4);

$command36 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_10.py  2>&1 ";
$command36 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle36 = popen($command36, "r");
$read36 = fread($handle36,10);

$command37 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_11.py  2>&1 ";
$command37 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle37 = popen($command37, "r");
$read37 = fread($handle37,10);

$command38 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_1.py  2>&1 ";
$command38 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle38 = popen($command38, "r");
$read38 = fread($handle38,4);

$command39 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_20.py  2>&1 ";
$command39 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle39 = popen($command39, "r");
$read39 = fread($handle39,10);

$command40 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_21.py  2>&1 ";
$command40 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle40 = popen($command40, "r");
$read40 = fread($handle40,10);

$command41 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_2.py  2>&1 ";
$command41 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle41 = popen($command41, "r");
$read41 = fread($handle41,4);

$command42 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_30.py  2>&1 ";
$command42 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle42 = popen($command42, "r");
$read42 = fread($handle42,10);

$command43 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_31.py  2>&1 ";
$command43 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle43 = popen($command43, "r");
$read43 = fread($handle43,10);

$command44 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_3.py  2>&1 ";
$command44 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle44 = popen($command44, "r");
$read44 = fread($handle44,4);

$command45 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_40.py  2>&1 ";
$command45 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle45 = popen($command45, "r");
$read45 = fread($handle45,10);

$command46 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_41.py  2>&1 ";
$command46 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle46 = popen($command46, "r");
$read46 = fread($handle46,10);

$command47 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_4.py  2>&1 ";
$command47 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle47 = popen($command47, "r");
$read47 = fread($handle47,4);

$command48 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_50.py  2>&1 ";
$command48 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle48 = popen($command48, "r");
$read48 = fread($handle48,10);

$command49 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_51.py  2>&1 ";
$command49 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle49 = popen($command49, "r");
$read49 = fread($handle49,10);

$command50 = "/usr/bin/python2.7 /home/anupam/public_html/Text_Analysis_Python/Text_Analysis_dictionary_word_count_freq_5.py  2>&1 ";
$command50 .=  ' "'.$param1.'" "'.$param2.'" "'.$param3.'" "'.$param4.'" 2>&1';
$handle50 = popen($command50, "r");
$read50 = fread($handle50,4);

pclose($handle);
pclose($handle1);
pclose($handle2);
pclose($handle3);
pclose($handle4);
pclose($handle5);
pclose($handle6);
pclose($handle7);
pclose($handle8);
pclose($handle9);
pclose($handle10);
pclose($handle11);
pclose($handle12);
pclose($handle13);
pclose($handle14);
pclose($handle15);
?>

<html>
<h3>Text Analyser Result</h3>
<hr color = maroon size = 5>
<table style="width:100%">
  <tr>
    <td>Total number of Words</td>
    <td><?php echo $read; ?></td>
    
  </tr>
  <tr>
    <td> Number of different Words</td>
    <td><?php echo $read1; ?></td>
  </tr>
  <tr>
    <td> Lexical Diversity </td>
    <td><?php $x = (intval($read1)/intval($read))*100; echo round($x,2);?></td>  
  </tr>
  <tr>
    <td>Total Number of Characters</td>
    <td><?php echo $read2; ?></td>  
  </tr>
  <tr>
    <td>Total Number of Characters without Spaces</td>
    <td><?php echo $read3; ?></td>
  </tr>
  <tr>
    <td>Total Number of Syllables</td>
    <td><?php echo $read4; ?></td>  
  </tr>
  <tr>
    <td>Average Syllables per Word</td>
    <td><?php $x = (intval($read4)/intval($read)); echo round($x,2); ?></td>
  </tr>
  <tr>
    <td>Total Number of Sentences</td>
    <td><?php echo $read5; ?></td>  
  </tr>
  <tr>
    <td>Average Sentence length (words)</td>
    <td><?php echo $read6; ?></td>  
  </tr>
  <tr>
	 <td>Largest Sentence lenght (words)</td>
	 <td><?php echo $read7; ?></td>  
  </tr>
  <tr>
	 <td>Largest Sentence (words):</td>
	 <td><?php echo $read8; ?></td>  
  </tr>
  <tr>
	 <td>Minimum Sentence length (words)</td>
	 <td><?php echo $read9; ?></td>
  </tr>
  <tr>
	 <td>Smallest Sentence (words)</td>
	 <td><?php echo $read10; ?></td>	   
  </tr>
</table>
<h3>Readability Information Statistics</h3>
<hr color=maroon size = 5> 
<table style="width:100%">
  
  <tr>
   <td> Flesch Reading Ease </td>
   <td><?php echo $read11; ?></td>
  </tr>
  <tr>
    <td>Flesch Kincaid Grade </td>
    <td><?php echo $read12; ?></td>  
  </tr>
  <tr>
    <td>Coleman liau Index</td>
    <td><?php echo $read13; ?></td>  
  </tr>
  <tr>
    <td>automated Readability Index</td>
    <td><?php echo $read14; ?></td>  
  </tr>
</table>
<h3>Frequency and top words</h3>
<hr color=maroon size = 5>
<table style="width:100%">
  <tr>
  <td>Word</td>
  <td>Occurence</td>
  <td>Frequency</td>
  </tr>
  <tr>
  <td><?php echo $read16 ; ?></td>
  <td><?php echo $read15 ; ?></td>
  <td><?php echo $read17,"%" ; ?></td>
  </tr>
  <tr>
  <td><?php echo $read18 ; ?></td>
  <td><?php echo $read19 ; ?></td>
  <td><?php echo $read20."%"; ?></td>
  </tr>
  <tr>
  <td><?php echo $read21 ; ?></td>
  <td><?php echo $read22 ; ?></td>
  <td><?php echo $read23."%"; ?></td>
  </tr>
  <tr>
  <td><?php echo $read24 ; ?></td>
  <td><?php echo $read25 ; ?></td>
  <td><?php echo $read26."%"; ?></td>
  </tr>
  <tr>
  <td><?php echo $read27 ; ?></td>
  <td><?php echo $read28 ; ?></td>
  <td><?php echo $read29."%"; ?></td>
  </tr>
  <tr>
  <td><?php echo $read30 ; ?></td>
  <td><?php echo $read31 ; ?></td>
  <td><?php echo $read32."%"; ?></td>
  </tr>
</table>

<h3>Word Lengths (including unfiltered words)</h3>
<hr color = maroon size = 5>
<table style = "width:100%">
<tr>
  <td>Word lengths (characters) </td>
  <td>Word Count </td>
  <td>Frequency </td>
</tr>
<tr>
  <td><?php echo $read33 ; ?></td>
  <td><?php echo $read34 ; ?></td>
  <td><?php echo $read35,'%' ; ?></td>
</tr>
<tr>
  <td><?php echo $read36 ; ?></td>
  <td><?php echo $read37 ; ?></td>
  <td><?php echo $read38,'%' ; ?></td>
</tr>
<tr>
  <td><?php echo $read39 ; ?></td>
  <td><?php echo $read40 ; ?></td>
  <td><?php echo $read41,'%' ; ?></td>
</tr>
<tr>
  <td><?php echo $read42 ; ?></td>
  <td><?php echo $read43 ; ?></td>
  <td><?php echo $read44,'%' ; ?></td>
</tr>
<tr>
  <td><?php echo $read45 ; ?></td>
  <td><?php echo $read46 ; ?></td>
  <td><?php echo $read47,'%' ; ?></td>
</tr>
<tr>
  <td><?php echo $read48 ; ?></td>
  <td><?php echo $read49 ; ?></td>
  <td><?php echo $read50,'%' ; ?></td>
</tr>
 



</table>
</html>