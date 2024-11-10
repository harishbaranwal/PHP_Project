<?php
$host = 'localhost';
$dbname = 'contact';  
$username = 'root';  
$password = '';     

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $createContactsTableSQL = "CREATE TABLE IF NOT EXISTS contact_form (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        address VARCHAR(255),
        phno VARCHAR(15),
        subject VARCHAR(255),
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($createContactsTableSQL);

    $createFreelancersTableSQL = "CREATE TABLE IF NOT EXISTS freelancer_form (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        phone VARCHAR(15),
        job_role VARCHAR(50),
        portfolio_link VARCHAR(255),
        address TEXT,
        city VARCHAR(100),
        pin_code VARCHAR(10),
        date DATE,
        cv_path VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $pdo->exec($createFreelancersTableSQL);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?> 
