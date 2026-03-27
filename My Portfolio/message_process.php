<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require_once 'config.php';
session_start();

// Validate request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Invalid request method');
}

// Initialize errors array
$errors = [];

if (isset($_POST['send_message'])){
    // Get and trim input data
    $fname = trim($_POST['fname'] ?? '');
    $lname = trim($_POST['lname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation rules
    if (empty($fname)) {
        $errors[] = 'First name is required.';
    } elseif (strlen($fname) <= 2 || strlen($fname) > 10) {
        $errors[] = 'First name must be between 2 and 10 characters.';
    }
    
    if (empty($lname)) {
        $errors[] = 'Last name is required.';
    } elseif (strlen($lname) <= 2 || strlen($lname) > 10) {
        $errors[] = 'Last name must be between 2 and 10 characters.';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please provide a valid email address.';
    }
    
    if (empty($phone)) {
        $errors[] = 'Phone number is required.';
    } elseif (!preg_match('/^[\d\s\-\+\(\)\.]{10,}$/', $phone)) {
        $errors[] = 'Please provide a valid phone number.';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required.';
    } elseif (strlen($message) < 10 || strlen($message) > 1000) {
        $errors[] = 'Message must be between 10 and 1000 characters.';
    }
    
    // If validation fails, redirect with error messages
    if (!empty($errors)) {
        foreach ($errors as $error) {
            $_SESSION['alerts'][] = ['type' => 'error', 'message' => $error];
        }
        header('Location: index.php');
        exit();
    }

    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'argamesaraby144@gmail.com';   //SMTP write your email
    $mail->Password   = 'kdlytteqtbdraudi';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('argamesaraby144@gmail.com', 'Portfolio Contact'); // From portfolio email
    $mail->addAddress('argamesaraby144@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($email, $fname); // reply to sender email

    //Content
    $mail->Subject = "New Portfolio Message from {$fname} {$lname}";
    $mail->isHTML(true);               //Set email format to HTML
    
    // Format email body with sender details
    $emailBody = "<h3>New Message from Your Portfolio</h3>";
    $emailBody .= "<p><strong>From:</strong> {$fname} {$lname}</p>";
    $emailBody .= "<p><strong>Email:</strong> {$email}</p>";
    $emailBody .= "<p><strong>Phone:</strong> {$phone}</p>";
    $emailBody .= "<hr>";
    $emailBody .= "<p><strong>Message:</strong></p>";
    $emailBody .= "<p>" . nl2br(htmlspecialchars($message)) . "</p>";
    
    $mail->Body = $emailBody;

    // Success sent message alert
    $mail->send();
    
    // Prepare and execute database statement
    try {
        $stmt = $conn->prepare("INSERT INTO messages(fname, lname, email, phone, message) VALUES (?, ?, ?, ?, ?)");
        
        if (!$stmt) {
            throw new Exception('Database prepare error: ' . $conn->error);
        }
        
        $stmt->bind_param("sssss", $fname, $lname, $email, $phone, $message);
        
        if ($stmt->execute()) {
            $_SESSION['alerts'][] = ['type' => 'success', 'message' => 'Message sent successfully! I\'ll get back to you soon.'];
            $stmt->close();
            header('Location: index.php');
            exit();
        } else {
            throw new Exception('Database execution error: ' . $stmt->error);
        }
    } catch (Exception $e) {
        // Log error for debugging (don't expose to user)
        error_log('Message submission error: ' . $e->getMessage());
        
        $_SESSION['alerts'][] = ['type' => 'error', 'message' => 'Failed to send message. Please try again later.'];
        header('Location: index.php');
        exit();
    }

}

?>