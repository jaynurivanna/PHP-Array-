# PHP-Array- special type of variables that stores multiple values in single variable

3 types 
a)Indexed arrays - array with numeric index
b)Associative arrays - array with named keys
c)Multidimensional arrays - array containing one or more arrays

Example of indexed array like we have more color the we define all color in one array then we can call them by number 
$color = array('white', 'green', 'red', 'blue', 'black');
echo $color[0];// example then the number will always start with 0

Example of associative array - as human we have details info like name,age ,phone number and more so we can defines with key and values
$human = array( "name"=>"Jay", "age"=>"27", "phone"=>"01828282");
Now instead use number to print the results now we can use name
echo $human["name"];

Example of multidimensional array - we already have details then in another hand we have salary and job so here we can have two or more array combined
$human = array(
    "Jay" => array(
        "job" => "PHP Developer",
        "salary" => "RM5000",
    );
    
Now let say we want to print the array in ascending order we can use the sort function then use count function to know the exact value for array value and use for function to print all the array values

sort($color);
$length = count($color);
for($x = 0; $x < $length; $x++) {
  echo $color[$x];
  echo "<br>";
 
As example we want to print out only the country same name as capital we can use if function and compare both of them
 foreach($countries as $country => $capital)
{
  if ($country == $capital) {
     echo "The capital of $country is $capital"."<br />" ;
   }
}
  
For multidimensional array, want to print output like this Peter Parker is spider-man email id peterparker@mail.com, 
use foreach looping for this and rearrange it 

foreach ($superheroes as $key => $hero) {
  echo $hero['name'] ." is ".$key." email id ".$hero['email']. "<br />";
}
