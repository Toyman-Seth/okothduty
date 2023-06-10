<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reminder Creator</title>
    <link rel="stylesheet" type="text/css" href="rem.css">
</head>
<body>
<nav>
<div class="hm">
    <img src="images/noti.png" alt=""><h2>Reminders.</h2>
</div>

    <a href="reminder.php"><img src="images/home2.png" alt=""></a>

    </nav>
    <div class="container">
       
        <form id="reminderForm" action="reminder.php" method="post">
            <label for="reminderText">Reminder Text:</label>
            <input type="text" id="reminderText" name="reminderText" placeholder="Enter your reminder" required>
            <label for="reminderDateTime">Reminder Date and Time:</label>
            <input type="datetime-local" id="reminderDateTime" name="reminderDateTime" required>
            <input type="submit" value="Create Reminder">
        </form>
    </div>
    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the reminder text and date/time from the form submission
    $reminderText = $_POST["reminderText"];
    $reminderDateTime = $_POST["reminderDateTime"];

    // Validate and sanitize the input if required

    // Create a timestamp from the reminder date/time input
    $reminderTimestamp = strtotime($reminderDateTime);

    // Get the current timestamp
    $currentTimestamp = time();

    // Check if the reminder date/time is in the future
    if ($reminderTimestamp > $currentTimestamp) {
        // Calculate the delay in seconds until the reminder
        $delay = $reminderTimestamp - $currentTimestamp;

        // Schedule the reminder using a task scheduler or a job queue system

        // Here's an example using the sleep() function for demonstration purposes only
        sleep($delay);

        // Send the reminder to the user
        // You can implement the appropriate logic here based on your requirements
        sendReminder($reminderText);

        // You can also store the reminder details in a database for future reference if needed

        // Respond with a success message
        echo "Reminder scheduled successfully!";
    } else {
        // If the reminder date/time is in the past, display an error message
        echo "Reminder date/time must be in the future!";
    }
}

function sendReminder($reminderText) {
    // Implement your code here to send the reminder to the user
    // This can involve sending an email, a push notification, or any other notification method

    // Example code for sending an email using the built-in mail() function
    $to = "user@example.com";
    $subject = "Reminder";
    $message = $reminderText;
    $headers = "From: your-email@example.com";

    mail($to, $subject, $message, $headers);
}
?>

    <script src="script.js"></script>
</body>
</html>
