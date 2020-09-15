<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
    $paragrafo = "Nel mezzo del cammin di nostra vita, mi ritrovai in una Selva Oscura, che la diritta via era smarrita.";
    $badWord = str_replace("vita", "***", $paragrafo);
    $length= "Lunghezza:" . " " . strlen($paragrafo) . "caratteri";
    echo $badWord;

?>

<?php
echo $length;
?>