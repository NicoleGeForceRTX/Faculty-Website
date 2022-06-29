<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta chapset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiTKhIn Comunity (HTML, PHP, CSS, JavaScript)</title>

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
    <link rel="stylesheet" href="./css/style.css">
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

    <header>
        <div class =" container header__container">
            <div class="header__left">
                <h1>Welcome to the page of the faculty "CiTKhIn"</h1>
                <p>
                    The Faculty of Digital Technologies and Chemical Engineering (CiTKhIn) was established
                    in 2019 as a result of the merger of the Faculty of Information Technology and Management
                    and the Faculty of Engineering Chemistry.
                </p>
                <a href="https://www.muctr.ru/university/departments/cithin/info/" class="btn btn-primary">Read More</a>
            </div>
            <div class="header__right">
                <div class=".header__right-image">
                    <img src="./images/header.svg">
                </div>
            </div>
        </div>
    </header>
    <! =============== END OF HEADER ================>


    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Areas of training</h1>
                <p>
                    List of undergraduate codifiers. Chemical-technological, engineering and information
                    technology areas of training, as well as management.
                </p>
                <a href="https://www.muctr.ru/university/departments/cithin/spec/" class="btn">Learn More</a>
            </div>

            <div class="categories__right">
                <article class="category">
                    <span class="category__icon"><i class="uil uil-desktop-alt"></i></span>
                    <h5>09.03.01</h5>
                    <p>Informatics and Computer Engineering</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-window"></i></span>
                    <h5>09.03.02</h5>
                    <p>Information systems and technologies</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-setting"></i></span>
                    <h5>15.03.02</h5>
                    <p>Technological machines and equipment</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-megaphone"></i></span>
                    <h5>27.04.06</h5>
                    <p>Organization and management of science-intensive industries</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-flask-potion"></i></span>
                    <h5>18.03.01</h5>
                    <p>Chemical technology</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-ruler-combined"></i></span>
                    <h5>27.03.01</h5>
                    <p>Standardization and metrology</p>
                </article>
            </div>
        </div>
    </section>
    <! =============== END OF CATEGORIES ================>




    <section class="courses">
        <h2>Our Popular Courses</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./images/course1.png">
                </div>
                <div class="course__info">
                    <h4>MATLAB</h4>
                    <p>
                        MATLAB® combines a desktop environment tuned for iterative
                        analysis and design processes with a programming language
                        that expresses matrix and array mathematics directly.
                    </p>
                    <br>
                    <a href="https://www.mathworks.com/products/matlab.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/course2.png">
                </div>
                <div class="course__info">
                    <h4>Engineering and computer graphics</h4>
                    <p>
                        Each student should know 4 rules of work in Compass:
                        1. You need to draw accurately.
                        2. Start drawing from baselines.
                        3. Draw on bindings.
                        4. There should be one line in one place on the screen drawing.
                    </p>
                    <a href="https://cloud.mail.ru/public/jnwW/2EMBEfBvH" class="btn btn-primary">Learn More</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./images/course3.jpg">
                </div>
                <div class="course__info">
                    <h4>Physical Chemistry</h4>
                    <p>
                        "Waking up in the morning, you need to say to yourself:" What have I done for physical chemistry? "
                        And falling asleep at night, you need: "Have I done everything for physical chemistry"
                        And then there will be success. P. S. Konuyuhov.V.Y.
                    </p>
                    <a href="https://www.youtube.com/watch?v=3B2vdYyXrc4" class="btn btn-primary">Learn More</a>
                </div>
            </article>
        </div>
    </section>
    <! =============== END OF COURSES================>







    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Where is my dean's office?</h4>
                    <p>
                        The dean's office works with students at the Miusy (office 524a) and in
                        the Tushinsky UlK (room 206: office 201, 203) from 10:00 to 16:00 on weekdays.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Who else signs the financial aid application?</h4>
                    <p>
                        Any Associate Dean for Academic Affairs.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>I want to transfer to you from another university, how do I do it?</h4>
                    <p>
                        To apply for a transfer from another educational institution, you must
                        interact with the Academic Office. Detailed information on the procedure
                        for interaction is given at the link:   <a href="https://www.muctr.ru/abitur/transfer/">muctr.ru/abitur/transfer</a>
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>How to get into the territory of Miuss if my pass does not work?</h4>
                    <p>
                        If you have any problems with the passage to the territory of the Miussky complex,
                        write to A. M. Zubarev on VKontakte and wait for his answer.
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Where is my student profile located?</h4>
                    <p>
                        <a href="https://eios.muctr.ru/education/student"><u>eios.muctr.ru</u></a>
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>The site of the library center?</h4>
                    <p>
                        <a href="https://lib.muctr.ru/">lib.muctr.ru</a>
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>The site of the educational portal RCTU?</h4>
                    <p>
                        <a href="https://study.muctr.ru">study.muctr.ru</a>
                    </p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Virtual Dean's Office?</h4>
                    <p>
                        <a href="https://vk.com/dekanat_itu">vk.com/dekanat_itu</a>
                    </p>
                </div>
            </article>
        </div>
    </section>
    <! =============== END OF FAQs================>






    <section class="container testimonials__container mySwiper">
             <h2>Students' Quotes</h2>
            <div class="swiper-wrapper">
                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <div class="testimonial__info">
                        <h5>Diana Ayi</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial__body">
                        <p>
                            A decent chemist is 20 times better than any poet.
                        </p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="./images/avatar2.jpg">
                    </div>
                    <div class="testimonial__info">
                        <h5>Yuri Lemetyuinen</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial__body">
                        <p>
                            Who does not know Arion, he did not live life.
                        </p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="./images/avatar3.jpg">
                    </div>
                    <div class="testimonial__info">
                        <h5>Edem Quist</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial__body">
                        <p>
                            I am very productive when I am motivated by money.
                        </p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="./images/avatar5.jpg">
                    </div>
                    <div class="testimonial__info">
                        <h5>Mary Jenner</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial__body">
                        <p>
                            I just love computer science.
                        </p>
                    </div>
                </article>

                <article class="testimonial swiper-slide">
                    <div class="avatar">
                        <img src="./images/avatar6.jpg">
                    </div>
                    <div class="testimonial__info">
                        <h5>Jane Due</h5>
                        <small>Student</small>
                    </div>
                    <div class="testimonial__body">
                        <p>
                            The sun is shining... I'm going crazy. It's snowing... I'm Fanaari. I enjoy life. Life is beautiful... This is my life!!!
                        </p>
                    </div>
                </article>
            </div>
        <! ===list of points=== >
        <div class="swiper-pagination"></div>
    </section>
    <! =============== END OF TESTIMONIALS ================>






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