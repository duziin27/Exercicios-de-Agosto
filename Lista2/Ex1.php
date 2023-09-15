<?php
/*1 - [Capture a torre] Escreva uma função que retorne verdadeiro se duas torres puderem atacar uma à outra e falso caso contrário. (obs: tabuleiro vazio, somente as duas torres jogando)
torreAtaca(["A8", "E8"]) ➞ true
torreAtaca(["A1", "B2"]) ➞ false
torreAtaca(["H4", "H3"]) ➞ true
torreAtaca(["F5", "C8"]) ➞ false
*/

function AtaqueDeTorre($Aliada,$Adversaria){
    if (similar_text($Aliada, $Adversaria)){
        echo "Torre atacada" ."<br>";
    } else{
        echo "As torres não se atacam"."<br>";
    }

}

AtaqueDeTorre("A8", "E8");
AtaqueDeTorre("A1", "B2");
AtaqueDeTorre("H4", "H3");
AtaqueDeTorre("F5", "C8");

?>