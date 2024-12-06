<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style = 'font-size:70px'> REVISAO DE COMANDOS </p>
    <h1 style="color:MediumTurquoise;"> 1 - SINTAXE PHP</h1>

    <h2 style="color:Aqua;"> texto de saida php</h2>
    <?php
echo "Hatsune miku melhor de todas";
?> 
</br>

<h2 style="color:Aqua;"> funcoes podem ser com letras maiusculas e minusculas</h2>
<?php
ECHO "MIKU MIKU <br>";
echo "MIKU MIKU <br>";
EcHo "MIKU MIKU <br>";
?> 

<h2 style="color:Aqua;"> variraveis sao case sensitive</h2>
<?php
$color = "Hatsune";
echo "mehor cantora: " . $color . "<br>";
echo "melhor wiafu: " . $COLOR . "<br>";
echo "mais fofinha: " . $coLOR . "<br>";
?> 

<h1 style="color:MediumTurquoise;"> 2 - COMENTARIOS PHP</h1>

<h2 style="color:Aqua;"> comentario de linha unica</h2>
<?php
// COMENTARIO DE LINHA UNICA

# COMENTARIO DE LINHA UNICA
?>

<h2 style="color:Aqua;"> comentario mult-linha </h2>
<?php
/*
posso ecrever
em varias linha
que Elden Ring é o melhor jogo de todos os tempos
*/
?>

<h2 style="color:Aqua;"> comentario escondido </h2>
<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 20 */ + 5;
echo $x;
?>

<h1 style="color:MediumTurquoise;"> 3 - VARIAVEIS PHP</h1>

<h2 style="color:Aqua;"> criar variaveis </h2>
<?php
$txt = "Dark Souls 2 é bom sim!!!";
$x = 2;
$y = 2.2;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<h2 style="color:Aqua;"> escopo global </h2>
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<h2 style="color:Aqua;"> escopo local</h2>
<?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<h2 style="color:Aqua;"> use a palavra-chave global</h2>
<?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>


<h2 style="color:Aqua;"> use o array global<h2>
<?php
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>


<h2 style="color:Aqua;"> use a palavra-chave static</h2>
<?php
function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

<h1 style="color:MediumTurquoise;"> 4 - PHP ECHO E IMPRESSAO</h1>

<h2 style="color:Aqua;"> string com comando echo </h2>
<?php
echo "<h2>hatsune miku !</h2>";
echo "Hello hatsune!<br>";
echo "you can call me miku<br>";
echo "This ", "string ", "was ", "made ", "with multiple mikus.";
?> 

<h2 style="color:Aqua;"> string e variavel com comando echo </h2>
<?php
$txt1 = "miku miku ";
$txt2 = "miku miku";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>

<h2 style="color:Aqua;"> spring com comando print </h2>
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<h2 style="color:Aqua;"> spring e variavel com comando print </h2>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>

<h1 style="color:MediumTurquoise;"> 5 - TIPOS DE DADOS PHP</h1>

<h2 style="color:Aqua;"> sequencia de caracteres php </h2>
<?php 
$x = "Hatsune";
$y = 'Miku';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

<h2 style="color:Aqua"> php interio </h2>
<?php  
$x = 2555;
var_dump($x);
?>  

<h2 style="color:Aqua"> php float </h2>
<?php  
$x = 10.365;
var_dump($x);
?>

<h2 style="color:Aqua"> matriz php </h2>
<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

<h2 style="color:Aqua"> objeto php </h2>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<h2 style="color:Aqua"> valor null </h2>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

<h1 style="color:MediumTurquoise;"> 6 - SEQUENCIAS DE CARACTERES PHP</h1>

<h2 style="color:Aqua"> comprimento </h2>
<?php
echo strlen("Hatsune Miku");
?> 

<h2 style="color:Aqua"> contar o numero de palavras </h2>
<?php
echo str_word_count("Eldenring e DarkSouls são os melhores jogos pra desestressar");
?> 

<h2 style="color:Aqua"> inverter a string </h2>
<?php
$x = "anotaram a data da maratona";
echo strrev($x);
?> 

<h2 style="color:Aqua"> encontra um texto especifico na string </h2>
<?php
echo strpos("Dark Souls", "Souls");
?> 

