<?php
$portfolio = [
    'webdesign' => [
        'villa-excelsior',
        'homeimprovement',
        'ultimatebranding',
        'franko',
        'shortsale',
        'dsu',
        'easybike2',        
        'bingoport',
        'bristol',
        'terminix',        
        'claremont',
        'dealziper',
        'doubleglazers',        
        'beast',
        'goodagile',
        'bentoya',
        'greencandy2',
        'heatart',
        'workbench',
        'nls',
        'roofpoop',
        'seatprice',        
        'snowmassage',
        'sns',
        'sns2',
        'stonemeadow',
        'strive',
        'teamapp',
        'bristol',
        'claremont',
        'urbanfarmtech',
        'agereverse',        
        'starwood',
        'tranera',
    ],
    'ecommerce' => ['bentoya', 'workbench', 'terminix'],
    'wordpress' => ['urbanfarmtech', 'tranera', 'starwood','ultimatebranding','dsu','claremont'],
];

$skill_rate = [
    'Languages & Markup' => [
        'PHP'         => 0.85,
        'JavaScript'  => 0.80,
        'HTML5'       => 0.95,
        'CSS3'        => 0.85,
        'TypeScript'  => 0.70,
    ],

    'Databases' => [
        'MySQL'            => 0.90,
        'PostgreSQL'       => 0.75,
        'MongoDB'          => 0.60,
    ],

    'PHP Frameworks' => [
        'Laravel'       => 0.75,
        'CodeIgniter'   => 0.75,
        'Yii'           => 0.65,
        'CakePHP'       => 0.65,
        'Kohana'        => 0.65,
    ],

    'Front-End Frameworks & Libraries' => [
        'jQuery'        => 0.85,
        'Bootstrap'     => 0.75,
        'Semantic UI'   => 0.85,
        'React'         => 0.70,
        'Vue.js'        => 0.65,
        'Angular'       => 0.60,
    ],

    'CMS & E-Commerce' => [
        'WordPress'         => 0.85,
        'Shopify'         => 0.85,
        'Drupal'            => 0.50,
        'Magento'           => 0.50,
    ],

    'Mobile & API Backends' => [
        'Node.js'       => 0.60,
        'Express.js'    => 0.55,
        'REST APIs'     => 0.80,
        'GraphQL'       => 0.50,
    ],

    'Dev Tools & IDEs' => [
        'PHPStorm'      => 0.85,
        'VS Code'       => 0.65,
        'MySQL Workbench' => 0.80,
        'Postman'       => 0.75,
        'GitHub'        => 0.80,
    ],

    
    'Testing & QA' => [
        'PHPUnit'       => 0.65,
        'Jest'          => 0.55,
        'Cypress'       => 0.50,
    ],

    'Methodologies' => [
        'OOP'           => 0.90,
        'Agile / Scrum' => 0.75,
        'GitFlow'       => 0.85,
    ],

    'Maintenance & Operations' => [
        'Server Administration'    => 0.80,
        'Database Optimization'    => 0.85,
        'Backups & Recovery'       => 0.85,
        'Email Troubleshooting'    => 0.75,
    ],
];

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Dani de Luna</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">
    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="common-css/bootstrap.css" rel="stylesheet">

    <link href="common-css/ionicons.css" rel="stylesheet">

    <link href="common-css/fluidbox.min.css" rel="stylesheet">

    <link href="01-cv-portfolio/css/styles.css" rel="stylesheet">

    <link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>

<header>
    <div class="container">
        <div class="heading-wrapper">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="info">
                        <i class="icon ion-ios-location-outline"></i>
                        <div class="right-area">
                            <h5>Baguio City, 2600</h5>
                            <h5>Philippines</h5>
                        </div><!-- right-area -->
                    </div><!-- info -->
                </div><!-- col-sm-4 -->

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="info">
                        <i class="icon ion-ios-telephone-outline"></i>
                        <div class="right-area">
                            <h5>Phone/Whatsapp</h5>
                            <h6>+63 929 302 2159</h6>
                        </div><!-- right-area -->
                    </div><!-- info -->
                </div><!-- col-sm-4 -->

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="info">
                        <i class="icon ion-ios-chatboxes-outline"></i>
                        <div class="right-area">
                            <h5>danideluna.dev@gmail.com</h5>
                            <h6>REPLY IN 24 HOURS</h6>
                        </div><!-- right-area -->
                    </div><!-- info -->
                </div><!-- col-sm-4 -->
            </div><!-- row -->
        </div><!-- heading-wrapper -->

        <a class="downlad-btn" href="/Danilo-de-Luna-Resume.pdf" target="_blank">
          <i class="fas fa-file"></i> Download Resume
        </a>
    </div><!-- container -->
