<!-- ---------- EXO 1 ---------- -->
<!-- <?php
        $age = 33;

        if ($age >= 18) {
            echo "Vous êtes majeur";
        } else {
            echo "Vous êtes mineur";
        }
        ?> -->

<!-- ---------- EXO 2 ---------- -->
<!-- <?php
$isEasy = true;

if ($isEasy === true) {
    echo "C'est facile !!";
} else {
    echo "C'est difficile !!!";
}


?> -->

<!-- ---------- EXO 2_bis ---------- -->
<!-- <?php
$isEasy = false;

echo $isEasy ? "C'est facile !!" : "C'est difficile !!!";
?> -->

<!-- ---------- EXO 3 ---------- -->

<!-- <?php
$age = 33;
$gender = "female";

if ($age > 18 && $gender !=="female") {
    echo "Vous êtes un homme et vous êtes majeur";
}
else if ($age < 18 && $gender !=="female") {
    echo "Vous êtes un homme et vous êtes mineur";
}
else if ($age > 18 && $gender ==="female") {
    echo "Vous êtes une femme et vous êtes majeur";
}
else if ($age < 18 && $gender ==="female") {
    echo "Vous êtes une femme et vous êtes mineur";
}
?> -->

<!-- ---------- EXO 4 ---------- -->
<!-- <?php
$magnitude = 9;

switch ($magnitude) {
    case 1 : echo "Micro-séisme impossible à ressentir";
    break;
    case 2 : echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
    break;
    case 3 : echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti";
    break;
    case 4 : echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
    break;
    case 5 : echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
    break;
    case 6 : echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre";
    break;
    case 7 : echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance";
    break;
    case 8 : echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres";
    break;
    case 9 : echo "Séisme capable de tout détruire sur une très vaste zone";
}
?> -->

<!-- ---------- EXO 5 ---------- -->
<!-- <?php
$gender ="femme";
if ($gender !== "homme"){
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}
// abrégé :
// echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
//  
?> -->

<!-- ---------- EXO 6 ---------- -->
<!-- <?php
$age = 33;
if ($age >= 18){
echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
}
// abrégé :
// echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
?> -->

<!-- ---------- EXO 7 ---------- -->
<!-- <?php
$isOk = false;
if ($isOk === false){
echo "C'est pas bon !!!";
} else {
    echo "C'est ok !!";
}
// abrégé :
//  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
?>  -->

<!-- ---------- EXO 8 ---------- -->
<!-- <?php
$isOk = true;
if ($isOk === true){
    echo "C'est ok !!";
} else {
    echo "C'est pas bon !!!";
}
// abrégé :
// echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
?>  -->