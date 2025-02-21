<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client-Side Validation with RegExp</title>
  <style>
    .error { color: red; }
  </style>
</head>
<body>
  <h2>Sign Up</h2>
  <form onsubmit="return validateForm()">
    <!-- Email Field -->
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Enter your email">
    <span id="emailError" class="error"></span>
    <br><br>

    <!-- Password Field -->
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password">
    <span id="passwordError" class="error"></span>
    <br><br>

    <!-- Submit Button -->
    <input type="submit" value="Submit">
  </form>

  <script>
    function validateForm() {
      // Email regex pattern
      var patt = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
      var email = document.getElementById('email').value; 

      // Password regex pattern
      var patt1 = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; 
      var password = document.getElementById('password').value; 

      // Clear previous error messages
      document.getElementById('emailError').textContent = '';
      document.getElementById('passwordError').textContent = '';

      // Validate Email
      if (!patt.test(email)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address.';
        return false; // Prevent form submission
      }

      // Validate Password
      if (!patt1.test(password)) {
        document.getElementById('passwordError').textContent =
          'Password must be at least 8 characters long and include an uppercase letter, a lowercase letter, a number, and a special character.';
        return false; // Prevent form submission
      }

      // If all validations pass
      alert('Form submitted successfully!');
      return true; // Allow form submission
    }
  </script>
</body>
</html>