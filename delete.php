<?php
    include "conn.php";
     $ref_id=$_GET['id'];

     $delete = mysqli_query($conn, "DELETE FROM users WHERE id='$ref_id'");

     if($delete == true){
        ?>
           <script>
            alert("1 Data is Deleted!");
            window.location.href="records.php";
           </script>
           <?php
    
    }else{
        ?>
           <script>
            alert("Error in Deleting!");
            window.location.href="records.php";
           </script>
           <?php
    }
?>