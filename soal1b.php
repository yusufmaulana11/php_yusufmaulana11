<h2>Input Data</h2>

<form method="post" action="simpandata.php">

<?php
$nBaris = $_POST['baris'];
$nKolom = $_POST['kolom'];

for ($i = 1; $i <= $nBaris; $i++) {
    echo '<div>';
    for ($j = 1; $j <= $nKolom; $j++) {
        echo '<label for="input'.$i.'_'.$j.'"> '.$i.'.'.$j.':</label>';
        echo '<input type="text" id="input'.$i.'.'.$j.'" name="input'.$i.'.'.$j.'" required>';
    }
    echo '</div>';
}
echo '<input type="submit" value="Submit" name="simpan">';
echo '</form>';
?>

</form>
