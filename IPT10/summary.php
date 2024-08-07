<?php
if (empty($_POST['name']) || empty($_POST['email'])) {
    header('Location: register.php');
    exit;
}

$name = htmlspecialchars($_POST['name']);
$birthday = htmlspecialchars($_POST['birthday']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Summary</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"
</head>
<body>
    <div class="container">
        <img src="auflogo.png" alt="AUF Logo" class="logo">
        <h2>Registration Summary</h2>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td class="<?php echo ($sex == 'Male') ? 'male' : 'female'; ?>"><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?php echo $birthday; ?></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><?php echo $sex; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $address; ?></td>
                </tr>
                <tr>
                    <td>College Department</td>
                    <td><?php echo $department; ?></td>
                </tr>
                <tr>
                    <td>Program</td>
                    <td><?php echo $program; ?></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><?php echo $mobile; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="form-actions">
            <button type="back" onclick="window.location.href='register.php';">Back</button>
        </div>
    </div>
</body>
</html>