</header>

<section class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-lg-2"></div>
            <div class="col-md-10 col-lg-8">
                <div class="intro">
                    <div class="profile-img"><img alt="dani profile photo" src="images/dani-profile-photo.png" alt=""></div>
                    <h2><b class="text-color-blue">Danilo de Luna</b></h2>
                    <h4 class="font-yellow">Building Scalable, User-Friendly Websites</h4>
                    <ul class="information margin-tb-30 text-color-blue">
                        Hello! As a full-stack developer, I manage projects, design interfaces, and implement robust e-commerce systems.

                    </ul>
                    <ul class="social-icons">
                        <li><a href="https://www.designcontest.com/designer/danitz/" target="_blank" title="www.designcontest.com/designer/danitz/"><i class="ion-ribbon-b"></i></a></li>
                       
                        <li><a href="https://dandeliondev.github.io/" target="_blank" title="github"><i class="ion-social-github"></i></a></li>
                        <li><a href="https://ph.linkedin.com/in/danilo-de-luna-2a6b22364?trk=profile-badge" target="_blank" title="linkedin"><i class="ion-social-linkedin"></i></a></li>
                        <!--<li><a href="#"><i class="ion-social-linkedin"></i></a></li>-->
                        <!--<li><a href="#"><i class="ion-social-instagram"></i></a></li>-->
                        <!--<li><a href="#"><i class="ion-social-facebook"></i></a></li>-->
                        <li><a href="https://www.deviantart.com/dandelion-art" target="_blank" title="www.deviantart.com/dandelion-art"><i class="ion-image"></i></a></li>
                    </ul>
                 
              
                </div><!-- intro -->
               
            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- intro-section -->

<section class="portfolio-section section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="heading">
                    <h3><b class="text-color-blue">Portfolio</b></h3>
                    <h6 class="font-lite-black"><b>MY WORK</b></h6>
                </div>
            </div><!-- col-sm-4 -->
            <div class="col-sm-8">
                <div class="portfolioFilter clearfix margin-b-80">
                    <a href="#" data-filter="*" class="current text-color-blue"><b>ALL</b></a>
                    <a href="#" data-filter=".web-design"><b class="text-color-blue">WEB DESIGN</b></a>
                    <a href="#" data-filter=".ecommerce"><b class="text-color-blue">WEB APPLICATIONS</b></a>
                    <a href="#" data-filter=".wordpress"><b class="text-color-blue">WORDPRESS</b></a>
                </div><!-- portfolioFilter -->
            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->
    <div class="portfolioContainer">
        <?php

        foreach ($portfolio['webdesign'] as $key => $pf) {
            ?>
            <div class="p-item  web-design">
                <a href="images/designs/<?= $pf ?>.jpg" data-fluidbox>
                    <img src="images/designs/<?= $pf ?>.jpg" alt=""></a>
            </div>
            <!-- p-item -->

            <?php

        }

        foreach ($portfolio['ecommerce'] as $key => $pf) {
            ?>
            <div class="p-item ecommerce">
                <a href="images/designs/<?= $pf ?>.jpg" data-fluidbox>
                    <img src="images/designs/<?= $pf ?>.jpg" alt=""></a>
            </div>
            <!-- p-item -->

            <?php

        }

        foreach ($portfolio['wordpress'] as $key => $pf) {
            ?>
            <div class="p-item wordpress">
                <a href="images/designs/<?= $pf ?>.jpg" data-fluidbox>
                    <img src="images/designs/<?= $pf ?>.jpg" alt=""></a>
            </div>
            <!-- p-item -->

            <?php

        }

        ?>

    </div><!-- portfolioContainer -->

</section><!-- portfolio-section -->


