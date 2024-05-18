<?php
include "../model/db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['attendance'])) {
    
    $attendanceData = $_POST['attendance'];

   
    $attendanceDate = date('Y-m-d');

    
    foreach ($attendanceData as $employeeId => $attendance) {
        
        $employeeId = mysqli_real_escape_string($conn, $employeeId);
        $attendance = mysqli_real_escape_string($conn, $attendance);

       
        if ($attendance === "") {
            $attendance = 0; 
        }

      
        $sql = "SELECT id FROM attendance WHERE employee_id = '$employeeId' AND attendance_date = '$attendanceDate'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            
            $sql = "UPDATE attendance SET status = '$attendance' WHERE employee_id = '$employeeId' AND attendance_date = '$attendanceDate'";
        } else {
            
            $sql = "INSERT INTO attendance (employee_id, attendance_date, status) VALUES ('$employeeId', '$attendanceDate', '$attendance')";
        }

      
        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit(); 
        }
    }

    echo "Attendance submitted successfully";
} else {
    echo "No attendance data received";
}
