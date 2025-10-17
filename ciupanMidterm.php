<?php

//all required variables
$success_message = null;
$firstname_value = $_POST['firstname'] ?? '';
$age_value = $_POST['age'] ?? '';
$gender_value = $_POST['gender'] ?? '';
$quote_value = $_POST['quote'] ?? '';

//check if all variables are submitted then creates a success message
if (isset($_POST['firstname'], $_POST['age'], $_POST['gender'], $_POST['quote'])) {
    $success_message = "You are " . $firstname_value . ", a " . $age_value . "-year-old " . $gender_value . ". Your motto in life is " . $quote_value;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciupan, Marc Christian A.</title>
    <style>
        /* CSS for easy readability */
        body { font-family: sans-serif; padding: 20px; background-color: #282c34; color: #abb2bf; }
        .container { max-width: 600px; margin: auto; background: #3c4046; padding: 25px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.5); }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; font-weight: bold; color: #61afef; }
        input[type="text"], input[type="number"], textarea, select { width: 100%; padding: 12px; border: 1px solid #5c6370; border-radius: 4px; box-sizing: border-box; background-color: #4b5263; color: #fff; }
        button { background-color: #98c379; color: #282c34; padding: 12px 20px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #84a96c; }
        .success { color: #98c379; margin-top: 30px; border: 1px solid #98c379; padding: 20px; background-color: #3b443a; border-radius: 4px; font-size: 1.1em; }
    </style>
</head>
<body>

<div class="container">
    <h1>User Registration</h1>
<!-- FORM THAT USES POST -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" placeholder="Enter First Name" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" placeholder="Enter Age" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">-- Select Gender --</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="quote">Motto In life:</label>
            <textarea id="quote" name="quote" rows="3" placeholder="Enter your motto in life" required></textarea>
        </div>

        <button type="submit">Submit Registration</button>
    </form>
    <!-- DISPLAYS THE MESSAGE AFTER SUBMISSION -->
    <?php
        if ($success_message): ?>
        <div class="success">
            <?= $success_message ?>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
