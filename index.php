<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .container {
    width: 450px;
    height: 500px;
    margin: 0 auto;
    margin-top: 150px;
    margin-left: 1100px;
    padding: 50px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
    background-color: rgba(0, 0, 0, .2); /* Transparent background */
    border-radius: 20px; /* Rounded corners */
}

.video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Ensure the video is behind other content */
        }
        


.form-group {
    margin-bottom: 30px;
}

/* Update form input colors */
.form-control {
    background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white */
    color: white; /* Text color */
    border-color: #b1d4ed; /* Light blue border */
}

.form-group label {
            color: white; /* Text color */
        }

/* Update form button colors */
.btn-primary {
    background-color: #4b7bec; /* Deep blue button background */
    border-color: #4b7bec; /* Deep blue button border */
    color: #ffffff; /* White text */
}

.btn-primary:hover {
    background-color: #3867d6; /* Darker deep blue on hover */
    border-color: #3867d6;
}

.alert {
    margin-bottom: 20px;
    padding: 15px;
    border-radius: 10px;
}

.alert-danger {
    color: #d63031; /* Dark red text */
    background-color: #fab1a0; /* Light red background */
    border-color: #e17055; /* Light red border */
}

.alert-success {
    color: #00b894; /* Dark green text */
    background-color: #55efc4; /* Light green background */
    border-color: #00b894; /* Light green border */
}

</style>
<video class="video-container" autoplay muted loop>
    <source src="Jonas.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>
<body>

<div class="container">
    <?php
    session_start();
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        require_once "database.php";
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            if(password_verify($password, $user["password"])) {
                $_SESSION["user"] = "yes";
                header("Location: home.php");
                exit(); // Ensure script execution stops after redirection
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
    }
    ?>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
    </form>
    <div><p style="color: white;">Not Registered yet? <a href="registration.php" style="color: white;"> Registration Here</a></p></div>
</div>

</body>
</html>
