<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];

    $data = "Username: $username\nEmail: $email\n\n";
    file_put_contents('userdata.txt', $data, FILE_APPEND);

    echo "Data submitted successfully!";
} else {
    echo "Invalid request!";
}
?>
