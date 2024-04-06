<?php
    include "conn.php";

    $ref_id =  $_GET['id'];

    $getdata = mysqli_query($conn, "SELECT * FROM users 
    WHERE id='$ref_id'");

    while($d=mysqli_fetch_object($getdata)){

        $name = $d -> nm;
        $email = $d -> email;
        $age = $d -> age;
        $gender = $d -> gen;
        $address = $d -> addre;
        $phone = $d -> pn;
        $occu = $d -> oc;
        $status = $d -> st;
        $interest = $d -> inte;
        $motto = $d -> motto;

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <style>

    body {
      font-family: Arial, sans-serif;
      background-color: #b1b1b1;
      overflow: hidden;
      margin: 0;
      padding: 10px
      
    }

    h1 {
      text-align: center;
      font-family: Georgia;
      font-weight: bold;
      color: whitesmoke;
    }

    form {
      max-width: 800px;
      margin: 0 auto;
      background-color: black;
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
      color: whitesmoke;
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

    </style>

</head>
<body>

    <form action="process.php?id=<?php echo $ref_id;?>" method="POST">

    <div>
            <h1>UPDATE RECORDS</h1>

            <label>Name: </label>
            <input type="text" name="update_nm" value="<?php echo $name; ?>" required>

            <label>Email: </label>
            <input type="email" name="update_email" value="<?php echo $email; ?>" required>

            <label>Age: </label>
            <input type="number" name="update_age" value="<?php echo $age; ?>" required>

            <label>Gender: </label>
            <select type="gender" name="update_gen" value="<?php echo $gender; ?>" required>
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
                <option value="other">OTHER</option>
            </select>

            <label>Address: </label>
            <input type="text" name="update_addre" value="<?php echo $address; ?>" required>
        </div>

        <div>
            <label>Phone: </label>
            <input type="tel" name="update_pn" value="<?php echo $phone; ?>" required>

            <label>Occupation: </label>
            <input type="text" name="update_oc" value="<?php echo $occu; ?>" required>

            <label>Status: </label>
            <input type="text" name="update_st" value="<?php echo $status; ?>" required>

            <label>Interest: </label>
            <input type="text" name="update_inte" value="<?php echo $interest; ?>" required>

            <label>Motto, Quotes or Sayings: </label>
            <textarea type="email" name="update_motto" value="<?php echo $motto; ?>" required></textarea>

        </div>

        <button type="submit" name="update_records" value="UPDATE">UPDATE</button>

    </form>
    
</body>
</html>