<section class="about-section section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="heading">
                    <h3><b class="text-color-blue">About me</b></h3>
                    <h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
                </div>
            </div><!-- col-sm-4 -->
            <div class="col-sm-8">
                <p class="margin-b-50">
                 I am aspiring to be an IT entepreneur some day, for now my main goal is to further expand my knowledge in web development, hopefully learn mobile development.
                </p>
                <?php
                foreach ($skill_rate as $title => $sr) {
                    echo '<h4>'.$title.'</h4><br />';
                    echo '<div class="row">';

                    foreach ($sr as $skill => $rate) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent="<?php echo $rate ?>">
                                    <div></div>
                                    <h6 class="progress-title"><?php echo $skill ?></h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <?php
                    }
                    echo '</div>';

                }

                ?>

            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- about-section -->

<section class="experience-section section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="heading">
                    <h3><b>Work Experience</b></h3>
                    <h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
                </div>
            </div><!-- col-sm-4 -->
            <div class="col-sm-8">

                <div class="experience margin-b-50">
                    <h4><b>PROJECT COORDINATOR &amp; SENIOR WEB DEVELOPER</b></h4>
                        <h5 class="font-yellow"><b>Outbounders LLC</b></h5>
                        <h6 class="margin-t-10">August 2012 - Present</h6>
                        
                        <p class="font-semi-white margin-tb-30">
                            Took on cross-functional responsibilities beyond my scope to meet project goals, deadlines, and commitments.
                        </p>
                        <p class="font-semi-white margin-tb-30">
                            Coordinated project progress and completion across departments—managing budgets, scopes, and timelines. Defined guidelines, set deadlines, assigned responsibilities, monitored progress, and prepared status repor.
                        </p>
                        <p class="font-semi-white margin-tb-30">
                            Collaborated with team to ensure system compatibility, proposed viable solutions, and provided rapid support to resolve issues.
                        </p>
                        <p class="font-semi-white margin-tb-30">
                            Developed and refined IT project strategies to streamline workflows and boost efficiency.
                        </p>
                        <p class="font-semi-white margin-tb-30">
                            Screened and assessed candidates for the web development team, assigning roles based on expertise to ensure project sustainability and cost-effectiveness.
                        </p>
                        <p class="font-semi-white margin-tb-30">
                            Administered web servers, addressed security vulnerabilities, and performed database maintenance, including backups and optimizations.
                        </p>
                        
                        <ul class="list margin-b-30">
                            <li>Developed multiple cost-efficient web applications within tight timelines.</li>
                            <li>Architected scalable, expandable system infrastructures compatible with third-party integrations.</li>
                            <li>Implemented robust data-security measures to protect company and client information.</li>
                        </ul>

                </div><!-- experience -->

                <div class="experience margin-b-50">
                    <h4><b>WEB DEVELOPER</b></h4>
                    <h5 class="font-yellow"><b>Oxydo MMS</b></h5>
                    <h6 class="margin-t-10">April 2012 - August 2012</h6>
                    <p class="font-semi-white margin-tb-30">
                        Collaborated with Mobile developers and developed API based on the requirements.
                        <br/>Built and maintained projects based on client specifications.
                        <br/>Tookover and maintained existing projects.
                    </p>
                </div><!-- experience -->
                <div class="experience margin-b-50">
                    <h4><b>FREELANCE WEB DESIGNER AND WEB DEVELOPER</b></h4>
                    <h5 class="font-yellow"><b>Various Clients</b></h5>
                    <h6 class="margin-t-10">February 2012 - April 2012</h6>
                    <p class="font-semi-white margin-tb-30">
                        Built wordpress personal and e-commerce sites based from client specifications.
                    </p>
                    <p class="font-semi-white margin-tb-30">
                        Competed on crowdsourcing design contests to hone my design skills and won some.
                    </p>
                    <ul class="list margin-b-30">
                        <li>Completed the requirements of each project based from my client's specifications.</li>
                    </ul>
                </div><!-- experience -->

                <div class="experience margin-b-50">
                    <h4><b>WEB DEVELOPER</b></h4>
                    <h5 class="font-yellow"><b>Transcripro</b></h5>
                    <h6 class="margin-t-10">August 2007 - January 2012</h6>
                   <p class="font-semi-white margin-tb-30">
                    Developed and maintained web applications, including a medical transcription system and an e-learning platform.
                    <br/>Created and supported static websites and WordPress sites.
                    <br/>Built a file-comparison tool to verify the accuracy of medical transcription students’ work.
                    <br/>Designed and implemented a payroll system for medical transcriptionists.
                    <br/>Troubleshot software and hardware issues to ensure uninterrupted operations.
                    <br/>Installed and configured specialized transcription software for end users.
                    <br/>Deployed and managed the facility’s network infrastructure.
                    <br/>Installed and configured an IVR (Interactive Voice Response) system.
                </p>


                </div><!-- experience -->
                <div class="experience margin-b-50">
                    <h4><b>IT Instructor</b></h4>
                    <h5 class="font-yellow"><b>Agoo Computer College</b></h5>
                    <h6 class="margin-t-10">June 2006 - June 2007</h6>
                    <p class="font-semi-white margin-tb-30">
                        Delivered IT related and programming subjects to students.
                        <br/>Evaluated students performance and ensure they are able to cope up with the lessons.
                    </p>
                    <ul class="list margin-b-30">
                        <li>Efficiently trained students on use of spreadsheets for practical and real world application.</li>
                        <li>Certificate on TESDA competency based curriculum seminar.</li>
                    </ul>
                </div><!-- experience -->

            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->

