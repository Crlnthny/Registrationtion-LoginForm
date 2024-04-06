<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Page</title>
    <style>
        body{
            background-color: whitesmoke;
            padding: 10px;
            margin: 0;
        }

        .nav{
            margin: 10px auto;
            text-align: center;
            margin-right: 19px;
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

        h1{
            color: black;
            font-size: 40px;
            font-family: verdana;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        table {
            color: black;
            width: 100%;
            border-collapse: collapse;
            
        }

        th, td {
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
        

        th {
            background-color: blue;
            color: whitesmoke;
            font-size: 20px;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        tr:hover {
            background-color: lightgray;
        }

        a.action {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        a.action:hover {
            background-color: green;
        }

        a.action .delete{
            color: red;
        }

        a.action.delete:hover {
            background-color: red;
        }

        @media screen and (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            .nav {
                flex-direction: column;
                align-items: center;
            }

            .nav a {
                margin: 10px 0;
            }

            h1 {
                font-size: 28px;
            }
        }

    </style>
</head>
<body>

    <div class="nav">
        <a href="index.php"> Add Profile </a> &nbsp; | &nbsp;
        <a href="records.php"> View Profile </a>
    </div>


    <h1>List of Records</h1>
    <div class="table-container">
        <table border="3px solid">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Occupation</th>
                <th>Status</th>
                <th>Interest</th>
                <th>Motto</th>
                <th>Action 1</th>
                <th>Action 2</th>
            </tr>

            <tr>
                <?php
                $getdata = mysqli_query($conn, "SELECT * FROM users");
                while($row = mysqli_fetch_array($getdata)){
                    ?>

                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nm']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['gen']?></td>
                    <td><?php echo $row['addre']?></td>
                    <td><?php echo $row['pn']?></td>
                    <td><?php echo $row['oc']?></td>
                    <td><?php echo $row['st']?></td>
                    <td><?php echo $row['inte']?></td>
                    <td><?php echo $row['motto']?></td>
                    <td><a class="action" href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                    <td><a class="action delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

            </tr>
            
            <?php
            }
            ?>

        </table>
    </div>
    
</body>
</html>