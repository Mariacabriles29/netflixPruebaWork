<?php

$lang = isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2) : '';
if (isset($_GET['lang'])) {
    if (!empty($_GET['lang'])) {
        $lang = $_GET['lang'];
    }
}
if($lang == 'no' || $lang == 'nn'){
    $lang = 'nb';
}
if($lang == 'ca'){
    $lang = 'es';
}
if($lang == 'ko'){
    $lang = 'kr';
}
//   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
//,'bg','hi','nl','pl','zh','id'

$acceptLang1 = ['ar','bg','cs','da', 'de', 'el', 'en','es','fi','fr','he','hr','hu','ms','it','ja','kr','nb','nl','pt','pl','ro','ru','sv','tr','zh'];
// echo $lang;
$lang = in_array($lang, $acceptLang1) ? $lang : 'en';

// echo $lang;

$actual_link = "$_SERVER[REQUEST_URI]";

$rrr = strpos($actual_link, 'affiliate_id', 1);


$lin = substr($actual_link, $rrr);
  
    // Constantes iguales para todos los idiomas
  
    $NAME='RegularDrive';

    


    
    switch($lang) {

        case 'ar':
           
            // asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;

        case 'bg':
            
            //asterisco

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;


        case 'cs':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;


        case 'da':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'niogfyrre med nioghalvfems euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'niogfyrre med nioghalvfems amerikanske dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'niogfyrre pund og nioghalvfems pence';

            }
            
            //asterisco
            $ASTERISCO='*Brug af PRØVEPERIODEN indebærer, at du opretter et todages abonnement på regulardrive.net-tjenesten til den pris, der er angivet i forbindelse med kampagnen. Hvis du ikke opsiger din konto efter de to dage, vil du blive opkrævet for et premium-abonnement, som  koster '.$MON_F.' om måneden. Du finder al denne information samt betingelserne for abonnementet i vores vilkår og betingelser.';
            //footer
            
            // Footer
            $FOOT_WHAT='Hvad er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en cloud-baseret lagringstjeneste med et månedligt abonnement, som giver abonnenterne adgang til en platform, hvor de kan uploade, lagre, administrere og downloade deres filer.';
            $FOOT_COMMIT="Hvad forpligter jeg mig til?";
            $FOOT_COMMIT_TEXT="Brug af PRØVEPERIODEN indebærer, at du opretter et premium-abonnement på regulardrive.net-tjenesten. Hvis du ikke opsiger din konto efter prøveperioden på to dage, skal du betale den månedlige takst for premium-abonnementet. Abonnementets betingelser kan ses her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Vilkår og betingelser for tjenesten</a>. Ubesværet opsigelse. Hvis du ikke opsiger abonnementet i løbet af prøveperioden, skal du betale den månedlige takst for abonnementet, og det bliver automatisk fornyet hver måned, indtil du opsiger det. Abonnementet koster ".$MON_F." om måneden, og du kan betale med kredit- eller debetkort.";
            $FOOT_WIN="Hvordan vinder jeg?"; 
            $FOOT_WIN_TEXT="Med en premium-konto deltager du i lodtrækningen om dette kampagneprodukt (".$PRODU."), hvor vi udtrækker en tilfældig vinder blandt vores aktive brugere. Den næste lodtrækning finder sted den 31/12/2024 blandt alle aktive brugere. Få flere oplysninger i afsnittet Vilkår og betingelser for tjenesten. Vinderen bliver kontaktet vedr. forsendelse eller levering af præmien. Kampagnen er ikke tilknyttet ".$EMPRE." eller dennes partnere.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;
        case 'de': 
            
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'Neunundvierzig mit neunundneunzig Euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'Neunundvierzig Pfund und neunundneunzig Pence';

            }elseif($PRICE == '£3'){

                $MON_F = 'Neunundvierzig mit neunundneunzig amerikanischen Dollar';

            }
            //asterisco
            $ASTERISCO='*Mit der Nutzung der PROBE abonnieren Sie den Service regulardrive.net für zwei Tage zum in der Aktion angegebenen Preis. Wenn Sie Ihr Konto nicht innerhalb von zwei Tagen kündigen, wird Ihnen alle 30 Tage die Gebühr für das Premium-Konto in Höhe von '.$MON_F.' in Rechnung gestellt In den Allgemeinen Geschäftsbedingungen finden Sie die vollständigen Informationen und Bedingungen für das Abonnement.';
            
            // Footer
            
            $FOOT_WHAT="Was ist regulardrive.net?";
            $FOOT_WHAT_TEXT="Es ist ein monatliches Abonnement eines Cloud-Speicherdienstes, der den Mitgliedern Zugang zu einer Plattform bietet, auf die sie ihre Dateien hoch laden, diese speichern, verwalten und herunterladen können";
            $FOOT_COMMIT="Wozu verpflichte ich mich?";
            $FOOT_COMMIT_TEXT='Mit der Nutzung von TRIAL abonnieren Sie den Premium-Service regulardrive.net. Wenn Sie Ihr Konto nicht kündigen, müssen Sie nach zwei Probetagen jeden Monat den Wert des Premium-Abonnements bezahlen. Die Abonnementbedingungen finden Sie hier: <a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Nutzungsbedingungen</a>. Einfache Abmeldung. Wenn Sie Ihr Abonnement während der Probezeit nicht kündigen, müssen Sie Ihr Abonnement jeden Monat bezahlen und es wird automatisch monatlich verlängert, bis Sie Ihr Abonnement kündigen. Das Abonnement kostet '.$MON_F.' pro Monat und ist mit einer Kredit- oder Debitkarte zu zahlen.';
            $FOOT_WIN="Wie kann ich gewinnen?";
            $FOOT_WIN_TEXT="Mit Ihrem Premium-Konto nehmen Sie an der Verlosung dieses Werbeartikels (".$PRODU.") teil. Der Gewinner wird nach dem Zufallsprinzip aus der Gruppe aller aktiven Nutzer ausgewählt. Die nächste Ziehung aus der Gruppe aller aktiven Nutzer findet am 31.12.2024 statt. Weitere Informationen finden Sie im Abschnitt Nutzungsbedingungen. Zwecks Versand oder Lieferung des Preises kontaktieren wir den Gewinner. Wir stehen nicht in Verbindung mit ".$EMPRE." und seinen Partnern.";


            $FOOT_SOCIAL="Häufig Gestellte Fragen";
            $FOOT_SUPPORT="Unterstützung";
            $FOOT_PRIVACY="Datenschutzerklärung";
            $FOOT_TERMS="Allgemeine Geschäftsbedingungen";
            $FOOT_PRE="Häufig gestellte Fragen";
            $FOOT_CONTACT="Kontakt";
            $FOOT_CANCEL="Mitgliedschaft kündigen";
            $FOOT_RIGHTS="© 2024 Alle Rechte vorbehalten - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Alle rechte vorbehalten";
            break;
        case 'el':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";   
            break;
        case 'en':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";      
            break;
        case 'es':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'cuarenta y nueve con noventa y nueve euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'cuarenta y nueve con noventa y nueve dólares americanos';

            }elseif($PRICE == '£3'){

                $MON_F = 'cuarenta y nueve libras con noventa y nueve peniques';

            }
              
            //asterisco
            $ASTERISCO='*Al usar la PRUEBA, se suscribirá al servicio de regulardrive.net durante 2 días al precio que indica la promoción. Después de 2 días, si no cancela su cuenta, se le cobrará el precio de la cuenta premium que tendrá un costo de '.$MON_F.' cada 30 días. Puede encontrar toda esta información y condiciones para la suscripción en Términos y condiciones.';
            // Footer
            $FOOT_WHAT="¿Qué es regulardrive.net?";
            $FOOT_WHAT_TEXT="Es un servicio de almacenamiento en la nube por suscripción mensual que proporciona a sus miembros acceso a su plataforma donde pueden cargar, almacenar, administrar, descargar sus ficheros.";
            $FOOT_COMMIT="¿A qué me comprometo?";
            $FOOT_COMMIT_TEXT='Al usar TRIAL, usted se suscribe al servicio premium de regulardrive.net. Después de dos días de prueba, si no cancela su cuenta, tendrá que pagar el valor de la suscripción premium cada mes. Las condiciones de suscripción están disponibles aquí: <a id="tos1" href="'. $TOS3 .'" target="_blank">Términos y Condiciones</a> . Fácil desuscripción. Si no cancela la suscripción durante su período de prueba, tendrá que pagar su suscripción cada mes y se renovará mensualmente automáticamente hasta que cancele su suscripción. La suscripción cuesta '.$MON_F.' por mes, pagaderos con tarjeta de crédito o débito.';
            $FOOT_WIN="¿Qué esta página web?";
            $FOOT_WIN_TEXT="Con tu cuenta premium, participas en el sorteo de este producto promocional (".$PRODU.") seleccionando al azar al ganador de entre uno de sus usuarios activos. El próximo sorteo se realizará el 31-12-2024 entre todos los usuarios activos. Más información en la sección de Condiciones de Servicio. Se contactará con el ganador para proceder con el envío o entrega del premio. No tenemos conexión con ".$EMPRE." y sus socios.";
            
            $FOOT_SUPPORT="Soporte";
            $FOOT_PRIVACY="Política de privacidad";
            $FOOT_TERMS="Términos y condiciones";
            $FOOT_PRE="Preguntas Más Frecuentes";
            $FOOT_CONTACT="Contacto";
            $FOOT_CANCEL="Cancelar la membresía";
            $FOOT_RIGHTS="© 2024 Todos los derechos reservados - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Todos los derechos reservados";
            break;
        case 'fi':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän euroa';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'neljäkymmentäyhdeksän yhdeksänkymmentäyhdeksän Yhdysvaltain dollaria';

            }elseif($PRICE == '£3'){

                $MON_F = 'neljäkymmentäyhdeksän puntaa ja yhdeksänkymmentäyhdeksän penniä';

            }
            
             //asterisco
             $ASTERISCO='* Osallistumalla tähän KOKEILUUN tilaat regulardrive.net-palvelun 2 päiväksi tarjouksessa ilmoitettuun hintaan. Mikäli et peru tilaustasi 2 päivän kokeilun jälkeen, se jatkuu premium-tilin hinnalla, jolloin maksat siitä '.$MON_F.' 30 päivää kohden. Kaikki tilaukseen liittyvät tiedot ja ehdot ovat saatavilla Käyttöehdot-osiossa.';

             // Footer
             $FOOT_WHAT='Mikä regulardrive.net on?';
             $FOOT_WHAT_TEXT='Se on kuukausittaisilla tilauksilla varustettu verkkosivutiedostojen / aloitussivujen luomispalvelu, joka tarjoaa jäsenilleen pääsyn alustalle, jolla he voivat suunnitella ja luoda verkkosivujensa tiedostoja. Luo helposti verkkosivuja / aloitussivuja tai portfolioita. * Työkalua käytetään tiedostojen luomiseen. Jos sinulla on online-verkkosivu, sinun on ladattava tiedostot omaan palvelimellesi / isäntään.';
             $FOOT_COMMIT="Sitoudunko minä mihinkään?";
             $FOOT_COMMIT_TEXT='Osallistumalla KOKEILUUN tilaat regulardrive.net-sivuston premium-palvelun. Jos et peru tilaustasi kahden&nbsp;päivän kokeilun jälkeen, maksat premium-palvelun kuukausittaisen hinnan. Tilauspalvelun ehdot ovat saatavilla tässä:&nbsp;<a id="tos1" href="'. $TOS3 .'" style="color: lightgray;" target="_blank">Käyttöehdot</a>. Peru tilauksesi helposti ja vaivatta. Jos et peru tilaustasi kokeilujakson aikana, maksat siitä kuukausittaisen hinnan. Palvelun tilaus uusiutuu automaattisesti joka kuukausi, kunnes irtisanot sen. Tilaus maksaa kuukaudessa '.$MON_F.', ja se voidaan maksaa luotto- tai pankkikortilla.';
             $FOOT_WIN="Kuinka voin voittaa?";
             $FOOT_WIN_TEXT="Premium-tilin haltijana osallistut mainostuotteen tai -palvelun (".$PRODU.") arvontaan, jossa voittaja arvotaan kaikista aktiivisista käyttäjistämme. Seuraava arvonta järjestetään 31. joulukuuta 2024 ja siihen osallistuvat kaikki aktiiviset käyttäjät. Lisätietoa löytyy Käyttöehdot-osiosta. Otamme yhteyttä voittajaan sopiaksemme palkinnon toimituksesta. Meillä ei ole yhteyksiä ".$EMPRE." eikä sen liikekumppaneihin.";
           
             $FOOT_SUPPORT="Support";
             $FOOT_PRIVACY="Privacy Policy";
             $FOOT_TERMS="Terms of Conditions";
             $FOOT_PRE="Frequently Asked Questions";
             $FOOT_CONTACT="Contact";
             $FOOT_CANCEL="Cancel membership";
             $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
             $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;
        case 'fr':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarante-neuf avec quatre-vingt-dix-neuf dollars américains';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarante-neuf livres et quatre-vingt-dix-neuf pence';

            }
           
            // ASTERISCOS
            $ASTERISCO='*En utilisant le TRIAL, vous serez abonné au service premium de regulardrive.net d’une valeur de '.$MON_F.' par mois. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium. Vous pouvez à tout moment annuler votre période d’essai. Plus d’informations au sujet de l’abonnement dans la section Conditions générales.';
            
            // Footer
            $FOOT_WHAT="Qu'est-ce que regulardrive.net?";
            $FOOT_WHAT_TEXT="Il s'agit d'un service de stockage en cloud à abonnement mensuel qui permet à ses membres d'accéder à sa plate-forme où ils peuvent télécharger, stocker, gérer et télécharger leurs fichiers.";
            $FOOT_COMMIT="A quoi je m’engage?";
            $FOOT_COMMIT_TEXT="En utilisant TRIAL, vous vous abonnez au service premium sur regulardrive.net. Passés les deux jours d’essai, si vous n’annulez pas votre compte, vous devrez payer la valeur de l’abonnement premium tous les mois. Les conditions d’abonnement sont disponibles ici : <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Conditions de service</a>. Désinscription facile. Si vous n’annulez pas l’abonnement pendant votre période d’essai, vous devrez payer votre abonnement tous les mois et il sera automatiquement renouvelé mensuellement jusqu'à ce que vous résiliez votre abonnement. L’abonnement coûte ".$MON_F." par mois, payables par carte de crédit ou de débit.";
            $FOOT_WIN="Comment puis-je gagner?";
            $FOOT_WIN_TEXT="Avec votre compte premium, vous participez au tirage au sort pour ce produit promotionnel (".$PRODU.") en sélectionnant au hasard le gagnant parmi l’un de ses utilisateurs actifs. Le prochain tirage aura lieu le 31-12-2024 parmi tous les utilisateurs actifs. Plus d'informations dans la section Conditions d'utilisation. Le gagnant sera contacté pour procéder à l'expédition ou à la livraison du prix. Nous n'avons aucun lien avec ".$EMPRE." et ses partenaires.";

            $FOOT_SOCIAL="Questions Fréquentes";
            $FOOT_SUPPORT="Soutien";
            $FOOT_PRIVACY="Politique de confidentialité";
            $FOOT_TERMS="termes et conditions";
            $FOOT_PRE="Foire aux questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Annuler l'adhésion";
            $FOOT_RIGHTS="© 2024 Tous droits réservés - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tous les droits réservés";
         break;
        case 'he':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";     
            break;
        case 'hr':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;
        case 'hu':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";     
            break;
        case 'ms':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;
        case 'it':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarantanove euro e novantanove centesimi';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarantanove dollari americani e novantanove centesimi';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarantanove sterline e novantanove pence';

            }
           
            // ASTERISCOS
            $ASTERISCO='*Usufruendo della PROVA risulti iscritto al servizio regulardrive.net per 2 giorni al prezzo indicato nella promozione. Dopo 2 giorni, se non cancelli il tuo account, ti verrà addebitato il prezzo dell\'account premium con un costo di '.$MON_F.' ogni 30 giorni. Tutte queste informazioni e condizioni di iscrizione sono riportate nei termini e condizioni.';
            
            // Footer
            $FOOT_WHAT="Cos'è regulardrive.net?";
            $FOOT_WHAT_TEXT="È un servizio di cloud storage che fornisce ai rispettivi membri previo versamento di un abbonamento mensile l'accesso alla propria piattaforma dove poter caricare, memorizzare, gestire e scaricare file.";
            $FOOT_COMMIT="Che cosa mi impegno a fare?";
            $FOOT_COMMIT_TEXT="Nel momento in cui usufruisci della prova TRIAL ti iscrivi al servizio premium di regulardrive.net. Dopo due giorni di prova, se non cancelli il tuo account, dovrai pagare il valore dell'abbonamento premium ogni mese. Le condizioni di iscrizione sono disponibili qui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termini del servizio</a>. Facile disdetta dell'abbonamento. Se non cancelli il tuo abbonamento durante il periodo di prova, dovrai pagare l'abbonamento ogni mese che si rinnoverà automaticamente mensilmente fino alla cancellazione del medesimo. L'abbonamento costa ".$MON_F." al mese da versare a mezzo carta di credito o di debito.";
            $FOOT_WIN="Come faccio a vincere?";
            $FOOT_WIN_TEXT="Con il tuo account premium, partecipi all'estrazione di questo prodotto/servizio promozionale (".$PRODU."). Il vincitore sarà selezionato a caso tra gli utenti attivi. La prossima estrazione avrà luogo il 31/12/2024 tra tutti gli utenti attivi. Ulteriori informazioni nella sezione Condizioni di servizio. Il vincitore verrà contattato per procedere alla spedizione o alla consegna del premio. Non abbiamo alcun legame con ".$EMPRE." e i rispettivi partner.";

            $FOOT_SOCIAL="Domande Frequenti";
            $FOOT_SUPPORT="Supporto e supporto";
            $FOOT_PRIVACY="Informativa sulla privacy";
            $FOOT_TERMS="Termini e condizioni";
            $FOOT_PRE="Domande frequenti";
            $FOOT_CONTACT="Contattaci";
            $FOOT_CANCEL="Annullare menbresia";
            $FOOT_RIGHTS="© 2024 Tutti i diritti riservati - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 Tutti i diritti riservati";
            break;
        case 'ja':
            
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;
        case 'kr':
            
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";        
            break;
        case 'nb':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'ført-ni euro og nitti-ni cent';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'førti-ni dollar og nitti-ni amerikanske cent';

            }elseif($PRICE == '£3'){

                $MON_F = 'førti-ni pund og nitti-ni pence';

            }

            $ASTERISCO='*Når du benytter deg av PRØVE, vil du abonnere på tjenesten regulardrive.net i 2 dager for prisen som er oppgitt i kampanjen. Etter 2 dager vil du, hvis du ikke kansellerer kontoen din, bli belastet prisen for premiumkonto, ssom koster '.$MON_F.' hver 30. dag. Du finner all denne informasjonen og abonnementsvilkårene under Tjenestevilkår.';
            
            // Footer
            $FOOT_WHAT='Hva er regulardrive.net?';
            $FOOT_WHAT_TEXT='Det er en tjeneste for lagring i skyen med månedsabonnement. Det gir medlemmene adgang til en plattform der de kan laste opp, lagre, administrere og laste ned filene sine.';
            $FOOT_COMMIT="Hvilke forpliktelser påtar jeg meg?";
            $FOOT_COMMIT_TEXT="Ved å benytte deg av PRØVE, blir du abonnent på premiumtjenesten til regulardrive.net. Hvis du etter to prøvedager ikke kansellerer kontoen din, må du betale prisen på premiumabonnementet hver måned. Abonnementsvilkårene finner du her: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Tjenestevilkår</a>. Enkel oppsigelse av abonnementet. Hvis du ikke sier opp abonnementet i løpet av prøveperioden, må du betale for abonnementet hver måned. Abonnementet fornyes automatisk til du sier det opp. Abonnementet koster ".$MON_F." per måned og betaler med kreditt- eller debetkort.";
            $FOOT_WIN="Hvordan kan jeg vinne?"; 
            $FOOT_WIN_TEXT="Når du åpner en premiumkonto, blir du med i trekningen av dette kampanjeproduktet (".$PRODU."). Vinneren trekkes ut tilfeldig blant de aktive brukerne. Neste trekning finner sted 31.12.2023. Alle aktive brukere har muligheten til å vinne. Du finner nærmere informasjon i seksjonen Tjenestevilkår. Vinneren vil bli kontaktet slik at vi kan sende eller levere premien. Vi har ingen forbindelse til  ".$EMPRE." og deres samarbeidspartnere.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;
        case 'nl':
            
            // asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";     
            break;
        case 'pt':
            
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'quarenta e nove euros e noventa e nove cêntimos';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'quarenta e nove dólares americanos e noventa e nove cêntimos';

            }elseif($PRICE == '£3'){

                $MON_F = 'quarenta e nove libras e noventa e nove cêntimos';

            }

            //asterisco
            $ASTERISCO='*Ao utilizar a versão EXPERIMENTAL, está a subscrever o serviço da regulardrive.net durante 2 dias ao preço indicado na promoção. Após 2 dias, se não cancelar a sua conta, será cobrado o valor da conta premium, que custa '.$MON_F.' de 30 em 30 dias. Pode encontrar todas as informações e condições de subscrição nos Termos e condições.';
            
            // Footer
            $FOOT_WHAT='O que é regulardrive.net?';
            $FOOT_WHAT_TEXT='É um serviço de armazenamento em nuvem de assinatura mensal que permite aos seus membros aceder à sua plataforma, onde podem carregar, armazenar, gerir e descarregar os seus ficheiros.';
            $FOOT_COMMIT="Qual o meu compromisso?";
            $FOOT_COMMIT_TEXT="Ao utilizar a versão TRIAL, está a subscrever o serviço premium da regulardrive.net. Após dois dias de prova, se não cancelar a sua conta, será cobrado o valor da assinatura premium todos os meses. As condições de assinatura estão disponíveis aqui: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Termos de serviço</a>. Cancelamento fácil da assinatura. Se não cancelar a assinatura durante o período experimental, terá que pagar a sua assinatura todos os meses e será renovada mensalmente de forma automática até que cancele a sua assinatura. A assinatura custa ".$MON_F." por mês, pagáveis com cartão de crédito ou débito.";
            $FOOT_WIN="Como posso ganhar?";
            $FOOT_WIN_TEXT="Com a sua conta premium, participa no sorteio deste produto/serviço promocional (".$PRODU."), selecionando aleatoriamente o vencedor entre um dos seus utilizadores ativos. O próximo sorteio será realizado em 31/12/2024 entre todos os utilizadores ativos. Mais informações na secção Condições de serviço. O vencedor será contactado para proceder ao envio ou à entrega do prémio. Não temos ligação à ".$EMPRE." nem aos seus parceiros.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
         break;
        case 'pl':
           
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'czterdzieści dziewięć euro dziewięćdziesiąt dziewięć centów';
            
            }elseif($PRICE == '3USD' || $PRICE == '$3'){
            
                $MON_F = 'czterdzieści dziewięć dolarów amerykańskich dziewięćdziesiąt dziewięć centów';
            
            }elseif($PRICE == '£3'){
            
                $MON_F = 'czterdzieści dziewięć funtów dziewięćdziesiąt dziewięć pensów';
            
            }
            

            $ASTERISCO='*Korzystając z niniejszej wersji próbnej subskrybujesz usługę regulardrive.net przez 2 dni w cenie promocyjnej. Jeżeli po 2 dniach nie anulujesz subskrypcji, co 30 dni będzie od Ciebie pobierana kwota należna za korzystanie z konta premium w wysokości '.$MON_F.'. W Regulaminie znajdziesz wszystkie informacje i warunki subskrypcji.';
            
            // Footer
            $FOOT_WHAT='Co to jest regulardrive.net?';
            $FOOT_WHAT_TEXT='Jest to usługa do tworzenia plików stron internetowych/stron docelowych drogą miesięcznej subskrypcji, która zapewnia swoim członkom dostęp do platformy, na której mogą projektować i tworzyć pliki stron internetowych. W łatwy sposób twórz strony internetowe/strony docelowe lub foldery. *Narzędzie służy do tworzenia plików. Żeby stworzyć stronę internetową online musisz załadować pliki do Twojego dostawcy/hosta.  ';
            $FOOT_COMMIT="Do czego mnie zobowiązuje?";
            $FOOT_COMMIT_TEXT='Korzystając z niniejszej wersji próbnej subskrybujesz usługę premium regulardrive.net. W przypadku nieusunięcia konta po dwóch dniach próby będziesz zobowiązany do comiesięcznej zapłaty za subskrypcję wersji premium. Warunki subskrypcji są dostępne tutaj: <a id="tos1" href="'. $TOS3 .'" target="_blank" style="color:#555 !important;">Warunki świadczenia usługi.</a>. Łatwa rezygnacja z subskrypcji. Jeżeli nie zrezygnujesz z subskrypcji podczas okresu próbnego, będzie się ona automatycznie odnawiała co miesiąc i będziesz zobowiązany do pokrycia jej kosztów do momentu rezygnacji. Subskrypcja kosztuje '.$MON_F.' na miesiąc, płatność kartą kredytową lub debetową.';
            $FOOT_WIN="Jak mogę wygrać?";
            $FOOT_WIN_TEXT="Za pomocą konta premium możesz wziąć udział w losowaniu tego promocyjnego produktu/usługi (".$PRODU."), losowo wybierając zwycięzcę spośród jednego z jego aktywnych użytkowników. Kolejne losowanie odbędzie się 31 grudnia 2024 roku spośród wszystkich aktywnych użytkowników. Więcej informacji w sekcji Warunki usługi. Skontaktujemy się ze zwycięzcą, aby móc wysłać lub dostarczyć nagrodę. Nie mamy powiązań ze spółką ".$EMPRE." i jej partnerami.";


            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";     
            break;
        case 'ro':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";      
            break;
            
        case 'ru':
           
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";      
            break;
        case 'sv':

            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'fyrtionio med nittionio Euro';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'fyrtionio med nittionio amerikanska dollar';

            }elseif($PRICE == '£3'){

                $MON_F = 'fyrtionio pund och nittionio pence';

            }
           
            //asterisco
            $ASTERISCO='*Genom att använda TRIAL inleder du en prenumeration på tjänsten regulardrive.net i 2 dagar för det pris som anges i kampanjen. Om du inte säger upp din prenumeration efter 2 dagar kommer du att debiteras du '.$MON_F.' var 30:e dag. Du hittar all information och alla villkor för prenumerationen i avsnittet Villkor.';
                
            // Footer
            $FOOT_WHAT='Vad är regulardrive.net?';
            $FOOT_WHAT_TEXT='Det är en månatlig molnlagringstjänst som ger användarna tillgång till tjänstens plattform, där de kan ladda upp, lagra, hantera och ladda ner sina filer.';
            $FOOT_COMMIT="Vad åtar jag mig?";
            $FOOT_COMMIT_TEXT="Genom att använda TRIAL inleder du en prenumeration på premium-tjänsten regulardrive.net. Om du inte säger upp tjänsten efter 2 dagars provperiod inleds en premium-prenumeration, för vilken du måste betala 1 gång i månaden. Du hittar prenumerationsvillkoren här: <a id='tos1' href='". $TOS3 ."' style='color: lightgray;' target='_blank'>Villkor</a>. Enkel prenumeration. Om du inte säger upp din prenumeration under provperioden inleds en betalprenumeration. Prenumerationen förnyas automatiskt varje månad tills du säger upp den. Prenumerationen kostar ".$MON_F." per månad och betalas med kredit- eller betalkort.";
            $FOOT_WIN="Hur kan jag vinna?";
            $FOOT_WIN_TEXT="Med din premium-prenumeration deltar du i dragningen om denna kampanjprodukt (".$PRODU."), där en slumpmässig vinnare dras bland aktiva användare. Nästa dragning sker den 2023-12-31 bland alla aktiva användare. Mer information finns i avsnittet Villkor för tjänsten. Vinnaren kontaktas av oss för försändelse och utdelning av priset. Vi har ingen anknytning till ".$EMPRE." och dess partners.";
            
            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";
            break;
        case 'tr':
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";    
            break;
        case 'zh':
           
            // asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";      
            break;

        default:
            
            //asterisco
            if($PRICE == '3€' || $PRICE == '€3'){

                $MON_F = 'forty-nine with ninety-nine euros';

            }elseif($PRICE == '3USD' || $PRICE == '$3'){

                $MON_F = 'forty-nine with ninety-nine american dollars';

            }elseif($PRICE == '£3'){

                $MON_F = 'forty-nine pounds and ninety-nine pence';

            }

            $ASTERISCO='*Using the TRIAL, you will subscribe to the regulardrive.net service for 2 days at the price indicated in the promotion. After 2 days, if you do not cancel your account, you will be charged the price of the premium account which will cost '.$MON_F.' every 30 days. You can find all this information and conditions for subscription in Terms and Conditions.';
            // Footer
            $FOOT_WHAT='What is regulardrive.net?';
            $FOOT_WHAT_TEXT='It is a monthly subscription cloud storage service that provides its members access to its platform where they can upload, store, manage, download their files.';
            $FOOT_COMMIT="What do I commit to?";
            $FOOT_COMMIT_TEXT="By using TRIAL, you subscribe to the regulardrive.net premium service. After two trial days, if you do not cancel your account, you will have to pay the value of the premium subscription each month. The subscription conditions are available here: <a id='tos1' href='". $TOS3 ."' target='_blank'>Terms of Service</a>. Easy unsubscription. If you do not cancel your subscription during your trial period, you will have to pay your subscription each month and it will renew automatically monthly until you cancel your subscription. The subscription costs ".$MON_F." per month, payable by credit or debit card.";
            $FOOT_WIN="How can I win?"; 
            $FOOT_WIN_TEXT="With your premium account, you participate in the draw for this promotional product (".$PRODU.") by randomly selecting the winner from one of its active users. The next draw will take place on 31-12-2024 among all active users. More information in the Terms of Service section. The winner will be contacted to proceed with the shipment or delivery of the prize. We have no connection with ".$EMPRE." and its partners.";
            

            $FOOT_SUPPORT="Support";
            $FOOT_PRIVACY="Privacy Policy";
            $FOOT_TERMS="Terms of Conditions";
            $FOOT_PRE="Frequently Asked Questions";
            $FOOT_CONTACT="Contact";
            $FOOT_CANCEL="Cancel membership";
            $FOOT_RIGHTS="© 2024 All rights reserved - PCG MARKETING EVOLUTION LTD Strovolou 77, Strovolos Centre, 2nd floor, Flat/Office 301, 2018 Nicosia Cyprus HE 394169 VAT: CY10394169Y";
            $FOOT_RIGHTS_2="&copy; 2024 All rights reserved";      
            break;


    }

?>