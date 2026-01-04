<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation Example</title>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p>* required field</p>

<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name - required
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required";
    }

    // Email - required and valid format
    if (empty($_POST["email"])) {
        $errors['email'] = "E-mail is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format";
    }

    // Website - optional, but if provided must be valid URL
    if (!empty($_POST["website"]) && !filter_var($_POST["website"], FILTER_VALIDATE_URL)) {
        $errors['website'] = "Invalid URL";
    }

    // Gender - required
    if (empty($_POST["gender"])) {
        $errors['gender'] = "Gender is required";
    }

    // If no errors, show success
    if (empty($errors)) {
        echo '<p><strong>Form submitted successfully!</strong></p>';
        echo '<p><strong>Name:</strong> ' . htmlspecialchars($_POST["name"]) . '<br>';
        echo '<strong>E-mail:</strong> ' . htmlspecialchars($_POST["email"]) . '<br>';
        if (!empty($_POST["website"])) {
            echo '<strong>Website:</strong> ' . htmlspecialchars($_POST["website"]) . '<br>';
        }
        if (!empty($_POST["comment"])) {
            echo '<strong>Comment:</strong><br>' . nl2br(htmlspecialchars($_POST["comment"])) . '<br>';
        }
        echo '<strong>Gender:</strong> ' . htmlspecialchars($_POST["gender"]) . '</p>';
    }
}
?>

<form method="post" action="">
    <label>Name: *</label><br>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>
    <?php if (!empty($errors['name'])) echo '<small style="color:red;">' . $errors['name'] . '</small><br>'; ?><br>

    <label>E-mail: *</label><br>
    <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"><br>
    <?php if (!empty($errors['email'])) echo '<small style="color:red;">' . $errors['email'] . '</small><br>'; ?><br>

    <label>Website:</label><br>
    <input type="text" name="website" value="<?php echo isset($_POST['website']) ? htmlspecialchars($_POST['website']) : ''; ?>"><br>
    <?php if (!empty($errors['website'])) echo '<small style="color:red;">' . $errors['website'] . '</small><br>'; ?><br>

    <label>Comment:</label><br>
    <textarea name="comment" rows="5" cols="50"><?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : ''; ?></textarea><br><br>

    <label>Gender: *</label><br>
    <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>> Female
    <input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?>> Male
    <input type="radio" name="gender" value="other" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'other') ? 'checked' : ''; ?>> Other<br>
    <?php if (!empty($errors['gender'])) echo '<small style="color:red;">' . $errors['gender'] . '</small><br>'; ?><br>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>