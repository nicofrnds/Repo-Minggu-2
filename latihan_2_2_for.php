<html>

<head>

</head>

<body>
    <?php
    $n = 19;
    if (isset($_POST['submit'])) {

        $bil = 1;
        for ($i = 1; $i <= $n; $i++) {
            $bil = $bil * $i;
        }
    }
    ?>

    <h2>Menghitung Bilangan Faktorial menggunakan For</h2>

    <?php
    if ((isset($n)) and ($n != NULL)) {
        echo '<h4>Hasil Faktorial :</h4>';
        for ($i = 1; $i < $n; $i++) {
            echo $i . 'x';
        }
        echo $n;
    }

    echo '<h4>Jumlah Faktorial :</h4>';
    echo '<input type="text" value="' . (isset($bil) ? $bil : NULL) . '" readonly/>';

    ?>

</body>

</html>