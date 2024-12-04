<!-- ---------- EXO 1 ---------- -->
<!-- <?php
        function blop()
        {
            return "true";
        }

        echo blop();
        ?>  -->

<!-- ---------- EXO 2 ---------- -->
<!-- <?php

        function display(string $temp)
        {
            return $temp;
        }

        echo display("tadammm");
        ?>  -->


<!-- ---------- EXO 3 ---------- -->
<!-- <?php

        function display2(string $temp, string $temp2)
        {
            return $temp . " " . $temp2;
        }

        echo display2("badoum", "pshiiiit");
        ?>  -->

<!-- ---------- EXO 4 ---------- -->
<!-- <?php

        function numbers(int $number1, int $number2)
        {
            if ($number1 > $number2) {
                return "Le premier nombre est plus grand";
            } else if ($number1 === $number2) {
                return  "Les deux nombres sont identiques";
            } else {
                return "Le premier nombre est plus petit";
            }
        }

        echo numbers(32, 21)

        ?>  -->
<!-- ---------- EXO 5 ---------- -->
<!-- <?php

        function numberbis(int $number, string $chainecaracteres)
        {
            return $number . " " . $chainecaracteres;
        }

        echo numberbis(51, "je t'aime, j'en boirais des tonneaux")

        ?>  -->
<!-- ---------- EXO 6 ---------- -->
<!-- <?php

        function cni(string $lastname, string $firstname, int $age)
        {
            return "Bonjour {$lastname} {$firstname}, tu as {$age} ans.";
        }

        echo cni("Roger", "Leboulanger", 57);

        ?> -->
<!-- ---------- EXO 7 ---------- -->
<!-- <?php

function boomer(string $gender, int $age) {
    if ($age > 18 && $gender !=="femme") {
        echo "Vous êtes un homme et vous êtes majeur";
    }
    else if ($age < 18 && $gender !=="femme") {
        echo "Vous êtes un homme et vous êtes mineur";
    }
    else if ($age > 18 && $gender ==="femme") {
        echo "Vous êtes une femme et vous êtes majeur";
    }
    else if ($age < 18 && $gender ==="femme") {
        echo "Vous êtes une femme et vous êtes mineur";
    }
}

echo boomer ("licorne", 33);

?> -->

<!-- ---------- EXO 8 ---------- -->
<!-- <?php

function somme (int $number1, int $number2, int $number3){
    return $number1 + $number2 + $number3;
}

echo somme (1, 18, 1);
?> -->