<?php /*Oppgave 4*/

/* Programmet mottat 2 tall fra et HTML-skjema ved POST-metoden
    Programmet skriver ut de 2 tallene og summen, differansen, produktet og kvotientet av/mellom tallene */

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"]; /*variable gitt verdier fra feltene i HTML-skjemaet*/

$sum = $tall1 + $tall2; /*summerer tallene*/
$differanse = $tall1 - $tall2; /*trekker tall2 fra tall1*/
$produkt = $tall1 * $tall2; /*ganger tallene*/
$kvotient = $tall1 / $tall2; /*deler tall1 med tall2*/ 

print("Tall 1 er: $tall1 <br>"); /*skriver ut tall1*/
print("Tall 2 er: $tall2 <br>"); /*skriver ut tall2*/ 
print("<br />");
print("Summen av tallene er: $sum <br>"); /*skriver ut summen*/
print("Differansen av tallene er: $differanse <br>"); /*skriver ut differansen*/
print("Produktet av tallene er: $produkt <br>"); /*skriver ut produktet*/
print("Kvotienten av tallene er: $kvotient <br>"); /*skriver ut kvotienten*/
?>
