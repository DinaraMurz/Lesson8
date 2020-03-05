<?php

declare(strict_types=1);

include "helpers.php";

echo Tag::a()->appendBody("Hello");

$html = Tag::html()->appendAttribute("lang", "en");
$head = Tag::head()->appendTo($html);

$meta = Tag::meta()->appendTo($head)->appendAttribute("charset","utf-8");
$title = Tag::title()->appendTo($head);

$body = Tag::body()->appendTo($html);



/*
$link = new Link();
echo $link->appendBody("hello")->setAttribute('href', '#');

function greenting(MyParent $parent){

}*/

/*
$width = 3;
$height = 10;
$road = [];

for($x = 0; $x < $width; $x++){
    for($y = 0; $y < $height; $y++){
        if(rand(500, 1000) % 13 == 0) {
            $road[$x][$y] = new Car($x, $y);
            echo "<br>";
        }
    }
}

echo chr(27);

var_dump($road);
/*
function printRoad($width, $height){
    for($x = 0; $x < $width; $x++){
        for($y = 0; $y < $width; $y++){
            if($road[$x][$y] != null){
                echo "|";
            }
        }
    }
}*/

/*
echo "   a b c d e f g h i j" . "/n";
echo "  +-------------------+" . "/n";
for ($i = 0; $i < 10; $i++) {
    echo " " . i . "|" . $road[$i][0];
        for ($j = 1; $j < 10; $j++) {
        echo " " << $road[i][j];
        }
        echo "|" . "/n";
    }
    echo "  +-------------------+" . "/n";

while(true){
    $rand = rand(1,3);
    switch($rand){
        case 1:

            break;
        case 2:

            break;
        case 3:

            break;
    }
    sleep(1);
}*/

/*
include_once "classes/MyClass.php";
include_once "classes/Person.php";
include_once "classes/MyArray.php";
include_once "classes/Tmp.php";


include_once "classes/Tag.php";
include_once "classes/Body.php";*/

/*

$mom = new Budget();
$dad = new Budget();
$son = new Budget();
$mom->addMoney(1000);
$mom->collectMoney(120);
$dad->collectMoney(120);
$son->spendMoney(100);



$static = new MyStatic();
//echo $static->firstName;
$name = 'MyStatic';
echo $name::$name;

echo MyStatic::class;
*/
/*
$div = new Tag("div", []);

$link = new Tag("a", []);

$link->setAttribute('href', "https://google.com");
$link->appendBody("Hello World");

$div->setAttribute("style", "background: red; width:100px; height: 100px");
$div->appendBody($link);


echo $div . $link;

$myClass = new MyClass();

$myClass->doAction("clear dala");


$person = new Person(20);

while($person->isAlive()){
    $person->spendTime();
    if($person->isHungry()) {
        $person->eatFood(rand(20, 70));
        echo "dead";
    }
}
echo "dead";

$arr = new MyArray([1,[2,2,[3]],1]);


$arr->printArray();


$tmp = new Tmp();
//$tmp->doAction()->playGame();


include_once "classes/Tag.php";
include_once "classes/Body.php";

$tag = new Tag("a", ["href" => "#"]);
$tag->isSelfClosing;
$tag->appendBody("link");
print $tag->name;
echo $tag->getString();

$div= new Tag("div");
$link = new Tag("a");

$link->appendBody("HW");
$link->appendAttribute("href","https://google.com");
$div->appendBody($link);




echo $div;*/