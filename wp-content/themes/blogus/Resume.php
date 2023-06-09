<?php /* Template Name: Resume Template */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gaurav Dalwadi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/img/GauravDalwadiIcon.svg" rel="icon">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/img/GauravDalwadiIcon.svg" rel="apple-touch-icon">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/splide-4.1.3/dist/css/themes/splide-sea-green.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo get_template_directory_uri() ?>/resume_assets/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        #sb_instagram .sbi_photo {
            background-size: contain !important;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li>
                    <a href="#hero" class="nav-link scrollto active">
                        <i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li>
                    <a href="#about" class="nav-link scrollto">
                        <i class="bx bx-user"></i> <span>About</span></a>
                </li>
                <li>
                    <a href="#resume" class="nav-link scrollto">
                        <i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <!-- <li>
                    <a href="#portfolio" class="nav-link scrollto">
                        <i class="bx bx-book-content"></i><span>Portfolio</span></a>
                </li> -->
                <!-- <li>
                    <a href="#services" class="nav-link scrollto">
                        <i class="bx bx-server"></i> <span>Services</span></a>
                </li> -->
                <li>
                    <a href="#Instafeed" class="nav-link scrollto">
                        <i class='bx bxl-instagram'></i> <span>Instagram</span></a>
                </li>
                <li>
                    <a href="#contact" class="nav-link scrollto">
                        <i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
                <!-- <li>
                    <a href="{{ route('login" class="nav-link scrollto">
                <i class="bx bx-log-in-circle"></i> <span>Login</span></a>
                </li> -->
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Gaurav Dalwadi</h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, coder"></span></p>
            <div class="social-links">
                <a href="https://twitter.com/codes_by_gd" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100085277888465" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/codes.by.gd/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="#" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>  -->
                <a href="https://www.linkedin.com/in/gauravdalwadi/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main" class="px-2">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <p>Web developer experienced with all stages of the development cycle for
                        dynamic web projects. Well-versed in numerous programming languages
                        including HTML5, PHP, OOP, JavaScript, CSS, MySQL.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?php echo get_template_directory_uri() ?>/resume_assets/img/profile-img.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3>Software &amp; Web Developer.</h3>
                        <p class="fst-italic">
                            <!-- {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua. --}} -->
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span> 19 May 1994</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span><a href="http://www.gauravdalwadi.in/">www.gauravdalwadi.in </a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i><strong>Phone:</strong>
                                        <span>+91 9033628778</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>Gujarat, India</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>28</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Computer Science Engineer</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>
                                            <a href="mailto:gaurav.dalwadi@gmail.com">codes.by.gd@gmail.com</a>
                                        </span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Not Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            <!-- {{-- Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis
                            culpa magni laudantium dolores. --}} -->
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <!-- <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Facts</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Skills</h2>
                    <p>
                        Worked on very vast veriety of plateforms accorss different languages like PHP, SQL, javascript,
                        HTML, JAVA, JSP, Pascal, Shell, C++, Python etc.
                        Also worked with some frameworks and opensource projects like Wordpress, Laravel, MantisBT,
                        Moodle, Opencats etc.
                    </p>
                </div>

                <div class="row skills-content">
                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">SQL(MySQL) <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">jquery, Ajax <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Git <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">VS Code / Netbeans<i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">bootstrap <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">React JS<i class="val">15%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Explored different environments during my experiances like networking and desktop support
                        enviorment Manufatureing plants like L&T, Banking environnment like PNB and bharti AXA life
                        insurance, Research and Mission Critical Environment like Indian Space And Research
                        Organization (ISRO-SAC), Private Sector like Svaapta It-Ally Solutions Pvt Ltd.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Summary</h3>
                        <div class="resume-item pb-0">
                            <h4>Gaurav Dalwadi</h4>
                            <p><em>Innovative and deadline-driven Web Developer with 6+ years of experience designing
                                    and developing user-centered/purpose-full websites from initial concept
                                    to final, bug free deliverable.</em></p>
                            <ul>
                                <li>Vadodara, Gujarat, India</li>
                                <li>(91) 9033628778</li>
                                <li>gaurav.dalwadi@gmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Bachelor's Degree in Computer Science &amp; Engineering</h4>
                            <h5>2013 - 2015</h5>
                            <p><em>Gujarat Technological University, Vadodara, GJ</em></p>
                            <p>Completed Bachelor's degree with project based on pyhton on Raspberry pi and achieved
                                aggregate 7.44 CGPA </p>
                        </div>
                        <div class="resume-item">
                            <h4>Diploma in Computer &amp; Engineering</h4>
                            <h5>2009 - 2012</h5>
                            <p><em>The Maharaja Sayajirao University, Vadodara, GJ</em></p>
                            <p>Completed Diploma with project based on ASP.NET, SQL and achieved 72.33% </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Software Developer</h4>
                            <h5>2021 - Present</h5>
                            <p><em>Svaapta It-Ally Solutions Pvt Ltd, Vadodara</em></p>
                            <ul>
                                <li>Lead in the development, and implementation of the client requirements and
                                    logics</li>
                                <li>Coordinated with team members, giving trainings to the team and other interns</li>
                                <li>Working on different projects based on WordPress and Laravel
                                    framework.
                                </li>
                                <li>Technologies: PHP, WordPress, Laravel, JavaScript, HTML, Ajax, MySQL,
                                    Git, VS Code</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Software / Geoinformatics Engineer</h4>
                            <h5>2019 - 2020</h5>
                            <p><em>Space Application Center (Ambimate Electronics), Ahmedabad</em></p>
                            <ul>
                                <li>Developed 3 Projects from scratch while maintaining current deployed
                                    projects within a given deadline.</li>
                                <li>Maintained and configured web servers with current environmental
                                    requirements.</li>
                                <li>Technologies: PHP, jQuery, D3, JavaScript, ajax, bootstrap 3/4, HTML,
                                    MySQL, CSS, oracle DB, NetBeans, Komodo, web worker, WebSocket,
                                    offscreen canvas.</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Apprentice</h4>
                            <h5>2017 - 2018</h5>
                            <p><em>Space Application Center (ISRO), Ahmedabad</em></p>
                            <ul>
                                <li>worked mainly on java desktop and web application development and
                                    other small projects.</li>
                                <li>Technologies: Java, C++, JSP, PHP, jQuery, D3, JavaScript, videoJS, ajax,
                                    bootstrap, html5, MySQL, GeoServer, OpenLayers.</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>IT Desktop Engineer</h4>
                            <h5>2015 - 2016</h5>
                            <p><em>SB Websoft, Vadodara</em></p>
                            <ul>
                                <li>Provided on-site support and troubleshooting for Network and
                                    workstations.</li>
                                <li>Responsible for installation and configuring softwares and operating systems. Also,
                                    provided support for hardware debugging and troubleshooting</li>
                                <li>Worked at different sites like PNB, BHARTI AXA LIFE INSURANCE, and the
                                    last site was L&T VSW PLANT Vadodara.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" class="portfolio-details-lightbox"
                                        data-glightbox="type: external" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Sed Perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-pink">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781">
                                    </path>
                                </svg>
                                <i class="bx bx-tachometer"></i>
                            </div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box iconbox-yellow">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813">
                                    </path>
                                </svg>
                                <i class="bx bx-layer"></i>
                            </div>
                            <h4><a href="">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-red">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572">
                                    </path>
                                </svg>
                                <i class="bx bx-slideshow"></i>
                            </div>
                            <h4><a href="">Dele Cardo</a></h4>
                            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box iconbox-teal">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762">
                                    </path>
                                </svg>
                                <i class="bx bx-arch"></i>
                            </div>
                            <h4><a href="">Divera Don</a></h4>
                            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <!-- <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section> -->
        <!-- End Testimonials Section -->


        <!-- ======= Instagram Section ======= -->
        <section id="Instafeed" class="Instafeed section-bg">
            <div class="" data-aos="fade-up">
                <div class="section-title">
                    <h2>Instagram feed</h2>
                </div>
                <!-- <div id="splide" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">

                            @production
                            @foreach ($instagram_feed as $post)
                            <li class="splide__slide">
                                <img src="{{ $post->url }}">
                            </li>
                            @endforeach
                            @endproduction
                            {{-- <li class="splide__slide"><img
                                    src="https://brandontran.com/images/cardboard-castle-5.jpg"></li>
                            <li class="splide__slide"><img
                                    src="https://brandontran.com/images/cardboard-castle-4.jpg"></li>
                            <li class="splide__slide"><img
                                    src="https://brandontran.com/images/cardboard-castle-3.jpg"></li> --}}
                        </ul>
                    </div>
                    <div class="my-carousel-progress">
                        <div class="my-carousel-progress-bar"></div>
                    </div>
                </div> -->
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </section>

        </div>
        </section><!-- End Instagram Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1 px-2">
                    <div class="col-md-4 order-5 mt-5 mt-lg-0">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Vadodara, Gujarat, India</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>codes.by.gd@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 9033628778</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-8 px-3 order-1">

                        <form method="POST" action="{{ route('contact.us.store" id="contactUSForm" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="nameId" placeholder="Name" value="" placeholder="Your Name" required>

                                    <span class="text-danger small" id="nameErrorMsg"></span>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" name="email" id="emailId" class="form-control" placeholder="Email" value="" placeholder="Your Email" required>

                                    <span class="text-danger small" id="emailErrorMsg"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="subject" id="subjectId" class="form-control" placeholder="Subject" value="" placeholder="Subject" required>

                                    <span class="text-danger small" id="subjectErrorMsg"></span>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" name="phone" id="phoneId" class="form-control" placeholder="Phone" value="" placeholder="Phone" required>

                                    <span class="text-danger small" id="phoneErrorMsg"></span>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea name="message" id="messageId" class="form-control" rows="5" placeholder="Message" required></textarea>

                                <span class="text-danger small" id="messageErrorMsg"></span>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>


        </section><!-- End Contact Section -->



    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Gaurav Dalwadi</h3>
            <p>Build your life on your dreams; because dreams never have bad endings.</p>
            <div class="social-links">
                <a href="https://twitter.com/codes_by_gd" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100085277888465" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/codes.by.gd/" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                <a href=" https://www.linkedin.com/in/gauravdalwadi/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <div class="copyright">
                        &copy; Copyright <strong><span>Gaurav Dalwadi</span></strong>. All Rights Reserved
                    </div>
                </div>
                </footer><!-- End Footer -->

                <div id="preloader"></div>
                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/purecounter/purecounter.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/aos/aos.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/glightbox/js/glightbox.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/swiper/swiper-bundle.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/typed.js/typed.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/waypoints/noframework.waypoints.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/admin/vendor/global/global.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/particles/particles.min.js"></script>
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/vendor/splide-4.1.3/dist/js/splide.min.js"></script>
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script> -->
                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script> -->

                <!-- Template Main JS File -->
                <script src="<?php echo get_template_directory_uri() ?>/resume_assets/js/main.js"></script>
                <script>
                    $("#contactUSForm").validate({
                        rules: {
                            name: "required",
                            email: {
                                required: true,
                                email: true
                            },
                            phone: {
                                required: true,
                                phoneUS: true
                            },
                            subject: {
                                required: true,
                            },
                            message: {
                                required: true,
                                minlength: 15,
                            }
                        },
                        messages: {
                            name: "Please enter your name",
                            email: "Please enter a valid email address",
                            phone: {
                                required: "Please enter phone number",
                                minlength: "Please enter valid phone number "
                            },
                            subject: {
                                required: "Please enter a subject",
                            },
                            message: {
                                required: "Please enter a message",
                                minlength: "Your message must be at least 15 characters long"
                            }
                        },
                        errorElement: "span",
                        errorClass: "text-danger small",
                        // errorPlacement: function(error, element) {
                        //     error.addClass("text-danger small");
                        // },
                        success: function(label, element) {

                        },
                        highlight: function(element, errorClass, validClass) {
                            $(element).addClass("is-invalid").removeClass("is-valid");
                        },
                        unhighlight: function(element, errorClass, validClass) {
                            $(element).addClass("is-valid").removeClass("is-invalid");
                        },
                        submitHandler: function(form, e) {
                            e.preventDefault();
                            // var formData = new FormData($(form)[0]);
                            var form = form;

                            var name = $("#nameId").val();
                            var email = $("#emailId").val();
                            var phone = $("#phoneId").val();
                            var subject = $("#subjectId").val();
                            var message = $("#messageId").val();

                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                url: "{{ route('contact.us.store",
                                type: "POST",
                                data: {
                                    name: name,
                                    email: email,
                                    phone: phone,
                                    subject: subject,
                                    message: message
                                },
                                beforeSend: function() {
                                    form.querySelector('.loading').classList.add('d-block');
                                    form.querySelector('.error-message').classList.remove('d-block');
                                    form.querySelector('.sent-message').classList.remove('d-block');
                                },
                                success: function(response) {
                                    form.querySelector('.sent-message').classList.add('d-block');
                                    console.log(response);
                                },
                                error: function(response) {
                                    form.querySelector('.error-message').innerHTML = "Check inputs!!";
                                    form.querySelector('.error-message').classList.add('d-block');
                                    $('#nameErrorMsg').text(response.responseJSON.errors.name);
                                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                                    $('#subjectErrorMsg').text(response.responseJSON.errors.subject);
                                    $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
                                    $('#messageErrorMsg').text(response.responseJSON.errors.message);
                                },
                                complete: function() {
                                    // $('#sent-message').show();
                                    form.querySelector('.loading').classList.remove('d-block');
                                },
                            });
                        }
                    });

                    // $('#contactUSForm').on('submit', function(e) {


                    // });

                    var splide = new Splide('.splide', {
                        type: 'loop',
                        perPage: 4,
                        snap: true,
                        autoplay: true,
                        speed: 1000,
                        interval: 5000,
                        // gap: '0em',
                        focus: 'center',
                        mediaQuery: 'max',
                        resetProgress: true,
                        breakpoints: {
                            640: {
                                perPage: 1,
                            },
                        }
                        // padding: '30%',
                    });
                    var bar = splide.root.querySelector('.my-carousel-progress-bar');

                    // Updates the bar width whenever the carousel moves:
                    splide.on('mounted move', function() {
                        var end = splide.Components.Controller.getEnd() + 1;
                        var rate = Math.min((splide.index + 1) / end, 1);
                        bar.style.width = String(100 * rate) + '%';
                    });

                    splide.mount();
                </script>
                <?php wp_footer(); ?>

</body>

</html>