<h2 style="color:Aqua"> substitui textos da string </h2>
<?php
$x = "Dark Souls";
echo str_replace("Dark", "Elden", $x);
?> 

<h1 style="color:MediumTurquoise;"> 7 - NUMEROS PHP</h1>

<h2 style="color:Aqua"> verificar se a variavel e inteira </h2>
<?php  
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// verificando de novo...
$x = 59.85;
var_dump(is_int($x));
?>  

<h2 style="color:Aqua"> verifica se a variavel e float </h2>
<?php
$x = 10.365;
var_dump(is_float($x));
?>  

<h2 style="color:Aqua"> verifica se a variavel é infinita </h2>
<?php
$x = 1.9e411;
var_dump($x);
?>  

<h2 style="color:Aqua"> se o calculo for invalido vai retornar NaN </h2>
<?php
$x = acos(8);
var_dump($x);
?>  

<h2 style="color:Aqua"> verifica se a variavel é numerica </h2>
<?php 
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hatsune miku";
var_dump(is_numeric($x));
?> 

<h2 style="color:Aqua"> verifica se a variavel é numerica </h2>
<?php
// converte float em int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// coverte string em int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>  

<h1 style="color:MediumTurquoise;"> 8 - MATEMATICA PHP</h1>

<h2 style="color:Aqua"> encontrar o valor de pi </h2>
<?php
echo(pi());
?>

<h2 style="color:Aqua"> encontar o menor e o maior </h2>
<?php
echo(min(0, 777, 30, 20, -8, -999) . "<br>");
echo(max(0, 777, 30, 20, -8, -200));
?>

<h2 style="color:Aqua"> encontar o valor absoluto positivo de um numero </h2>
<?php
echo(abs(-6.7));
?>

<h2 style="color:Aqua"> encontrar a raiz quadrada</h2>
<?php
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
?>

<h2 style="color:Aqua"> transforma o numero float para int </h2>
<?php
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
?>

<h2 style="color:Aqua"> gera um numero aleatorio</h2>
<?php
echo(rand());
?>

<h2 style="color:Aqua"> gera um numero aleatorio entre valores determinados</h2>
<?php
echo(rand(10, 100));
?>

<h1 style="color:MediumTurquoise;"> 9 - CONNSTANTES PHP</h1>

<h2 style="color:Aqua"> nome constante case sensitive</h2>

<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 

<h2 style="color:Aqua"> constante array com definiçao</h2>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>

<h2 style="color:Aqua"> constante dentro de uma funçao</h2>
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest6() {
  echo GREETING;
}
 
myTest();
?> 

<h1 style="color:MediumTurquoise;"> 10 - OPERADORES</h1>

<h2 style="color:Aqua"> adiçao + </h2>
<?php
$x = 17;  
$y = 7;

echo $x + $y;
?>  

<h2 style="color:Aqua"> subtraçao - </h2>
<?php
$x = 17;  
$y = 3;

echo $x - $y;
?>  

<h2 style="color:Aqua"> multiplicaçao * </h2>
<?php
$x = 7;  
$y = 7;

echo $x * $y;
?>  

<h2 style="color:Aqua"> divisao / </h2>
<?php
$x = 700;  
$y = 100;

echo $x / $y;
?>  

<h2 style="color:Aqua"> modulo % </h2>
<?php
$x = 100;  
$y = 10;

echo $x % $y;
?>  

<h2 style="color:Aqua"> x = y </h2>
<?php
$x = 10;  
echo $x;
?>  

<h2 style="color:Aqua"> x += y </h2>
<?php
$x = 20;  
$x += 100;

echo $x;
?> 

<h2 style="color:Aqua"> x -= y </h2>
<?php
$x = 50;
$x -= 30;

echo $x;
?>  

<h2 style="color:Aqua"> x *= y </h2>
<?php
$x = 5;
$x *= 6;

echo $x;
?>  

<h2 style="color:Aqua"> x /= y </h2>
<?php
$x = 10;
$x /= 5;

echo $x;
?> 

<h2 style="color:Aqua"> x %= y </h2>
<?php
$x = 15;
$x %= 4;

echo $x;
?>  

<h2 style="color:Aqua"> igual == </h2>
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // se valor for true retorna igual
?>  

<h2 style="color:Aqua"> identico === </h2>
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?> 

