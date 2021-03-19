<!DOCTYPE html>
<html>

<head>
  <title>Login/Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>-->
  <link rel="stylesheet" type="text/css "href="C:\xampp\htdocs\teamCtask2\RegisterLogin\login.css" />
</head>

<body>
  <div id="topnav">
      <div class="logo" style="flex: 1">
       <img src="RegisterLogin\isampo.png" alt="logo" />
      </div>

      <div id="links">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="index.php">Deposit</a></li>
          <li><a href="#">Account</a></li>
        </ul>
      </div>

      <div class="menu" onclick="openMenu()">
        <img src="https://img.icons8.com/ios-filled/50/999999/menu--v1.png" />
      </div>
  </div>

  <nav>
    <h5 id="navtext">You need to be logged in to view your balance</h5>
  </nav>

  <main>
    <div class="main-body">
      <div class="Register-box">
        <div class="register">
          <p>Don't have an account?</p>
          <h1>Register:</h1>
        </div>
      <form method="post" action="login.php">

        <label for="email">Full name:</label>
        <input type="text" name="full_name" id="full_name" required />

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required />

        <label for="phone">Phone number:</label>
        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" required /><br/>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required /><br />

        <label for="password">Confirm password:</label>
        <input type="password" name="password" id="password2" required />
      </form>

        <div>
            <input type="button" class="buttons" value="Register" />
        </div>
      </div>

      <div class="login-box">
        <div class="login">
          <p>Already have an account?</p>
          <h1>Log In:</h1>
        </div>
          <form method="post" action="login.php">

            <label for="email">Username:</label>
            <input type="text" name="username" id="username" required />

            <label for="password">password:</label>
            <input type="password" name="password" id="password" required />

            <input type="button" class="buttons" value="Log In" />
          </form>
        </div>
    </div>
</main>
    <br/>

    <div class="footer">
      <h6>Copyright: 2019-2021 iSampo.com. All Rights Reserved</h6>
    </div>

    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
  </body>
  </html>
