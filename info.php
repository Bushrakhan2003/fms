$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    // User was successfully inserted
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
