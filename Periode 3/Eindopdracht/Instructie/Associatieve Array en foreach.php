<?php
// associatieve Array en foreach
// De waarde van apple is red
// Key is apple en value is red
$fruit = array("apple" => "red", "orange" => "orange", "banana" => "yellow");

print_r($fruit);
echo "<br>";
//Keyword banana ophalen en waarde/value tonen
echo $fruit["banana"];

//Fruit doorlopen $key = de key van de array. ALs $value geef je de value van de array terug
//Met een foreach kun je door een array lopen
foreach($fruit as $key => $value)
{
    echo $key . ": " . $value. "<br>";
}
?>