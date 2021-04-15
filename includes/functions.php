<?php
include_once "includes/connection.php";

$errors = [];

if (isset($_POST['submit'])) {
    if (($_POST["name"] && $_POST["email"] && $_POST["phone"]) != "" && isset($_POST['feedback1']) && isset($_POST['feedback2']) && isset($_POST['feedback3']) && isset($_POST['feedback4']) && isset($_POST['feedback5']) && isset($_POST['feedback6'])) {
        $name = $conn->real_escape_string($_POST["name"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $phone = $conn->real_escape_string($_POST["phone"]);
        $comment = $conn->real_escape_string($_POST["comment"]);
        $feedback1 = $conn->real_escape_string($_POST["feedback1"]);
        $feedback2 = $conn->real_escape_string($_POST["feedback2"]);
        $feedback3 = $conn->real_escape_string($_POST["feedback3"]);
        $feedback4 = $conn->real_escape_string($_POST["feedback4"]);
        $feedback5 = $conn->real_escape_string($_POST["feedback5"]);
        $feedback6 = $conn->real_escape_string($_POST["feedback6"]);

        if (!preg_match("/^[A-Za-z0-9._%+-]+@vit.edu$/ix", $email)) {
            $error = "Enter a valid VIT.EDU email!";
            array_push($errors, $error);
        }
        if (!preg_match("/^[6-9]\d{9}$/", $phone)) {
            $error = "Enter a valid mobile number!";
            array_push($errors, $error);
        }
        if (empty($errors)) {
            $result = $conn->query("SELECT * FROM user_feedback WHERE user_email = '$email'");
            if ($result->num_rows > 0) {
                $error = "You have already submitted feedback using $email!";
                array_push($errors, $error);
            } else {
                $sql = "INSERT INTO user_feedback (user_name, user_email, user_mobile, user_feedback1, user_feedback2, user_feedback3, user_feedback4, user_feedback5, user_feedback6, user_comments) VALUES ('$name', '$email', '$phone', '$feedback1', '$feedback2', '$feedback3', '$feedback4', '$feedback5', '$feedback6', '$comment')";

                if ($conn->query($sql) === true) {
                    echo "<script type='text/javascript'>alert('Feedback submitted successfully!');</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
        }
    } else {
        $error = "Fields cannot be empty!";
        array_push($errors, $error);
    }
}