</section><!-- experience-section -->

<section class="education-section section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="heading">
                    <h3><b>Education</b></h3>
                    <h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
                </div>
            </div><!-- col-sm-4 -->
            <div class="col-sm-8">
                <div class="education-wrapper">
                    <div class="education margin-b-50">
                        <h4><b>Bachelor of Science in Computer Science</b></h4>
                        <h5 class="font-yellow"><b>University of Baguio</b></h5>
                        <h6 class="font-lite-black margin-t-10">GRADUATED IN October 2005</h6>
                        <p class="margin-tb-30">Developed guidance counselling system for my OJT requirements</p>
                        <p class="margin-tb-30">Developed a bus reservation system for my thesis</p>
                        <p class="margin-tb-30">Athletic awardee, team captain of varsity chess since my second year, won five consecutive championships.</p>
                    </div><!-- education -->
                </div><!-- education-wrapper -->
            </div><!-- col-sm-8 -->
        </div><!-- row -->
    </div><!-- container -->

</section><!-- about-section -->

<section class="counter-section" id="counter">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="counter margin-b-30">
                    <h1 class="title"><b><span class="counter-value" data-duration="400" data-count="17">0</span></b></h1>
                    <h5 class="desc"><b>Years Experience</b></h5>
                </div><!-- counter -->
            </div><!-- col-md-3-->

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="counter margin-b-30">
                    <h1 class="title"><b><span class="counter-value" data-duration="1400" data-count="22">0</span></b></h1>
                    <h5 class="desc"><b>Project Completed</b></h5>
                </div><!-- counter -->
            </div><!-- col-md-3-->

            <!--<div class="col-sm-6 col-md-6 col-lg-3">-->
            <!--<div class="counter margin-b-30">-->
            <!--<h1 class="title"><b><span class="counter-value" data-duration="700" data-count="311">0</span></b></h1>-->
            <!--<h5 class="desc"><b>Satisfied Clients</b></h5>-->
            <!--</div>&lt;!&ndash; counter &ndash;&gt;-->
            <!--</div>&lt;!&ndash; col-md-3&ndash;&gt;-->

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="counter margin-b-30">
                    <h1 class="title"><b><span class="counter-value" data-duration="2000" data-count="57">0</span></b></h1>
                    <h5 class="desc"><b>Web Designs</b></h5>
                </div><!-- margin-b-30 -->
            </div><!-- col-md-3-->

        </div><!-- row-->
    </div><!-- container-->
</section><!-- counter-section-->

<footer>
    <p class="copyright">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<?= date('Y') ?> danideluna.dev
        All rights reserved
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </p>


</footer>


<!-- SCIPTS -->

<script src="common-js/jquery-3.2.1.min.js"></script>

<script src="common-js/tether.min.js"></script>

<script src="common-js/bootstrap.js"></script>

<script src="common-js/isotope.pkgd.min.js"></script>

<script src="common-js/jquery.waypoints.min.js"></script>

<script src="common-js/progressbar.min.js"></script>

<script src="common-js/jquery.fluidbox.min.js"></script>

<script src="common-js/scripts.js"></script>

</body>
</html>