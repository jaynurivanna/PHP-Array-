<!DOCTYPE html>
<html>
<body>
<title>Array Learning</title>

<?php
$color1 = "Red";
$color2 = "Green";
$color3 = "Blue";

//Indexed array
$color = array('white', 'green', 'red', 'blue', 'black');
 foreach($color as $colors)
{
  echo $colors."<br />";
}

//associate array
 $countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

 foreach($countries as $country => $capital)
{
  echo "The capital of $country is $capital"."<br />" ;
}

//Use count function 
echo count($countries)."<br />";

// Multidimensional array

$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
foreach ($superheroes as $heros)
 {
  echo $heros['name'] . "\r\n";
  echo $heros['email'] . "<br />"; 
}
 


?>

</body>
</html>