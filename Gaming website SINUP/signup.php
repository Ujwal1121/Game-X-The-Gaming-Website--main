#<?php
#$host = 'localhost';
#$user = 'root';
#$password = '';
#$dbname = 'game';
#
#$conn = new mysqli($host, $user, $password, $dbname);
#
#if ($conn->connect_error) {
#    die("Connection failed: " . $conn->connect_error);
#}
#
#// Initialize variables for error messages
#$error = '';
#$success = '';
#
#if ($_SERVER["REQUEST_METHOD"] == "POST") {
#    $username = $_POST['username'];
#    $email = $_POST['email'];
#    $password = $_POST['password'];
#
#        // Insert user into the database
#        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', $password)";
#
#        if ($conn->query($sql) === TRUE) {
#            // Redirect to login.php
#            header("Location: index.php");
#            exit();
#        } else {
#           $error = "Error: " . $conn->error;
#        }
#}

#$conn->close();
#?>
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'game';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables for error messages
$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Input validation
    if (empty($username) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } else {
        // Use prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            // Redirect to index.php
            header("Location: \gg\Gaming website LOGIN\LOGIN.php");
            exit();
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap");
    </style>
    <title>Game-X_SignUp</title>
  </head>
  <body>
    <div class="MainContainer">
      <div class="app apex">
        <!-- Slider Section -->
        <div class="app__slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img class="img" src="Valorant.jpg" alt="Apex Legends" />
            </div>
          </div>
        </div>

        <!-- Form Section -->
        <div class="app__form-wrapper">
          <div class="app__form-container">
            <!-- Sign Form -->
            <form class="form login-form show" method="post" action="">
              <div class="form__header">
                <h1 class="form__title" style="color: rgb(146 246 251)">
                  Sign Up
                </h1>

                <h2
                  class="form__subtitle"
                  style="
                    color: rgb(146 246 251);
                    margin-bottom: 14px;
                    margin-top: 29px;
                  "
                >
                  Welcome To Game-X
                </h2>
              </div>
              <div class="form__group">
                <div class="form__field">
                  <input
                    type="text"
                    class="form__input"
                    placeholder="Enter Name" name="username"
                  />
                </div>
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
                <div class="checkboxx">
                  <input
                    class="checkbox"
                    type="checkbox"
                    checked="checked"
                    style="display: inline"
                  />
                  <p>Remember Me</p>
                </div>
              </div>
              <div class="form__group">
                <button class="form__button outlined" style="color: #f9516a">
                  Sign Up
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
