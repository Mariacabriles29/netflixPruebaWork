
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<meta name="robots" content="noindex, nofollow, noarchive">
   <title>Transacción Rechazada</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo GEO_PATH; ?>/thank-you/css/bootstrap.min.css" rel="stylesheet">

    <!-- Startup CSS -->
    <link href="<?php echo GEO_PATH; ?>/thank-you/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="elements/js/html5shiv.js"></script>
  <script src="elements/js/respond.min.js"></script>
<![endif]-->

    <!-- Custom Google Font : Montserrat (Choose other: http://www.google.com/fonts/ ) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <style>
    .light .masthead {
        background: none!important;
    }
    </style>

</head>

<body class="light">

    <!-- Header Starts -->
    <main id="top" class="masthead" role="main">
        <div class="container">
            <!-- Startup Logo -->
            <div class="logo">
                <a href="#" ><img style="width: 15%;" src="images/error.png" alt="Error Icon"></a>
            </div>
            <h5 class="main-title" style="font-weight:bolder;">Transacción Rechazada</h5>
            <!-- Hero Title -->
            <h1 class="main-title"><?php if (@$_GET['message']) {echo @$_GET['message'];} else {echo "algo salió mal!";}?> </h1>
            <!-- Sub Title -->
            <h4 class="sub-title">Verifique y corrija sus datos haciendo clic en el botón de abajo</h4>

        </div>
		<form class='pspPaymentForm' id="datos">
				<div class="form--control-holder">


					<div class="form--control-wrapper">
                    <a class="btn" href="<?php echo $BASE_URL; ?>/index.php?currency=<?php echo strtolower($_GET['currency']); ?>&affiliate_id=<?php echo strtolower($_GET['affiliate_id']); ?>&lp=<?php echo strtolower($_GET['lp']); ?>" style="background: #e54243;color: white" id="reintentar"> Intenta nuevamente </a>


					</div>



				</div>
			</form>
    </main>
    <!-- //   Header Ends -->


    <!-- Container -->
    <div class="container">
        <section class="row breath">
            <div class="col-md-12 footerlinks">
                <p>&copy; 2024 Todos los derechos reservados</p>
            </div>
        </section>
        <!-- // End Client Logos -->

    </div>
    <!-- // Container Ends -->

    <!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/planes.js"></script>
</body>

</html>