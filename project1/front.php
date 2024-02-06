<?php
    session_start();
    if (isset($_SESSION['admin'])){
        header("Location: front.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Document</title>
</head>
    <body>
        <header class="header">
            <div class="nav-bar">
                <div class="logo"><a href="#"><img src="h.webp" alt=""></a></div>
                <ul class="links">
                    <li><a href="view.php">View Records</a></li>
                    <li><a href="https://www.roadtraffic-technology.com/">About</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <a href="pay.php" class="action_btn">Add Record</a>
                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="dropdown_menu">
                <li><a href="view.php">View Records</a></li>
                <li><a href="https://www.roadtraffic-technology.com/">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="pay.php" class="action_btn">Add Record</a></li>
            </div>
        </header>


        <section class="hero">
            <div class="hero-content">
                <h1>R-Traffic Ticketing System</h1>
                <div class="text-animate">
                    <h3>Be legendary in the road</h3>
                </div>
                <p>Road traffic, also known as "traffic," 
                    is the movement of cars, trucks, and pedestrians
                    on public roads such streets and highways. Numerous elements, 
                    such as the number of vehicles on the road, the 
                    quality of the roads, traffic laws, and the weather,
                    can affect traffic.
                </p>

                <div class="btn-box">
                    <a href="logout.php" class='btn'>Log out</a>
                </div>


            </div>
        </section>

        <script>
            const toggleBtn = document.querySelector('.toggle_btn')
            const toggleBtnIcon = document.querySelector('.toggle_btn i')
            const dropDownMenu = document.querySelector('.dropdown_menu')

            toggleBtn.onclick = function() {
                dropDownMenu.classList.toggle('open')
                const isOpen = dropDownMenu.classList.contains('open')

                toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
            }
        </script>
    </body>
</html>