<h2 style="color:Aqua"> diferente != </h2>
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // retorna false porque os valores sao igual
?>  

<h2 style="color:Aqua"> diferente <> </h2>
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  

<h2 style="color:Aqua"> nao identico !== </h2>
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

<h2 style="color:Aqua"> maior que > </h2>
<?php
$x = 100;
$y = 50;

var_dump($x > $y);
?>  

<h2 style="color:Aqua"> menor que < </h2>
<?php
$x = 10;
$y = 50;

var_dump($x < $y);
?>  

<h2 style="color:Aqua"> maior ou igual >= </h2>
<?php
$x = 50;
$y = 50;

var_dump($x >= $y);
?>  

<h2 style="color:Aqua"> menor ou igual <= </h2>
<?php
$x = 50;
$y = 50;

var_dump($x <= $y);
?>  

<h2 style="color:Aqua"> nave espacial <=></h2>
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?> 

<h2 style="color:Aqua"> incremento ++$x</h2>
<?php
$x = 10;  
echo ++$x;
?>  

<h2 style="color:Aqua"> incremento x$++</h2>
<?php
$x = 10;  
echo $x++;
?>  

<h2 style="color:Aqua"> incremento --$x</h2>
<?php
$x = 10;  
echo --$x;
?>  

<h2 style="color:Aqua"> incremento x$--</h2>
<?php
$x = 10;  
echo $x--;
?>  

<?php
$x = 100;  
$y = 50;
?>  

<h2 style="color:Aqua"> operador e</h2>
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?> 

<h2 style="color:Aqua"> operador ou</h2>
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?> 

<h2 style="color:Aqua"> operador xor</h2>
<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?> 

<h2 style="color:Aqua"> operador &&</h2>
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?> 

<h2 style="color:Aqua"> operador ||</h2>
<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  

<h2 style="color:Aqua"> operador !</h2>
<?php
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

<?php
$x = 100;  

if (!($x == 90)) {
    echo "Hello world!";
}
?>  

<h2 style="color:Aqua"> concatenaçao $txt1 . $txt2</h2>
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  

<h2 style="color:Aqua"> acrescenta $txt1 . $txt2</h2>
<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?> 

<h2 style="color:Aqua">matriz uniao +</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  

<h2 style="color:Aqua">matriz igualdade ==</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>  

<h2 style="color:Aqua">matriz identidade ===</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?>  

<h2 style="color:Aqua">matriz desigualdade !=</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?> 

<h2 style="color:Aqua">matriz desigualdade <></h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>  

<h2 style="color:Aqua">matriz nao identidade !==</h2>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>  

<h2 style="color:Aqua"> ternario</h2>
<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  

<h2 style="color:Aqua">coalencia nula ??</h2>
<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  

<h2 style="color:Aqua">o loop while</h2>
<?php  
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?> 

<h2 style="color:Aqua">o loop do ... while</h2>
<?php 
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<h2 style="color:Aqua">outro loop do ... while</h2>
<?php 
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<h2 style="color:Aqua">o loop for</h2>
<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  

<h2 style="color:Aqua">o laço foreash</h2>
<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}
?>  

<h2 style="color:Aqua">introduçao break em loop</h2>
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>

<h2 style="color:Aqua">introduçao continuaçao em loop</h2>
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    continue;
  }
  echo "The number is: $x <br>";
}
?>

<h2 style="color:Aqua">cria uma funçao</h2>
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?>

<h2 style="color:Aqua">funçao com dois argumentos </h2>
<?php
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege","1975");
familyName("Stale","1978");
familyName("Kai Jim","1983");
?>

<h2 style="color:Aqua">argumento padrao </h2>
<?php
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<h2 style="color:Aqua">retorna um valor </h2>
<?php
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>

<h2 style="color:Aqua">passando argumento por emergencia </h2>
<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>

<h1 style="color:MediumTurquoise;"> 11 - MATRIZES PHP</h1>

<h2 style="color:Aqua">matriz indexada </h2>
<?php
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

<h2 style="color:Aqua">count() </h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

<h2 style="color:Aqua">percorrer a matriz indexa </h2>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

<h2 style="color:Aqua">matriz associativa </h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

<h2 style="color:Aqua">percorrer a matriz associativa </h2>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>