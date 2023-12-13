<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Website Using HTML, CSS, JavaSCript</title>

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/huta-icons/huta-icons.css">
</head>
    <body>
        <nav>
            <div class="container nav__container">
                <a href="index.php"><img src="img/KELASI4-02.png" style="width:50%;"></a>
                <ul class="nav__menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="cours.php">Cours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="authentification.php">S'inscrire</a></li>
                    <li><a href="admin.php">Administrateur</a></li>
                </ul>
                <button id="open-menu-btn"><i class="bi bi-justify"></i></button>
                <button id="close-menu-btn"><i class="bi bi-x-lg"></i></button>
            </div>
        </nav>
        <!-- ======================== END OF NAVBAR ============================= -->







        <section class="contact">
            <div class="container contact__container">
                <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./img/image1.jpg">
                </div>
                <h2>Contacter Nous</h2>
                <p>Asperiores veniam vel doloribus assumenda soluta
                    blanditiis dolores qui voluptables, consequatur vitae.
                </p>
                <ul class="contact__details">
                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <h5>+243 818 035 169</h5>
                    </li>
                    <li>
                        <i class="bi bi-chat-dots"></i>
                        <h5>suppor@e-learning.com</h5>
                    </li>
                    <li>
                        <i class="bi bi-geo-alt"></i>
                        <h5>Accra, Ghana</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li>
                        <a href="https://facebook.com"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li><a href="https://instagram.com"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li><a href="https://twitter.com"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li><a href="https://linkedin.com"><i class="bi bi-linkedin"></i></a>
                    </li>
                </ul>
                </aside>



                <form action="" class="contact__form">
                    <div class="form__name">
                        <input type="text" name="First Name" placeholder="First Name" required>
                        <input type="text" name="Last Name" placeholder="Last Name" required>
                    </div>
                    <input type="email" name="Email Address" placeholder="Your Email Address" required>
                    <textarea name="Message" rows="7" placeholder="Message" required></textarea>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </section>









        <footer>
            <div class="container footer__container">
                <div class="footer__1">
                    <a href="index.html" class="footer__logo"><h4>E-learning</h4></a>
                    <p>lorem ipsum dolor sit amet consecteur adipicing elit. corporis ipsum nobis ratione.</p>
                </div>
    
                <div class="footer__2">
                    <h4>Permalikns</h4>
                    <ul class="permalinks">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="cours.html">Cours</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="authentification.html">S'authentifier</a></li>
                        <li><a href="admin.html">Administrateur</a></li>
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
                    <small>Copyright &copy; E-learning Youtube Tutoriels</small>
            </div>
        </footer>
    
    
    
    
    
    <script src="./main.js"></script>
    
    
    </body>
    </html>