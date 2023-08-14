"""
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $traveler = $_POST["traveler"];
    $travel_date = $_POST["travel_date"];
    // ... (gather all form data similarly)

    // Construct email message
    $message = "Traveler: " . $traveler . "\\n";
    $message .= "Date: " . $travel_date . "\\n";
    // ... (construct the full message using all form data)

    // Send email
    $to = "star1150@colostate.edu"; // Replace with your email
    $subject = "New Travel Request Submission";
    $headers = "From:star1150@colostate.edu"; // Replace with a suitable "From" address

    mail($to, $subject, $message, $headers);
}
?>
"""