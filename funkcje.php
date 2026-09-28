<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Zad.1
        function SUMA($a, $b) {
        echo "Suma: " . ($a + $b);
        }
 
        // Zad.2
        function PODSTAWY($a, $b) {
        echo "Różnica: " . ($a - $b) . "<br>";
        echo "Iloczyn: " . ($a * $b) . "<br>";
 
        if ($b != 0) {
            echo "Iloraz: " . ($a / $b);
        } else {
            echo "Nie można dzielić przez 0.";
        }
        }
 
        // Zad.3
        function KALKULATOR($a, $b, $dzialanie) {
            switch ($dzialanie) {
                case "suma":
                    $wynik = $a + $b;
                    break;
 
                case "roznica":
                    $wynik = $a - $b;
                    break;
 
                case "iloczyn":
                    $wynik = $a * $b;
                    break;
 
                case "iloraz":
                    if ($b == 0) {
                        $wynik = "Nie można dzielić przez 0.";
                    } else {
                        $wynik = $a / $b;
                    }
                    break;
 
                default:
                    $wynik = "Nieprawidłowe działanie.";
            }
 
            echo "<div id='wynik'>$wynik</div>";
        }
       
        // Zad.4
        function MAKS($a, $b, $c) {
            echo "Największa liczba: " . max($a, $b, $c);
        }
 
        // Zad.5
        function WZROST($wzrost) {
            if ($wzrost < 150) {
                echo "Wzrost niski.";
            } elseif ($wzrost > 180) {
                echo "Wzrost wysoki.";
            } else {
                echo "Wzrost średni.";
            }
        }
 
        // Zad.6
        function BMI($wzrost, $waga) {
            if ($wzrost <= 0) {
                echo "<div id='wynik'>Nieprawidłowy wzrost.</div>";
                return;
            }
 
            $wzrostMetry = $wzrost / 100;
            $bmi = $waga / ($wzrostMetry * $wzrostMetry);
 
            if ($bmi < 18.5) {
                $komentarz = "za mało!";
            } elseif ($bmi > 25) {
                $komentarz = "za dużo!";
            } else {
                $komentarz = "OK!";
            }
 
            echo "<div id='wynik'>BMI: " . round($bmi, 2) . " - $komentarz</div>";
        }
       
        // Zad.7
        function STARSZY($data1, $data2) {
            $d1 = new DateTime($data1);
            $d2 = new DateTime($data2);
 
            if ($d1 < $d2) {
                echo "Osoba 1 jest starsza.";
            } elseif ($d2 < $d1) {
                echo "Osoba 2 jest starsza.";
            } else {
                echo "Obie osoby są w tym samym wieku.";
            }
        }
 
        // Zad.8
        function PRZESTEPNY($rok) {
            if (($rok % 400 == 0) || ($rok % 4 == 0 && $rok % 100 != 0)) {
                echo "Rok $rok jest przestępny.";
            } else {
                echo "Rok $rok nie jest przestępny.";
            }
        }
       
        // Zad.9
        function SILA($haslo) {
            $dlugosc = strlen($haslo);
 
            $cyfra = preg_match('/[0-9]/', $haslo);
            $duza = preg_match('/[A-Z]/', $haslo);
            $mala = preg_match('/[a-z]/', $haslo);
            $specjalny = preg_match('/[^a-zA-Z0-9]/', $haslo);
 
            if (
                $dlugosc < 9 ||
                !$cyfra ||
                !$duza ||
                !$mala ||
                !$specjalny
            ) {
                echo "Hasło słabe.";
            } else {
                echo "Hasło mocne.";
            }
        }
 
                // Zad.10
        function TROJKAT($a, $b, $c) {
            if ($a > 0 && $b > 0 && $c > 0 &&
                $a + $b > $c &&
                $a + $c > $b &&
                $b + $c > $a) {
 
                echo "Z podanych boków można utworzyć trójkąt.";
            } else {
                echo "Z podanych boków nie można utworzyć trójkąta.";
            }
        }
    ?>
</body>
</html>