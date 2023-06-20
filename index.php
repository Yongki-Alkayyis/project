<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<?php
if(isset($_POST['hitung'])){
    if ($_POST['operasi'] == "tambah") {
        $hasil = $_POST['bil1']+ $_POST['bil2'];
    } elseif($_POST['operasi'] == "kurang") {
        $hasil = $_POST['bil1'] - $_POST['bil2'];
    } elseif($_POST['operasi'] == "kali") {
        $hasil = $_POST['bil1'] * $_POST['bil2'];
    } else{
        $hasil = $_POST['bil1'] / $_POST['bil2'];
    }
} else {
    $hasil = 0;
}
?>
<body>
    <div class="isi">
    <h1 class="judul">Kalkulator</h1>
    <form action="index.php" method="POST">
        <input type="text" name="bil1" class="input">
        <input type="text" name="bil2" class="input">
        <select name="operasi" class="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="submit" name="hitung" value="hitung" class="hitung">
        <h2>Hasil :<?php echo $hasil; ?></h2>
    </form>
    </div>
    
</body>
</html>