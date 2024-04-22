<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["passsword"]; // Corrected variable name

  $sql = "SELECT * FROM Users WHERE email = '$email'";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($password == $row["passsword"]) { // Corrected column name
        echo "Login successful";
        header('Location: x.php');
        exit;
      } else {
        echo "Invalid password";
      }
    }
  } else {
    echo "No user found with that email address";
  }
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="design.css">

    <style>
        @font-face {
            font-family: waltograph;
            src: url(font_disney/waltographUI.ttf);
        }
        .disney{
             font-family: "waltograph",sans-serif;
             font-style: normal;
        }
    </style>
</head>

<body>
    <header class="text-white deep-blue pt-5 pb-10">
        <div class="navbar w-3/4 mx-auto">
          <div class="navbar-start">
    
            <img src="edu.png" alt="" srcset="" class="mr-3">
            <a class="text-[3rem] text-[#D9ECFF] font-bold">Advanced<br> Learning System</a>
          </div>
          <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
              <li><a href="index.html">Home</a></li>
    
    
              <li><a>About</a></li>
              <li><a>Course</a></li>
              <li><a>Blog</a></li>
              <li><a>Contact </a></li>
              <li><a>Book</a></li>
            </ul>
          </div>
          <div class="navbar-end space-x-8">
            <a href="loginPage.html" class="btn login-btn rounded-3xl bg-transparent text-white">Login</a>
            <a href="allCourse.html" class="btn login-btn bg-transparent rounded-3xl bg-[#7F56D9] text-white">Get
              Started</a>
          </div>
        </div>
      </header>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
            <!-- form -->
            <div class="md:w-1/2 px-8 md:px-16">
                <h2 class="font-bold text-2xl text-[#002D74]">Login</h2>
                <p class="text-xs mt-4 text-[#002D74]">If you are already a member, easily log in</p>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="flex flex-col gap-4">
                    <input class="p-2 mt-8 rounded-xl border" type="email" name="email" placeholder="Email">
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="passsword"
                            placeholder="Password">
                        <img class="absolute right-3 top-1/2 transform -translate-y-1/2"
                            src="images/show password icon.svg" alt="Show password">
                    </div>
                    <button class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">Login</button>
                </form>

                <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center text-sm">OR</p>
                    <hr class="border-gray-400">
                </div>

                <button
                    class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
                    <img src="images/google icon.svg" alt="" srcset="" class="mr-2">
                    Login with Google
                </button>

                <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74]">
                    <a href="#">Forgot your password?</a>
                </div>

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                    <p>Don't have an account?</p>
                    <button class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300" id="register"
                        onclick="window.location.href='x.php'">Register</button>
                </div>
            </div>

            <!-- image -->
            <div class="md:block hidden w-1/2">
                <h1 class="disney text-center mb-2 text-2xl">Advanced Learning System</h1>
                <img class="rounded-2xl"
                    src="images/Get-to-Know-About-Online-Training-Software-Learning-Management-System.webp">
            </div>
        </div>
    </section>
    <footer class="footer p-10 bg-base-200 text-base-content">
        <nav>
            <h6 class="footer-title">Services</h6>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-title">Company</h6>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
            <h6 class="footer-title">Legal</h6>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </nav>
        <form>
            <h6 class="footer-title">Newsletter</h6>
            <fieldset class="form-control w-80">
                <label class="label">
                    <span class="label-text">Enter your email address</span>
                </label>
                <div class="join">
                    <input type="text" placeholder="username@site.com" class="input input-bordered join-item" />
                    <button class="btn btn-primary join-item">Subscribe</button>
                </div>
            </fieldset>
        </form>
    </footer>
    <script src="login.js"></script>
</body>

</html>
