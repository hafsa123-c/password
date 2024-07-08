 <?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP is empty
$dbname = "password manager";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $website = $_POST['website'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   /* $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $encrypted_password = base64_encode($password);*/

    echo Website;
    echo username;
    echo password;

   /* $stmt = $conn->prepare("INSERT INTO passwords (website, username, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $website, $username, $encrypted_password);

    if ($stmt->execute()) {
        $message = "Password added successfully.";
        $color = "green";
    } else {
        $message = "Error adding password: " . $stmt->error;
        $color = "red";
    }

    $stmt->close();
    $conn->close();*/
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Password</title>
</head>
<body>
    <form method="POST" action="">
        <label for="website">Website:</label>
        <input type="text" id="website" name="website" required><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Add Password">
    </form>

    <?php if (isset($message)) : ?>
        <p style="color: <?php echo $color; ?>"><?php echo $message; ?></p>
    <?php endif; ?>
</body>
</html>























