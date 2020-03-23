<html>
<title>
    <?= " Tipe Data " ?>
</title>

<body>
    <?php
    $nim = "A22.2019.02734";
    $nama = 'Nico Fernades';
    $umur = 19;
    $nilai = 90.25;
    $status = TRUE;
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama<br>";
    print "Umur : " . $umur;
    print "<br>";
    printf("Nilai : %.3f<br>", $nilai);
    if ($status)
        echo "Status : Aktif";
    else
        echo "Status : Tidak Aktif";
    ?>
</body>

</html>