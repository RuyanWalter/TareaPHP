<?php
echo "Hola, PHP \n";
//Este es un cometario 

/*
Este es un comentario 
en varias 
lineas
*/

//Variables 
$my_string = "Esto es una cadena de texto";
$my_string = "Aquí cambio el valor de la cadena de texto";
echo $my_string . "\n";
//gettype es una funcion que me indica que tipo de dato ess
echo gettype($my_string) . "\n";

$my_string = 6;
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "Esto es una cadena de texto";
$my_int = 7;

$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int -1 . "\n";
echo $my_int . "\n";
echo gettype($my_int)."\n";

$my_float = 6.5;
echo gettype($my_float) . "\n";
echo $my_int + $my_float . "\n";

$my_bool = false;
echo $my_bool . "\n";
$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "El valor de mi entero es $my_int  y el de mi boolen es $my_bool . \n";

//Constantes 

const MY_CONSTANT = "Valor de la constante";
echo MY_CONSTANT . "\n";

//Listas

$my_array = [$my_string, $my_int, $my_float, $my_bool];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
echo $my_array[3] . "\n";
array_push($my_array, $my_bool);
print_r($my_array);
//echo $my_array[4];

//Diccionario

$my_dict = array("string" => $my_string, "int" => $my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

//set

array_push($my_array, "Walter");
array_push($my_array, "Walter");
print_r($my_array);
print_r(array_unique($my_array));

//flujos

for ($index = 0; $index <= 10; $index++){
    echo $index . "\n";
}

/*foreach($my_array as $my_item){
    echo $my_item . "\n";
}
*/

$my_int = 13;
$my_string = "Hola";

if($my_int == 11 && $my_string == "Hola"){
    echo "El valor es 11 \n";
}elseif($my_int == 12 || $my_string == "Hola"){
    echo "El valor es 12 \n";
}else{
    echo "El valor no es 11";
}

//Funciones 

function print_number() {
    echo "10" . "\n";
}

print_number();
print_number();
print_number();

class Myclass {
    public $name;
    public $age;
    
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        
    }
}

$my_class = new Myclass("Walter, 21");
print_r($my_class);
echo $my_class -> name . "\n";

?>