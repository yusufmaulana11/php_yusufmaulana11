<h2>Menampilkan Data</h2>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // menndapatkan jumlah baris dan kolom yg diinput sebelumnya
    $nBaris = $_POST['baris'];
    $nKolom = $_POST['kolom'];

    // mengambil data yg diinputkan di form
    $form_data = array();
    for ($i = 1; $i <= $nBaris; $i++) {
        for ($j = 1; $j <= $nKolom; $j++) {
            $input_name = 'simpan'.$i.'_'.$j;
            if (isset($_POST[$input_name])) {
                $form_data[$i][$j] = $_POST[$input_name];
            } else {
                $form_data[$i][$j] = '';
            }
        }
    }

    // menampilkan data yg didapat
    echo '<table>';
    for ($i = 1; $i <= $nBaris; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $nKolom; $j++) {
            echo '<td>'.$form_data[$i][$j].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>
