<?php
$svar = $_POST['svar'];
if (!$svar) {
    print("Du har ikke svar på spørsmålet om du er student eller ikke.")
}
else if ($svar=="j")
{
    print("Du er student.")
}
else if ($svar == "n")
{
    print("Du er ikke student.")
}
else 
{
    print("Du har svart noe annet enn ja eller nei.")
}
?>