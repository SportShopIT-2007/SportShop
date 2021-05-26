
<!--login--->
<?php
session_start();
if (isset($_SESSION['result'])){
    echo "<script>alert('Registration completed successfully')</script>";
    unset($_SESSION['result']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/css/register.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <title>Login</title>
</head>
<body>
<div id='container'>

    <div id='rectangle1' class='grid'>
        <svg>
            <rect/>
        </svg></div>

    <div id='rectangle2' class='grid'>
        <svg >
            <rect/>
        </svg></div>

    <div id='rectangle3' class='grid'>
        <svg >
            <rect/>
        </svg></div>




    <div id='SingUp'>
        <button onclick="document.getElementById('id01').style.display='block'">Register</button>
    </div>

    <div id='SingIn'>
        <p>Sign In</p>
    </div>

    <div id='SingDis'>
        <p> Sign in to continue to our application</p>
    </div>

    <form method="POST" action="login.php">
    <div name="emailf">
        <section id='emailName'>
            <p>Email</p>
        </section>
        <label for="emaile"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="userEmail" id="email" required>
    </div>

    <div name='password'><section id='passwordName'>
            <p>Password</p>
        </section>
        <section id='password'>
            <input type="password" placeholder="Enter Password" name="userPassword" id="psw" required>
        </section></div>

        <?php
        if(isset($_SESSION['error'])){
            echo '<p class="error_msg">'. $_SESSION['error'] .'</p>';
            unset($_SESSION['error']);
        }
        ?>

    <div name='forgotPassword'>
        <section id='forgotP'>
            <nav class="nav">
                <a class="nav_link" href="ForP">Forgot Password?</a>
            </nav></section>
    </div>

    <div class="modal-bg" name='ForP'>
        <div class="modal">
            <h2> Retrate your Password</h2>
            <p>Write your email to ret</p>
            <label for='email'><b>Write your email</b></label>
            <input type='text' placeholder="Enter Email" name="email" reqired>
        </div>
    </div>




    <div id='SingINN'>
        <button type="submit" class="registerbtn">Sign In</button>
    </div>
    </form>


    <div id='logo'></div>
    <div id='picture'></div>
    <div id='Bpicture'></div>
</div>


<!-- MODAL -->

<!-- Button to open the modal -->


<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
    <form class="modal-content" method="POST" action="SignUp.php">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="registerName" required>

            <label for="surname"><b>Surname</b></label>
            <input type="text" placeholder="Enter Surname" name="registerSurname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="example@mail.ru" name="registerEmail" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password (minimum 8 character)" name="registerPassword" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password (minimum 8 character)" name="repeatPassword" required>

            <label for="phone">Enter your phone number:</label>

            <input type="tel" id="phone" name="registerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                   required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                <button type="submit" class="signup">Register</button>
                <?php
                    if(isset($_SESSION['message'])){
                        echo '<p class="message">'. $_SESSION['message'] .'</p>';
                        unset($_SESSION['message']);
                    }
                ?>
            </div>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


</script>

</body>
</html>
<!-- Forgot Password -->






