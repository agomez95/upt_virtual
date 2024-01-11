<!-- <link rel="stylesheet" href="./assets/css/header.css"> -->


<!-- Bootstrap icons CSS -->

<!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
<link rel="stylesheet" href="./assets/css/header.css">

<header class="header-area header-sticky">
    <div>
        <div class="">    
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">    
                        <ul class="nav">    
                            <li class="scroll-to-section ">
                                <a href="inicio#home" class="<?php echo $respuesta == 'inicio' ? 'active' : ''; ?>">
                                    <i class="bi bi-house mx-1 "></i>INICO
                                </a>
                            </li>    
                            <li class="scroll-to-section">
                                <a href="nosotros" class="<?php echo $respuesta == 'nosotros' ? 'active' : ''; ?>">
                                    <i class="bi bi-person mx-1"></i>NOSOTROS
                                </a>
                            </li>    
                            <li class="scroll-to-section">
                                <a href="todo#aulas" id="myP" onclick="myFunction()">
                                    <i class="bi bi-mortarboard mx-1"></i>AULAS VIRTUALES
                                </a>
                            </li>    
                            <li class="scroll-to-section">
                                <a href="todo#soporte" id="myP" onclick="myFunction()">
                                    <i class="bi bi-gear mx-1"></i>SOPORTE
                                </a>
                            </li>   
                            <li class="scroll-to-section">
                                <a href="todo#capacitaciones" class="<?php echo $respuesta == 'capacitaciones' ? 'active' : ''; ?>">
                                    <i class="bi bi-person-vcard mx-1"></i>CAPACITACIONES
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="todo#blog" class="<?php echo $respuesta == 'tutoriales_Postgrado' ? 'active' : ''; ?>">
                                    <i class="bi bi-person-video mx-1"></i>TUTORIALES
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="https://www.youtube.com/@of.educacionvirtual" target="_blank" class="<?php echo $respuesta == 'tutoriales_Postgrado' ? 'active' : ''; ?>">
                                    <i class="bi bi-play-btn mx-1"></i>VIDEO TIPS
                                </a>
                            </li>    
                        </ul>        
                        <a class="menu-trigger" id="menu-trigger">
                            <span>Menu</span>
                        </a>    
                    </nav>    
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MENU LATERAL -->
<script src="assets/js2/isotope.min.js"></script>
<script src="assets/js2/owl-carousel.js"></script>
<script src="assets/js2/custom.js"></script>