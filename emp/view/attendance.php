<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management System</title>
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>

<body>
<?php include('./header.php') 
    ?>
    <h2 align="center">Attendance Management System</h2>

  
    <div class="" style="text-align: center;" id="todayDate">Today's Date: <?php echo date("F j, Y"); ?></div>

    <form id="attendanceForm" method="post">
        <?php
        include "../model/db_connect.php";

        
        $attendanceDate = date('Y-m-d');

     
        $sql = "SELECT id, fullName FROM employee";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
              
                $employeeId = $row['id'];
                $sql = "SELECT * FROM attendance WHERE employee_id = '$employeeId' AND attendance_date = '$attendanceDate'";
                $attendanceResult = mysqli_query($conn, $sql);

                $isChecked = (mysqli_num_rows($attendanceResult) > 0) ? 'checked' : '';

                echo '<div class="employee">';
                echo '<label for="attendance-' . $row['id'] . '">Name - ' . $row['fullName'] . ':</label>';
                echo '<input type="checkbox" id="attendance-' . $row['id'] . '" name="attendance[' . $row['id'] . ']" value="1" ' . $isChecked . '>';
                echo '</div>';
            }
        } else {
            echo "No employees found";
        }
        ?>
        <button type="submit" name="submit">Submit Attendance</button>
    </form>

    <script>
        
        document.getElementById("attendanceForm").addEventListener("submit", function(event) {
            event.preventDefault(); 
            var formData = new FormData(this); 
            var xhr = new XMLHttpRequest(); 
            xhr.open("POST", "../controller/Attendancecontroller.php", true); 
            xhr.onload = function() {
                if (xhr.status == 200) {
                    alert("Attendance submitted successfully");
                } else {
                    alert("Failed to submit attendance");
                }
            };
            xhr.send(formData); 
        });
    </script>

</body>

</html>