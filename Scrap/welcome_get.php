

<?php
include('./db_connection.php');


        
        /*
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $discription = mysqli_real_escape_string($conn, $_POST['discription']);
            */
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $discription = $_POST['discription'];

        $sql = "INSERT INTO form (name, email, subject, discription) VALUES ('$name', '$email', '$subject', '$discription')";
        
        if (mysqli_query($conn, $sql)) {
            # code...
            echo 'Record Saved';
        }
        else {
            # code...
            echo 'query error' . mysqli_error($conn);
        }
        $conn->close();
   
        
       /*
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        */
        
?>
