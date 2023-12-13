<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Website Using HTML, CSS, JavaSCript</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/huta-icons/huta-icons.css">
    <style>
        body {
            background-image: url(./img/image1.jpg);
        }
    </style>


    <link rel="stylesheet" href="./css/swipper/swiper-bundle.min.css">


    <link rel="stylesheet" href="./css/swipper/swiper-bundle.min.js">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html"><img src="img/KELASI4-02.png" style="width:50%;"></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cours.php">Cours</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="authentification.php">S'inscrire</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
            <button id="open-menu-btn"><i class="bi bi-justify"></i></button>
            <button id="close-menu-btn"><i class="bi bi-x-lg"></i></button>
        </div>
    </nav>
    <!-- ======================== END OF NAVBAR ============================= -->



    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Grow your skills to andvance your career path</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
                    fuga corrupti in quis, ut similique officia magnam aut id quibusdam eos! Nesciunt,
                    explicabo ipsum? Voluptatem suscipit facere reprehenderit provident? Voluptatibus?
                </p>
                <a href="cours.php" class="btn btn-primary">Get Started</a>
                </div>

            <div class="header__right">
                <div class="header__rigth-image">
                    <img src="./img/image4.png">
                </div>
            </div>
        </div>
    </header>
    <!-- =================== END OFHEADER ===================-->



    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>categories</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio,
                    asperiores ut! Quisquam voluptatibus saepe quia consequatur harum laudantium,
                    corporis id voluptatum facere, deleniti tenetur libero magnam illo vel! Dolorem, itaque.
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>

            <div class="categories__right">
                <article class="category">
                    <span class="category__icon"><i class="bi bi-currency-bitcoin"></i></span>
                    <h5>Blackchain</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>
                
                    <article class="category">
                    <span class="category__icon"><i class="bi bi-currency-dollar"></i></span>
                    <h5>Finance</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="bi bi-megaphone"></i></span>
                    <h5>Marketing</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>
                
                <article class="category">
                    <span class="category__icon"><i class="bi bi-music-note-beamed"></i></span>
                    <h5>Music</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>
                
                <article class="category">
                    <span class="category__icon"><i class="bi bi-hammer"></i></span>
                    <h5>Blackchain</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>
                
                <article class="category">
                    <span class="category__icon"><i class="bi bi-hammer"></i></span>
                    <h5>Blackchain</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, distinctio?</p>
                </article>
            </div>
        </div>
    </section>
    <!--=========================== END OF CATEGORIES ==================================-->


    <section class="cours">
        <h2>Our Popular Cours</h2>
        <div class="container cours__container">
            <article class="cours">
                <div class="cours__Image">
                    <img src="./img/image1.JPG ">
                </div>
                
                <div class="cours__info">
                <h4>Responsive Social Media Website UI Design</h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Facere, ex? Porro autem odio officiis blanditiis magni.
                </p>
                <a href="cours.html" class="btn btn-primary">Learn More</a>
            </div>
            </article>
            
            <article class="cours">
                <div class="cours__Image">
                    <img src="./img/image1.JPG ">
                </div>
                <div class="cours__info">
                <h4>Responsive SmartHome Website Design</h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Facere, ex? Porro autem odio officiis blanditiis magni.
                </p>
                <a href="cours.html" class="btn btn-primary">Learn More</a>
                </div>
            </article>
            
            <article class="cours">
                <div class="cours__Image">
                    <img src="./img/image1.JPG ">
                </div>
                <div class="cours__info">
                <h4>Responsive Admin Dashboard UI Design</h4>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Facere, ex? Porro autem odio officiis blanditiis magni.
                </p>
                <a href="cours.php" class="btn btn-primary">Learn More</a>
            </div>
            </article>
        </div>
    </section>
    <!-- ============================ END OF COURS ================================= -->





    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
            
            <article class="faq">
                <div class="faq__icon"><i class="bi bi-plus"></i></div>
                <div class="question__answer">
                    <h4>How do I know the right cours for me?</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis mollitia,
                        nesciunt ab vero eligendi quos doloremque voluptas nulla sint eaque,
                        assumenda consectetur voluptates iure magni expedita modi laborum, amet omnis.
                    </p>
                </div>
            </article>
        </div>
    </section>
    <!--======================= END OF FAQs =============================-->



    <section class="container testimonials__container mySwiper">
        <h2>Etudiants Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-silde">
                <div class="avatar">
                    <img src="./img/image1.jpg" style="width: 75px;">
                </div>
                <div class="testimonial__info">
                    <h5>Dorcas Biampata</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>
            
            <article class="testimonial swiper-silde">
                <div class="avatar">
                    <img src="./img/image1.jpg" style="width: 75px;">
                </div>
                <div class="testimonial__info">
                    <h5>Patricia Ntumba</h5>
                    <small>Spécialiste</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>
            
            <article class="testimonial swiper-silde">
                <div class="avatar">
                    <img src="./img/image1.jpg" style="width: 75px;">
                </div>
                <div class="testimonial__info">
                    <h5>Jovanie Tania</h5>
                    <small>Professeur</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>
            
            <article class="testimonial swiper-silde">
                <div class="avatar">
                    <img src="./img/image1.jpg" style="width: 75px;">
                </div>
                <div class="testimonial__info">
                    <h5>Ruth KJH</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>
            
            <article class="testimonial swiper-silde">
                <div class="avatar">
                    <img src="./img/image1.jpg" style="width: 75px;">
                </div>
                <div class="testimonial__info">
                    <h5>Dorcas Biampata</h5>
                    <small>Etudiante</small>
                </div>
                <div class="testimonial__body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!--========================= END OF TESTIMONIALS-->






        <footer>
            <div class="container footer__container">
                <div class="footer__1">
                    <a href="index.html" class="footer__logo"><h4>E-learning</h4></a>
                    <p>lorem ipsum dolor sit amet consecteur adipicing elit. corporis ipsum nobis ratione.</p>
                </div>

                <div class="footer__2">
                    <h4>Permalikns</h4>
                    <ul class="permalinks">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="cours.php">Cours</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="authentification.php">S'authentifier</a></li>
                    </ul>
                </div>

                <div class="footer__3">
                    <h4>pricapy</h4>
                    <ul>
                        <li><a href="#">Pricapy Policy</a></li>
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>

                <div class="footer__4">
                    <h4>Contact Us</h4>
                    <div>
                        <p>+243 818 034 169</p>
                        <P>mutombohuta234@gmail.com</P>
                    </div>

                    <ul class="footer__socials">
                        <li>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                    </ul>
                </div>
                </div>
                <div class="footer__copyright">
                    <small>Copyright &copy; E-kelasi Youtube Tutoriels</small>
            </div>
        </footer>





    <link rel="stylesheet" href="css/swipper/swiper-bundle.min.js">
    <script src="./main.js"></script>


    <script>
        var swiper = new Swipper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable:true,
            },
            //when window is > 600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>

</body>
</html>