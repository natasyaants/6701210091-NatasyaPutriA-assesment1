<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>v1.3</title>
</head>
<body>
    <table>
        <tr>
            <td>
            <form method="POST" action="">
                <input type="number" name="angka_1" required>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value=""></option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="angka_2" required>
                <input type="submit" name = "hitung" value="hitung">    
            </form>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if (isset($_POST["hitung"])){
                    $angka1 = $_POST['angka_1'];
                    $angka2 = $_POST['angka_2'];
                    $operator = $_POST['operator'];

                    if ($operator == '+') {
                        $hasil = $angka_1 + $angka_2;
                    } elseif ($operator == '-') {
                        $hasil = $angka_1 - $angka_2;
                    } elseif ($operator == '*') {
                        $hasil = $angka_1 * $angka_2;
                    } elseif ($operator == '/') {
                        $hasil = $angka_1 / $angka_2;
                    } else {
                        $hasil = 0;
                    }

                    echo "<h2>Hasil Perhitungan:</h2>";
                    echo "<p>{$angka_1} {$operator} {$angka_2} = {$hasil}</p>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>