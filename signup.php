<!DOCTYPE html>
<html>
<head>
<title>signup form</title>
<style>
body {
  font-family: sans-serif;
  background-color: #f4f4f4;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.container {
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  width: 350px;
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

.error {
  color: red;
  margin-top: 5px;
}
.has_account {
  text-align: center;
  margin-top: 20px;
}

.has_account a {
  color: #4CAF50;
  text-decoration: none;
}

.has_account a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
  <h1>Sign Up</h1>
  <form name="signupForm" method="POST" action="process.php" onsubmit="return validateForm()">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="text" id="name" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit" name="submit" value="submit">Sign Up</button>
    <p class="has_account">
      Already have an account? <a href="login.html">Login</a>
    </p>
  </form>
</div>
<script>
    function handleSignup(event) {
    event.preventDefault(); // Prevent actual form submission

    // Get form values
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // (Optional) Client-side validation here

    // Store user data in local storage (NOT SECURE)
    localStorage.setItem('user', JSON.stringify({ name, email, password }));

    // Redirect to the landing page or update the current page
    window.location.href = 'index.html'; // Or use DOM manipulation to update content
}
</script>
</body>
</html