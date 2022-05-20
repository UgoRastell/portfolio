
<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php $sujets = ['ALTERNANCE', 'TEST1', 'TEST2'] ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.scss">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="description" content="KKKKKKKKKK"></meta>
</head>
<body class="main-content">
    <header class="section sec1 header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/photo_ugo.jpg" alt="photo de Ugo RASTELL">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Salut !<span>Je suis Ugo Rastell.</span>
                    Un Web Developpeur.
                </h1>
                <p>
                    fffffffffffffffffffffffffffffffffffffffffffffffff
                </p>
                <div class="btn-con">
                    <input type="submit" value="Telecharger CV ">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section sec2 about" id="about">
            <div class="main-title">
                <h2>À propos<span> de moi</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Informations à propos de moi</h4>
                    <p>
                        
                    </p>
                    <div class="btn-con">
                        <input type="submit" value="Telecharger CV ">
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">650+</p>
                            <p class="small-text">Projets <br /> Completés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Années <br /> d'experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon parcours</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2010 - present</p>
                    <h5>Web Developer</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2008 - 2011</p>
                    <h5>Software Engineer</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2016 - 2017</p>
                    <h5>C++ Programmer</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2009 - 2013</p>
                    <h5>Business Degree</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2013 - 2016</p>
                    <h5>Computer Science Degree<</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - present</p>
                    <h5>3d Animation</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quasi vero fugit.
                    </p>
                </div>
            </div>
        </section>
        <section class="section sec3" id="portfolio">
            <div class="main-title">
                <h2>Mon <span>Portfolio</span></h2>
            </div>
            <p class="port-text">
                Mon travail avec plusieur langue de programmations
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port1.jpg" alt="Main qui ecrit avec un clavier">
                    </div>
                    <div class="hover-items">
                        <h3></h3>
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="Ecran d'oradinateur qui montre des objets de couleurs rose ">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port3.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port4.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port5.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port2.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/port7.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Source du projet</h3>
                        <div class="icons">
                            <a href="#" class="icon">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section sec5 contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>moi</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contact moi ici</h4>
                        <p>
                            
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>
                                        Location : Rouen, France
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <p>
                                    Mail : ugorastell.dev@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <p>
                                        Éducation : Normandie Web School
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                    <p>Numéro de téléphone : 0695051898</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-europe"></i>
                                    <p>Langage : France</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://github.com/UgoRastell" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="./php/controller.php" method="POST" class="contact-form" id="myForm">

                            <?php if(array_key_exists('errors', $_SESSION)): ?>
                                <div class="alert-danger">
                                    <?= implode('<p></p>', $_SESSION['errors']); ?>
                                </div>
                            <?php endif; ?>

                            <?php if(array_key_exists('success', $_SESSION)): ?>
                                <div class="alert-success">
                                  Le message a bien été envoyé
                                </div>
                            <?php endif; ?>

                            <div class="input-control i-c-2">
                                <input type="text" name="first_name" id="first_name" value="<?= isset($_SESSION['inputs']['first_name']) ? $_SESSION['inputs']['first_name'] : ''; ?>" placeholder="Prénom">
                            </div>
                            <div class="input-control i-c-2">
                                <input type="text" name="lastname" id="lastname" value="<?= isset($_SESSION['inputs']['lastname']) ? $_SESSION['inputs']['lastname'] : ''; ?>" placeholder="Nom">
                            </div>
                            <div class="input-control i-c-2">
                                <input type="email" name="email" id="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" placeholder="Email">
                            </div>
                            <div class="input-control i-c-2">
                                <select name="objets" id="objets" value="<?= isset($_SESSION['inputs']['objets']) ? $_SESSION['inputs']['objets'] : ''; ?>">
                                    <option value="">CHOISSISEZ UN SUJET</option>
                                    <option value="TEST">TEST</option>
                                    <option value="TEST1">ttttttt</option>
                                    <option value="TEST2">ttttttt</option>
                                </select>
                            </div>
                            <div class="input-control i-c-2">
                                <textarea name="text_message" id="message" cols="15" rows="8" placeholder="Ecrivez ici..." maxlength="2000" ><?= isset($_SESSION['inputs']['text_message']) ? $_SESSION['inputs']['text_message'] : ''; ?></textarea>
                            </div>
                                <input type="submit" name ="insert" value="Envoyer">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controlls">
        <div class="control  control-1 active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control control-2 " data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control control-3" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control control-4" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>

    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="./js/app.js"></script>
    <script src="./js/theme.js"></script>
    <script src="./js/validateForm.js"></script>
</body>
</html>

<?php
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
?>