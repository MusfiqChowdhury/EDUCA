<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration</title>
  <link rel="icon" href="education.png" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url(images/laptop\ login.jpg);
      /* Path to your background image */
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }


    #registration-container {
      background-color: #228bb0fd;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
      width: 400px;
      /* Set the width of the form */
      height: auto;
      /* Set the height of the form */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }


    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div id="registration-container">
    <h2>Teacher Registration</h2>
    <form action="inserttwo.php" method="POST">
      <input type="text" id="name" name="name" placeholder="Name" required>
      <input type="text" id="phone" name="phone" placeholder="Phone" required>
      <input type="text" id="address" name="address" placeholder="Address" required>
      <input type="text" id="Designation" name="Designation" placeholder="Designation" required>
      <input type="email" id="email" name="email" placeholder="Email" required>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <input type="submit" value="Register">
    </form>
  </div>
</body>

</html>