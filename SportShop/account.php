<?php
session_start();
if ($_SESSION['login']=='Error'){
    echo "<script>alert('Error')</script>";
    header('Location: SportShop.php');
}
elseif ($_SESSION['login']=='LogOut'){
    header('Location: SportShop.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/account.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/337b2ed79d.js" crossorigin="anonymous"></script>
    <title>My account</title>
</head>
<body>
<div class="header">
    <a href="main/index.html"><div class="logo"></div></a>
    <div class="lipa"></div>
    <label class="searchbox">
        <input type="text" placeholder="Search" id="search" class="inputS">
    </label>
    <div class="nav">
        <a href="#" class="cat1" id="navcat">brand</a>
        <a href="#" class="cat1" id="navcat">register</a>
        <a href="registrar/register_pag.html" class="cat1" id="navcat">login</a>
        <div class="basket" id="navcat"></div>
        <div class="acc" id="navcat"></div>
    </div>
</div>
<div class="main">
    <div class="back" id="val1"></div>
    <div class="bio">
        <div class="Pin">
            <div class="background"></div>
            <div id="personal">
            <p>Personal Information</p>
    <hr class="line">
                <a href="#"><div id="bas" class="cat">Basket</div></a>
                <a href="#"><div id="favorites" class="cat">Favorites</div></a>
                <a href="#"><div id="pass" class="cat" onclick="document.getElementById('id02').style.display='block'">Change password</div></a>
                <a href="logOut.php"><div id="LogOut" class="cat" >LogOut</div></a>

        </div>
        </div>
        <div class="form">
            <form class="info">
            <div class="data">
                <div class="cabinet-lbl">Name: </div>
                <div class="cabinet-val"><input  id="in" disabled value="<?=$_SESSION['user']['name']?>"></div>
            </div>
            <div class="data">
                <div class="cabinet-lbl">Surname: </div>
                <div class="cabinet-val"><input height="100%" width="100%"  disabled value="<?=$_SESSION['user']['surname'] ?>"></div>
            </div>
            <div class="data">
                <div class="cabinet-lbl">Phone: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['phone']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">E-mail: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['email']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">Address: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['address']?>"></div></div>
            <div class="data">
                <div class="cabinet-lbl">Payment card: </div>
                <div class="cabinet-val"><input  disabled value="<?=$_SESSION['user']['payment_card']?>"></div></div>
            <input type="submit" value="To change the data" onclick="document.getElementById('id01').style.display='block'">
            </form>
        </div>
    </div>
    <div class="back" id="val2"></div>
    <footer class="footer">
        <div class="container">
            <div class="footer_inner">
                <div class="footer_col1">
                    <div class="header_logo">
                        <img src="asset/css/img/logo_White.png">
                    </div>
                    <div class="footer_header">
                        We are in social media
                        <a href=# target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href=# target="_blank">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </div>
                </div>
                <div class="footer_col2">
                    <div class="footer_content">About us<br>
                        Authors <br> How to use website <br> FAQ </div>
                </div>
            </div>
            <div class="copyright">
                © 2021 Sports Shop AITU project
            </div>
        </div>
    </footer>
</div>

<!---Modal-->

<div id="id01" class="modal">
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <div class="krest"></div>
            <h1>To change the data</h1>
            <hr>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Name:</b></label>
                <input type="text" name="name" required class="js-val"></div>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Surname:</b></label>
                <input type="text" name="surname" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Email:</b></label>
                <input type="text" name="email" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Address:</b></label>
                <input type="text" name="address" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>Payment card:</b></label>
                <input type="text" name="payment-card" required class="js-val"></div>

            <div class="data">
                <label for="phone" class="cabinet-lbl">Phone number:</label>

                <input type="tel" id="phone" name="phone"
                       required class="js-val"></div>
            <div class="clearfix">
                <button type="submit" class="save">Save</button>
            </div>
        </div>
    </form>
</div>



<div id="id02" class="modal">
    <form class="password-content" action="/action_page.php">
        <div class="container">
            <div class="krest"></div>
            <h1>Change the password</h1>
            <hr>
            <div class="data">
                <label for="name" class="cabinet-lbl"><b>Old password</b></label>
                <input type="text" name="name" required class="js-val"></div>

            <div class="data">
                <label for="name" class="cabinet-lbl"><b>New password</b></label>
                <input type="text" name="surname" required class="js-val"></div>

            <div class="data">
                <label for="email" class="cabinet-lbl"><b>New password again:</b></label>
                <input type="text" name="email" required class="js-val"></div>
            <div class="clearfix">
                <button type="submit" class="save" onclick="">Save</button>
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
<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>