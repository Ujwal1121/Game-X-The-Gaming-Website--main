<?php
// Start session
session_start();

// Database configuration
$servername = "localhost"; // Update to your database server
$username = "root";        // Update to your database username
$password = "";            // Update to your database password
$dbname = "game";          // Update to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepare a statement with MySQLi
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email); // Bind the email parameter
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password (assuming plain-text password for simplicity; use password_hash for security)
        if ($password == $user['password']) {
            // Set session variables
            $_SESSION['name'] = $user['username'];
            $login=true;
            $_SESSION['loggedin']=true;
            // Redirect to the dashboard
            header('Location: /gg/index.php');
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No user found with this email.";
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Game-X_Login</title>
  </head>
  <body>
    <div class="MainContainer">
      <div class="app apex">
        <!-- Slider Section -->
        <div class="app__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img" src="ApexLegends.jpg" alt="Apex Legends" />
            </div>
          </div>
        </div>

        <!-- Form Section -->
        <div class="app__form-wrapper">
          <div class="app__form-container">
            <!-- Login Form -->
            <form class="form login-form show" method="post" action="">
              <div class="form__header">
                <p class="form__title" style="color: red; margin-bottom: 43px">
                  Log In
                </p>
                <p
                  class="form__subtitle"
                  style="color: red; margin: top 20px; margin-bottom: 12px"
                >
                  Welcome back To Game-X
                </p>
              </div>

              <div class="form__group">
                <div class="form__field">
                  <input
                    type="text"
                    class="form__input"
                    placeholder="Enter Email" name="email"
                  />
                </div>
                <div class="form__field">
                  <input
                    type="password"
                    class="form__input"
                    placeholder="Enter Password" name="password"
                  />
                </div>
                <!-- <a href="#" class="form__link">Forgot password?</a> -->
              </div>
              <div class="form__group">
                <button class="form__button filled" style="color: #fff" name="btn">
                  Log In
                </button>

                <!-- <button class="form__button outlined" style="color: #fff">
                  <a
                    href="C:\Users\ADMIN\Desktop\test\Gaming website SINUP\signup.html"
                    class="button"
                    >SIGN-UP</a
                  >
                </button> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
