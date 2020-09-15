<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<!-- SENZA GET -->
 <!-- <?php
    $paragrafo = "Nel mezzo del cammin di nostra vita, mi ritrovai in una Selva Oscura, che la diritta via era smarrita.";
    $badWord = str_replace("vita", "***", $paragrafo);
    $length= "Lunghezza:" . " " . strlen($paragrafo) . "caratteri";
    echo $badWord;
    echo $length;

?>; -->

<!-- CON GET -->
<?php
    $paragrafo2 = "Nel mezzo del cammin di nostra vita, mi ritrovai in una Selva Oscura, che la diritta via era smarrita.";
    $badWord2 = $_GET['word'];
    $nuovoParagrafo = str_replace($badWord2, "***", $paragrafo2);
    $length= "Lunghezza:" . " " . strlen($paragrafo) . "caratteri";
    echo nl2br($nuovoParagrafo . "\n" . $length);
?>;