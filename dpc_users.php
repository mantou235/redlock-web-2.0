<!-- kirsten la07 2540119204 -->
<?php
$host = 'db'; // hostname yang digunakan server database
$db_name = 'redlock-web-2.0'; // nama database yg mau dihubungkan
$username = 'root'; // username digunakan ketika mau mengakses database
$password = 'root'; // password digunakan ketika mau mengakses database

$conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
// membuat koneksi ke database dengan mengspesifikasi host, nama, username, password
// PDO = PHP Data Objects

$stmt = $conn->prepare("SELECT COUNT(*) FROM users");
// $stmt = store, $conn->prepare = query SQL baru
              // SELECT COUNT(*) FROM users = menghitung banyak barisan pada tabel 'users'
$stmt->execute(); // jalankan query

$result = $stmt->fetch(); // hasil query, semacam return value
$total_users = $result[0];

echo "Total number of users: $total_users";
?>