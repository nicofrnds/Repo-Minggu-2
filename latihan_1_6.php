<html>
<title>Latihan 1_6</title>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <?php
    $operator = "";
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
        }
    }
    ?>
    <center>
        <h2>KALKULATOR</h2>

        <form method="post" action="latihan_1_6.php">
            <table>
                <tr>
                    <td>Bilangan 1 </td>
                    <td><input class="form-control form-control-lg" type="number" name="bil1" value="<?php if (!empty($_POST["operator"])) {
                                                                                                            echo $_POST["bil1"];
                                                                                                        }; ?>"></td>
                </tr>
                <tr>
                    <td>Bilangan 2 </td>
                    <td> <input class=" form-control form-control-lg" type="number" name="bil2" value="<?php if (!empty($_POST["operator"])) {
                                                                                                            echo $_POST["bil2"];
                                                                                                        }; ?>"></td>
                </tr>
                <tr>
                    <td>Pilih Operator </td>
                    <td><select name="operator" class="form-control">
                            <option value="tambah" <?php if ($operator == "tambah") {
                                                        echo "selected";
                                                    } ?>>+</option>
                            <option value="kurang" <?php if ($operator == "kurang") {
                                                        echo "selected";
                                                    } ?>>-</option>
                            <option value="kali" <?php if ($operator == "kali") {
                                                        echo "selected";
                                                    } ?>>x</option>
                            <option value="bagi" <?php if ($operator == "bagi") {
                                                        echo "selected";
                                                    } ?>>/</option>
                        </select></td>
                </tr>
                <tr>
                    <td><input class="btn btn-primary" type="submit" name="hitung" value="Hitung"></td>
                </tr>

            </table>

        </form>
        <?php
        if (isset($_POST['hitung'])) { ?>
            <?php echo "Hasil : " . $hasil; ?>

        <?php }

        ?>
    </center>
</body>

</html>