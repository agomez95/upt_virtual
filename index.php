<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=dd, initial-scale=1.0">
    <title>Aula Virtual Postgrado - Universidad Privada de Tacna</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="Bienvenidos al Aula Virtual Postgrado de la Universidad Privada de Tacna, plataforma versátil de enseñanza virtual (E-learning) para docentes y estudiantes.">
    <link href="https://aulavirtual.upt.edu.pe" rel="alternate" hreflang="es">
    <link rel="canonical" href="https://aulavirtual.upt.edu.pe">
    <meta property="og:site_name" content="UPT">
    <meta property="og:url" content="https://aulavirtual.upt.edu.pe>
<meta property=" og:title" content="Aula Virtual | UPT Principal">


    <meta name="keywords" content="aula virtual, virtual aula, aulavirtual,aula virtual upt, upt aula virtual, aula UPT, virtual UPT, aulaupt, uptaula, virtualupt, uptvirtual, Plataforma Virtual, Campus Virtual, Campus">
    <!-- <META HTTP-EQUIV="REFRESH" CONTENT="5"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">



    <link href="./assets/images/ICONOS/Favicon postgrado 1.webp" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  

        <!-- For favicon png -->
        <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!--bootstrap.min.css-->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--videotutorial.css-->
    <link rel="stylesheet" href="assets/css/videotutorial.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--flaticon.css-->
    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!--slick.css-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--videotutoriales.css-->
    <link rel="stylesheet" href="assets/css/videotutoriales.css">

</head>

<body>
    <?php
    $pagina = isset($_GET['p']);
    if ($pagina) {
        $respuesta = $_GET['p'];
    } else {
        $respuesta = 'inicio';
    }
    $pagina = 'paginas/' . $respuesta . '.php';

    include("./paginas/header.php");
    include("./paginas/home.php");

    if (is_file($pagina)) {
        require $pagina;
    } else {
        $pagina = 'paginas/inicio.php';
        require $pagina;
    }

    include("./paginas/footer.php");
    ?>

    <script>
        $('#myCarousel').carousel({
            interval: 4000
        });
    </script>

    <script type="text/javascript">
        window.onload = function() {
            const options = document.querySelectorAll('.tab-nosotros .option');

            mostrarDefaultInfo(options[0]);

            options[0].classList.add('selected');

            options.forEach(option => {
                option.addEventListener('click', function() {
                    options.forEach(opt => {
                        opt.classList.remove('selected');
                    });

                    this.classList.add('selected');

                    const optionId = this.id;
                    if (optionId === 'option4') {
                        mostrarContenidoEspecial();
                    } else {
                        mostrarInformacion(optionId);
                    }
                });
            });
        };

        function mostrarDefaultInfo(option) {
            mostrarInformacion(option.id);
        }

        function mostrarInformacion(optionId) {
            const insideDiv = document.querySelector('.inside');
            insideDiv.innerHTML = '';

            let title = '';
            let content = '';

            switch (optionId) {
                case 'option1':
                    title = '¿QUÉ HACEMOS?';
                    content = 'La Oficina de Educación Virtual de la Universidad Privada de Tacna, asume funciones relacionadas con la educación virtual y da soporte a la enseñanza de pregrado, postgrado y CPU con las Aulas Virtuales y Sistema de Videoconferencias.' +
                        'La Universidad Privada de Tacna, con enorme esfuerzo académico y financiero ha puesto en servicio una eficiente plataforma electrónica que está optimizando las acciones educativas brindadas por la universidad, en cumplimiento de sus aspiraciones de ofrecer a los estudiantes y a la comunidad, los beneficios de la aplicación de los avances de las TICs con fines educativos y culturales, de acuerdo con los valores asumidos como visión y misión de esta casa superior de estudios.';
                    break;
                case 'option2':
                    title = 'MISIÓN';
                    content = 'La Oficina de Educación Virtual, es un órgano de apoyo técnico-normativo, encargado de organizar, normar, coordinar y supervisar la ejecución de los programas de educación a distancia, propuestos por las facultades y escuela de Postgrado, para la comunidad universitaria y población en general. Es el órgano de apoyo encargado de la administración y mantenimiento del sistema de educación virtual que incluye aula virtual, sistema de videoconferencia y soporte informático de aplicaciones orientadas a cubrir las necesidades de la educación no presencial de la Universidad Privada de Tacna Y depende del Vicerrectorado Académico.';
                    break;
                case 'option3':
                    title = 'VISIÓN';
                    content = 'Ser una oficina de apoyo académico logrando el posicionamiento y liderazgo en formación virtual y semipresencial en la Universidad Privada de Tacna; brindado asesoría tecnológica y orientación pedagógica-didáctica en forma oportuna y con calidad, e incorporando la creación, la innovación para el mejoramiento en los procesos académicos.';
                    break;
                default:
                    title = '';
                    content = '';
                    break;
            }

            const contentDiv = document.createElement('div');
            contentDiv.classList.add('content');

            const h2 = document.createElement('h2');
            h2.textContent = title;
            h2.classList.add('titulo-nosotros');

            const p = document.createElement('p');
            p.textContent = content;
            p.classList.add('parrafo-nosotros');

            contentDiv.appendChild(h2);
            contentDiv.appendChild(p);

            insideDiv.appendChild(contentDiv);
        }

        function mostrarContenidoEspecial() {
            const contenidoEspecial = document.getElementById('contenidoEspecial').innerHTML;

            let title = '';
            let content = '';

            title = 'SOPORTE TÉCNICO DEL AULA VIRTUAL';
            content = 'La Coordinación Académica de Aulas Virtuales proporciona asistencia y soporte técnico al docente y estudiante durante el desarrollo de las clases programadas en el semestre académico, con el fin de atender sus consultas y/o requerimientos.';

            const contentDiv = document.createElement('div');
            contentDiv.classList.add('content');

            const h2 = document.createElement('h2');
            h2.textContent = title;
            h2.classList.add('titulo-nosotros');

            const p = document.createElement('p');
            p.textContent = content;
            p.classList.add('parrafo-nosotros');

            contentDiv.appendChild(h2);
            contentDiv.appendChild(p);

            const insideDiv = document.querySelector('.inside');
            insideDiv.innerHTML = contenidoEspecial;
        }
    </script>

    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--feather.min.js-->
    <script src="assets/js/feather.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--slick.min.js-->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>
</body>

</html>