<?php
// Database connection variables
$host = 'localhost';
$dbname = 'Registration_form'; // Corrected database name
$user = 'postgres'; // replace with your actual username
$password = '3004'; // replace with your actual password

// Capture form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];

try {
    // Connect to PostgreSQL database
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL query to match the registration_form table structure
    $sql = "INSERT INTO registration_form (full_name, date_of_birth, email, contact) VALUES (:name, :dob, :email, :contact)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':contact', $contact);

    // Execute the query
    $stmt->execute();

    echo "Data inserted successfully!";
} catch (PDOException $e) {
    // Check if it's a unique violation error
    if ($e->getCode() == '23505') {
        // Redirect back with an error message
        header("Location: form.html?error=Number%20already%20exists");
        exit();
    } else {
        echo "Error: " . $e->getMessage();
    }
}

// Close connection
$pdo = null;
?>
