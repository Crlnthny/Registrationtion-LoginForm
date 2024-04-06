<?php

    include "conn.php";

    //This code is for Insert Profile
    if(isset($_POST['save_button'])) {

        $nm = $_POST["nm"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $gen = $_POST["gen"];
        $add = $_POST["addre"];
        $pn = $_POST["pn"];
        $oc = $_POST["oc"];
        $st = $_POST["st"];
        $inte = $_POST["inte"];
        $motto = $_POST["motto"];

        $insert=mysqli_query($conn, "INSERT INTO users
        VALUES('0','$nm','$email','$age','$gen','$add','$pn','$oc','$st','$inte','$motto')");

        if($insert == TRUE) {
            ?>
           <script>
            alert("Your Profile has been Saved!");
            window.location.href="index.php";
           </script>
           <?php
        }else{
            ?>
           <script>
            alert("Error!");
            window.location.href="index.php";
           </script>
           <?php
        }

    }


    // This code is for UPDATE RECORDS

    if(isset($_POST['update_records'])){
        $ref_id = $_GET['id'];

        $a = $_POST['update_nm'];
        $b = $_POST['update_email'];
        $c = $_POST['update_age'];
        $d = $_POST['update_gen'];
        $e = $_POST['update_addre'];
        $f = $_POST['update_pn'];
        $g = $_POST['update_oc'];
        $h = $_POST['update_st'];
        $i= $_POST['update_inte'];
        $j = $_POST['update_motto'];

        $update_records = mysqli_query ($conn, "UPDATE users 
        SET nm='$a', email='$b', age='$c', gen='$d', addre='$e', pn='$f',
        oc='$g', st='$h', inte='$i', motto='$j' WHERE id='$ref_id'"); 

        if($update_records == TRUE) {
            ?>
        <script>
            alert("Data is UPDATED!");
            window.location.href="records.php";
        </script>
        <?php
        }else{
            ?>
        <script>
            alert("Error!");
            window.location.href="records.php";
        </script>
        <?php
        }

    }


?>