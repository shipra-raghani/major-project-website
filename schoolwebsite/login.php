<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register and Login Page</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="container" id="signUp" style="display: none">
      <h1 class="form-title">REGISTER AND LOGIN FORM</h1>
      <form method="post" action="homepage.php">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <label for="fname">First Name : </label>
          <input
            type="text"
            id="fname"
            name="fname"
            placeholder="First Name"
            required
          />
        </div>
        <div class="input-group">
          <br />

          <i class="fas fa-user"></i>
          <label for="lname">Last Name : </label>
          <input
            type="text"
            id="lname"
            name="lname"
            placeholder="Last Name"
            required
          />
          <br />
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <label for="email">E-mail : </label>
          <input type="email" id="email" name="email" placeholder="E-mail" />
          <br />
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <label for="password">Password : </label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
          />
          <br />
        </div>

        <div class="input-group">
          <input type="submit" class="btn" value="Sign Up" name="signup" />
          <br />
        </div>
      </form>

      <p class="or">------------or------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already have an Account?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
      <h1 class="form-title">SIGN IN</h1>
      <form name="form" method="post" action="register.php">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <label for="email">E-mail : </label>
          <input type="email" id="email" name="email" placeholder="E-mail" />
          <br />
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <label for="password">Password : </label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Password"
          />
        </div>
        <br />
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="signin" />
        <br />
      </form>

      <p class="or">------------or------------</p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't have any Account?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
