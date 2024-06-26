<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $passsword = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $confirm_password = $_POST['confirm_password'];
    $dob = $_POST['dob'];
    $university = $_POST['university'];
    $semester = $_POST['semester'];
    $gender = $_POST['gender'];
    $terms = $_POST['terms'];

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

    $sql = "INSERT INTO Users (firstname, surname, email, passsword, dob, university, semester, gender, terms)
    VALUES ('$firstname', '$surname', '$email', '$passsword', '$dob', '$university', '$semester', '$gender', '$terms')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup Page</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="design.css">
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
  <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
        <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center"
          style="background-image: url('images/Register-Background.png');">
          <h1 class="text-white text-3xl mb-3">Welcome</h1>
          <div>
            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam
              varius rutrum purus maecenas ac <a href="#" class="text-purple-500 font-semibold">Learn more</a></p>
          </div>
        </div>
        <div class="w-full lg:w-1/2 py-16 px-12">
          <h2 class="text-3xl mb-4">Register</h2>
          <p class="mb-4">
            Create your account. It’s free and only take a minute
          </p>
          <form action="" method="post">
            <div class="grid grid-cols-2 gap-5">
              <input type="text" name="firstname" placeholder="Firstname" class="border border-gray-400 py-1 px-2">
              <input type="text" name="surname" placeholder="Surname" class="border border-gray-400 py-1 px-2">
            </div>
            <div class="mt-5">
              <input type="text" name="email" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
              <input type="password" name="passsword" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
              <input type="password" name="confirm_password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class=" w-full mt-5">
              <label class="label">
                <span class="label-text">Select your date of birth</span>
              </label>
              <input type="date" name="dob" class="input input-bordered" />
            </div>
            <div class="mt-5">
              <input type="text" name="university" placeholder="Enter University" class="border border-gray-400 py-1 px-2 w-full">
            </div>
            <div class="mt-5">
              <select name="semester" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select Semester</option>
                <option>Spring</option>
                <option>Summer</option>
                <option>Fall</option>
              </select>
            </div>
            <div class="mt-5">
              <select name="gender" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>

            <div class="mt-5">
              <input type="checkbox" name="terms" class="border border-gray-400">
              <span>
                I accept the <a href="#" class="text-purple-500 font-semibold">Terms of Use</a> & <a href="#"
                  class="text-purple-500 font-semibold">Privacy Policy</a>
              </span>
            </div>
            <div class="mt-5">
              <button class="w-full bg-purple-500 py-3 text-center text-white">Register Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
?>
  <footer class="footer p-10 bg-black text-base-content footer-color">
    <aside class="text-white">
      <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
        clip-rule="evenodd" class="fill-current">
        <path
          d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
        </path>
      </svg>
      <p>ACME Industries Ltd.<br>Providing reliable tech since 1992</p>
    </aside>
    <nav class="text-white">
      <h6 class="footer-title">Services</h6>
      <a class="link link-hover">Branding</a>
      <a class="link link-hover">Design</a>
      <a class="link link-hover">Marketing</a>
      <a class="link link-hover">Advertisement</a>
    </nav>
    <nav class="text-white">
      <h6 class="footer-title">Company</h6>
      <a class="link link-hover">About us</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Jobs</a>
      <a class="link link-hover">Press kit</a>
    </nav>
    <nav class="text-white">
      <h6 class="footer-title">Legal</h6>
      <a class="link link-hover">Terms of use</a>
      <a class="link link-hover">Privacy policy</a>
      <a class="link link-hover">Cookie policy</a>
    </nav>



  </footer>
  <footer class="footer footer-center p-4 bg-black text-base-content">
    <aside class="text-white">
      <p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
    </aside>
  </footer>

</body>

</html>