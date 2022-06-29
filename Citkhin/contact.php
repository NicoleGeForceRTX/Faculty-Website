<?php
/**
 * @var $pdo;
 */
include "./config/connect.php";
$result = $pdo ->query("SELECT * FROM `employees_contacts`");
$persons = $pdo ->query("SELECT * FROM `employees_data`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta chapset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiTKhIn Employee Contacts</title>

    <link rel="icon" href="./images/icon.ico" type="text/x-icon">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">

    <!-- GOOGLE FONTS (MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- SWIPER JS -->
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/table_pages.css">
</head>
<body>
<nav>
    <div class="container nav__container">
        <a href="index.php"><h4>CiTKhIn</h4></a>
        <ul class="nav__menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="my_group.html">My group</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
    </div>
</nav>
<! =============== END OF NAVBAR ================>


<div class="content">
    <table class="content__table">
        <div class="title__container">
            <h4>Numbers table of employee</h4>
        </div>
        <thead>
        <tr>
            <th>ID</th>
            <th>Person ID</th>
            <th>Number</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row){
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["person_id"] . "</td>";
            echo "<td>" . $row["number"] . "</td>";
            echo "<td>" . "<a href=\"./config/update_tb2.php?id=$row[id]\"> Update </a>" . "</td>";
            echo "<td>" . "<a href=\"./database/delete_data_tb2.php?id=$row[id]\"> Delete </a>" . "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <! =============== END OF TABLE_2 ================>


    <div class="title__container">
        <h4>Add new number</h4>
    </div>
    <form class="form__container" action="./database/create_id_tb2.php" method="post">
        <p>Full name</p>
        <select name="person_id">
             <?php foreach ($persons as $person) {
                 $id = $person["id"];
                 $full_name = $person["full_name"];
                 echo "<option value='$id'>$full_name</option>";
             }?>
        </select>
        <p>Number</p>
        <textarea name="number"></textarea>
        <br>
        <br>
        <button class="btn" type="submit">Add number</button>

    </form>
</div>
<! =============== END OF FORM_2 ================>

<footer>
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>CiTKhIn</h4></a>
            <p>
                The Faculty of Digital Technologies and Chemical Engineering.
            </p>
        </div>

        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul class="permalinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="my_group.html">My group</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer__3">
            <h4>Privacy</h4>
            <ul class="privacy">
                <li><a href="https://www.muctr.ru/sveden/common/">Info</a></li>
                <li><a href="https://www.muctr.ru/upload/iblock/b8b/b8b34a66392134b1a9e5224e11195edc.pdf">Privacy Policy</a></li>
                <li><a href="https://www.muctr.ru/university/security/antiterror/">Security</a></li>
            </ul>
        </div>

        <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
                <p>+8 (499) 978-86-60</p>
                <p>help@muctr.ru</p>
            </div>

            <ul class="footer__socials">
                <li>
                    <a href="https://vk.com/dmuctr"><i class="uil uil-vk"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCgmjCJNxlvf2IXCdE7TQOdA"><i class="uil uil-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; RCTU (Mendeleev University of Chemical Technology of Russia)</small>
    </div>
</footer>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="./main.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        //when window width is >=600px
        breakpoints: {
            600: {
                slidesPerView: 2
            }
        }
    });
</script>
</body>
</html>