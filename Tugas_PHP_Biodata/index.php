<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Biodata Mahasiswa</h1>
    
    <!-- Form Pencarian (GET) -->
    <div class="container search-form">
        <h2>Form Pencarian</h2>
        <?php include 'search_form.php'; ?>
        
        <?php
        // Proses form pencarian
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['keyword']) && !empty($_GET['keyword'])) {
            $keyword = htmlspecialchars($_GET['keyword']);
            echo "<div class='search-result'>";
            echo "<p><strong>Anda mencari data dengan kata kunci: $keyword</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
    
    <!-- Form Biodata (POST) -->
    <div class="container">
        <h2>Form Biodata Mahasiswa</h2>
        <?php include 'biodata_form.php'; ?>
        
        <?php
        // Proses form biodata
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'process_biodata.php';
        }
        ?>
    </div>
</body>
</html>