<!DOCTYPE html>
<html>
<head>
    <title>Hitung BMI</title>
</head>
<body>
    <h2>Form Hitung BMI</h2>
    <form method="post">
        <label>Berat Badan (kg):</label>
        <input type="number" name="berat" step="0.1" required><br><br>
        
        <label>Tinggi Badan (cm):</label>
        <input type="number" name="tinggi" step="0.1" required><br><br>
        
        <input type="submit" value="Hitung BMI">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat = $_POST["berat"];
        $tinggi = $_POST["tinggi"] / 100; // ubah cm ke meter

        $bmi = $berat / ($tinggi * $tinggi);

        echo "<h3>Hasil BMI Anda: " . number_format($bmi, 2) . "</h3>";

        if ($bmi < 18.5) {
            echo "Kategori: Kurus 🏃‍♀️";
        } elseif ($bmi < 24.9) {
            echo "Kategori: Normal 💪";
        } elseif ($bmi < 29.9) {
            echo "Kategori: Kelebihan berat badan 🍔";
        } else {
            echo "Kategori: Obesitas ⚠️";
        }
    }
    ?>
</body>
</html>
