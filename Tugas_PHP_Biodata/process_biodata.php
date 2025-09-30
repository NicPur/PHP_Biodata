<?php
echo "<h2>Data Biodata Mahasiswa</h2>";
echo "<table>";
echo "<tr><th>Field</th><th>Value</th></tr>";

// Nama
echo "<tr><td>Nama Lengkap</td><td>" . htmlspecialchars($_POST['nama']) . "</td></tr>";

// NIM
echo "<tr><td>NIM</td><td>" . htmlspecialchars($_POST['nim']) . "</td></tr>";

// Program Studi
echo "<tr><td>Program Studi</td><td>" . htmlspecialchars($_POST['prodi']) . "</td></tr>";

// Jenis Kelamin
echo "<tr><td>Jenis Kelamin</td><td>" . htmlspecialchars($_POST['jenis_kelamin']) . "</td></tr>";

// Hobi
if (isset($_POST['hobi'])) {
    $hobi = implode(", ", $_POST['hobi']);
    echo "<tr><td>Hobi</td><td>" . htmlspecialchars($hobi) . "</td></tr>";
} else {
    echo "<tr><td>Hobi</td><td>Tidak ada hobi yang dipilih</td></tr>";
}

// Alamat
echo "<tr><td>Alamat</td><td>" . nl2br(htmlspecialchars($_POST['alamat'])) . "</td></tr>";

echo "</table>";
?>