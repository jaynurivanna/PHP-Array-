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
    
