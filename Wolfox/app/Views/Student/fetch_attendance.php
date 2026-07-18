<?php
if (isset($_POST['month']) && isset($_POST['start_date'])) {
    $month = intval($_POST['month']); // Selected month number
    $start_date = $_POST['start_date']; // Joining date (YYYY-MM-DD format)
    
    // Convert to DateTime object
    $start_date_obj = new DateTime($start_date);
    
    // Calculate the correct starting date for the selected month
    if ($month > 1) {
        $start_date_obj->modify("+" . (($month - 1) * 30) . " days");
    }

    echo "<h3>Attendance for Month $month</h3>";
    echo "<form method='POST' action='save_attendance.php'>";
    echo "<input type='hidden' name='month' value='$month'>";

    for ($i = 0; $i < 30; $i++) {
        $date_obj = clone $start_date_obj;
        $date_obj->modify("+$i days");
        $formatted_date = $date_obj->format("Y-m-d");

        echo "<div>
                <input type='text' value='$formatted_date' class='form-control' readonly>
                <select name='attendance[$formatted_date]' class='form-control'>
                    <option value=''>Select Attendance Status</option>
                    <option value='P'>Present</option>
                    <option value='A'>Absent</option>
                    <option value='CH'>Company Holiday</option>
                </select>
              </div>";
    }

    echo "<button type='submit'>Save Attendance</button>";
    echo "</form>";
}
?>
