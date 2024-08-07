<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUF Student Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Populate the form on page load
        const formData = JSON.parse(sessionStorage.getItem('formData')) || {};
        Object.keys(formData).forEach(key => {
            const input = document.querySelector(`[name=${key}]`);
            if (input) input.value = formData[key];
        });

        // Save form data to sessionStorage on submit
        document.getElementById('registration-form').addEventListener('submit', () => {
            const formData = new FormData(document.getElementById('registration-form'));
            const dataObject = {};
            formData.forEach((value, key) => dataObject[key] = value);
            sessionStorage.setItem('formData', JSON.stringify(dataObject));
        });

        // Clear form and sessionStorage on reset
        document.querySelector('button[type="reset"]').addEventListener('click', () => {
            sessionStorage.removeItem('formData');
        });
    });
</script>

</head>
<body>
    <div class="container">
        <img src="auflogo.png" alt="AUF Logo" class="logo">
        <h2>AUF Student Registration</h2>
        <form id="registration-form" action="summary.php" method="post">
            <div class="form-grid">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" id="birthday" name="birthday">
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <div class="radio-group">
                        <label><input type="radio" id="male" name="sex" value="Male"> Male</label>
                        <label><input type="radio" id="female" name="sex" value="Female"> Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="department">College Department</label>
                    <select id="department" name="department">
                        <option value="" disabled selected>Select a department</option>
                        <option value="CBAA">CBA</option>
                        <option value="CCJE">CCJE</option>
                        <option value="COE">COE</option>
                        <option value="CCS">CCS</option>
                        <option value="CON">CON</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="program">Program</label>
                    <input type="text" id="program" name="program">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" id="mobile" name="mobile">
                </div>
                <div class="form-group form-actions">
                    <button type="reset" onclick="clearForm()">Reset</button>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
