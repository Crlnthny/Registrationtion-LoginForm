<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Form</title>

    <style>

    body {
      font-family: Arial, sans-serif;
      background-color: #b1b1b1;
      margin: 0;
      padding: 10px
    }

    .nav{
      margin: 10px auto;
      text-align: center;
    }

    .nav a{
      font-family: verdana;
      font-weight: bold;
      text-decoration: none;
      font-size: 25px;
      color: black;
    }

    .nav a:hover{
      color: blue;
    }

    h1 {
      text-align: center;
      font-family: Georgia;
      font-weight: bold;
    }

    form {
      max-width: 800px;
      margin: 0 auto;
      background-color: whitesmoke;
      padding: 45px;
      border-radius: 8px;
      box-shadow: 0 2px 5px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    input[type="tel"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 2px solid #7b7b7b;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
      font-size: 16px;
      font-weight: bold;
    }

    select {
      height: 40px;
    }

    textarea {
      height: 122px;
    }

    button[type="submit"] {
      background-color: #438643;
      color: #ffffff;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    button[type="reset"] {
      background-color: #434a44;
      color: #ffffff;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    button[type="submit"]:hover {
      background-color: blue;
    }

    button[type="reset"]:hover {
      background-color: red;
    }

    </style>

</head>
<body>

    <div class="nav">

    <a href="index.php"> Add Profile</a> &nbsp; | &nbsp;
    <a href="records.php"> View Profile </a>

    </div>

    <form action="process.php" method="POST">

        <div>
            <h1>User Profile</h1>

            <label>Name: </label>
            <input type="text" name="nm" required>

            <label>Email: </label>
            <input type="email" name="email" required>

            <label>Age: </label>
            <input type="number" name="age" required>

            <label>Gender: </label>
            <select type="gender" name="gen" required>
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
                <option value="other">OTHER</option>
            </select>

            <label>Address: </label>
            <input type="text" name="addre" required>
        </div>

        <div>
            <label>Phone: </label>
            <input type="tel" name="pn" required>

            <label>Occupation: </label>
            <input type="text" name="oc" required>

            <label>Status: </label>
            <input type="text" name="st" required>

            <label>Interest: </label>
            <input type="text" name="inte" required>

            <label>Motto, Quotes or Sayings: </label>
            <textarea type="email" name="motto" required></textarea>

        </div>

        <button type="submit" name="save_button" value="REGISTER">SAVE</button>
        <button type="reset" value="CLEAR">CLEAR</button>

    </form>
    
</body>
</html>