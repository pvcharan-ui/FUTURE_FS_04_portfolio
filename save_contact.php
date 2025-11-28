<?php
// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    $status = "error";
    $msg = "All fields are required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status = "error";
    $msg = "Invalid email format.";
} else {
    // DB connection
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "portfolio_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        $status = "error";
        $msg = "Database connection failed.";
    } else {
        $stmt = $conn->prepare(
            "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $status = "success";
            $msg = "Your message has been saved successfully.";
        } else {
            $status = "error";
            $msg = "Something went wrong. Please try again.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<?php include "includes/header.php"; ?>

<section class="section grey">
  <div class="container">
    <h2 class="section-title">
      <?php if ($status === "success"): ?>
        Thank you, <?php echo htmlspecialchars($name); ?>!
      <?php else: ?>
        Oops!
      <?php endif; ?>
    </h2>

    <p class="section-subtitle">
      <?php echo htmlspecialchars($msg); ?>
    </p>

    <p style="margin-top:1.5rem;">
      <a href="index.php" class="btn primary-btn">Go back to portfolio</a>
    </p>
  </div>
</section>

<?php include "includes/footer.php"; ?>
