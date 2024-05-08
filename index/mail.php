<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//required files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
if (isset($_POST["email"])) {

  $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;             //Enable SMTP authentication
    $mail->Username   = 'cscodes.lk@gmail.com';   //SMTP write your email
    $mail->Password   = 'zetibzhxgvwwfkah';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    $mail->addAddress('cscodes.lk@gmail.com');     //Add a recipient email  
    $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email

    //Content
    $mail->isHTML(true);               //Set email format to HTML
    $mail->Subject = $_POST["subject"];   // email subject headings
    $message = $_POST["message"]; 
    $mail->Body    = '<!doctype html>
    <html lang="en">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Simple Transactional Email</title>
        <style media="all" type="text/css">

        
        body {
          font-family: Helvetica, sans-serif;
          -webkit-font-smoothing: antialiased;
          font-size: 16px;
          line-height: 1.3;
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
        }
        
        table {
          border-collapse: separate;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
          width: 100%;
        }
        
        table td {
          font-family: Helvetica, sans-serif;
          font-size: 16px;
          vertical-align: top;
        }
   
        
        body {
          background-color: #f4f5f6;
          margin: 0;
          padding: 0;
        }
        
        .body {
          background-color: #f4f5f6;
          width: 100%;
        }
        
        .container {
          margin: 0 auto !important;
          max-width: 600px;
          padding: 0;
          padding-top: 24px;
          width: 600px;
        }
        
        .content {
          box-sizing: border-box;
          display: block;
          margin: 0 auto;
          max-width: 600px;
          padding: 0;
        }
      
        
        .main {
          background: #ffffff;
          border: 1px solid #eaebed;
          border-radius: 16px;
          width: 100%;
        }
        
        .wrapper {
          box-sizing: border-box;
          padding: 24px;
        }
        
        .footer {
          clear: both;
          padding-top: 24px;
          text-align: center;
          width: 100%;
        }
        
        .footer td,
        .footer p,
        .footer span,
        .footer a {
          color: #9a9ea6;
          font-size: 16px;
          text-align: center;
        }
        /* -------------------------------------
        TYPOGRAPHY
    ------------------------------------- */
        
        p {
          font-family: Helvetica, sans-serif;
          font-size: 16px;
          font-weight: normal;
          margin: 0;
          margin-bottom: 16px;
        }
        
        a {
          color: #04DCA4;
          text-decoration: underline;
        }

        
        .btn {
          box-sizing: border-box;
          min-width: 70% !important;
          width: 70%;
        }
        
        .btn > tbody > tr > td {
          padding-bottom: 16px;
        }
        
        .btn table {
          width: auto;
        }
        
        .btn table td {
          background-color: #ffffff;
          border-radius: 4px;
          text-align: center;
        }
        
        .btn a {
          background-color: #ffffff;
          border: solid 2px #04DCA4;
          border-radius: 4px;
          box-sizing: border-box;
          color: #04DCA4;
          cursor: pointer;
          display: inline-block;
          font-size: 16px;
          font-weight: bold;
          margin: 0;
          padding: 12px 24px;
          text-decoration: none;
          text-transform: capitalize;
        }
        
        .btn-primary table td {
          background-color: #04DCA4;
        }
        
        .btn-primary a {
          background-color: #04DCA4;
          border-color: #04DCA4;
          color: #ffffff;
        }
        
        @media all {
          .btn-primary table td:hover {
            background-color: #04DCDC !important;
          }
          .btn-primary a:hover {
            background-color: #04DCDC!important;
            border-color: #04DCDC !important;
          }
        }

        
        .last {
          margin-bottom: 0;
        }
        
        .first {
          margin-top: 0;
        }
        
        .align-center {
          text-align: center;
        }
        
        .align-right {
          text-align: right;
        }
        
        .align-left {
          text-align: left;
        }
        
        .text-link {
          color: #04DCA4 !important;
          text-decoration: underline !important;
        }
        
        .clear {
          clear: both;
        }
        
        .mt0 {
          margin-top: 0;
        }
        
        .mb0 {
          margin-bottom: 0;
        }
        
        .preheader {
          color: transparent;
          display: none;
          height: 0;
          max-height: 0;
          max-width: 0;
          opacity: 0;
          overflow: hidden;
          mso-hide: all;
          visibility: hidden;
          width: 0;
        }
        
        .powered-by a {
          text-decoration: none;
        }
     
        
        @media only screen and (max-width: 640px) {
          .main p,
          .main td,
          .main span {
            font-size: 16px !important;
          }
          .wrapper {
            padding: 8px !important;
          }
          .content {
            padding: 0 !important;
          }
          .container {
            padding: 0 !important;
            padding-top: 8px !important;
            width: 100% !important;
          }
          .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
          }
          .btn table {
            max-width: 70% !important;
            width: 70% !important;
          }
          .btn a {
            font-size: 14px !important;
            max-width: 70% !important;
            width: 70% !important;
          }
        }

        
        @media all {
          .ExternalClass {
            width: 100%;
          }
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
            line-height: 100%;
          }
          .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
          }
          #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
          }
        }
        </style>
      </head>
      <body>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body">
          <tr>
            <td>&nbsp;</td>
            <td class="container">
              <div class="content">
    
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader">INQUIRY. MSG FROM A CLIENT.</span>
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main">
    
                  <!-- START MAIN CONTENT AREA -->
                  <tr>
                    <td class="wrapper">
                      <p>Hi Suwa Medhura Customer Care Service,</p>
                      <p><b>'.$message.'</b></p>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                        <tbody>
                          <tr>
                            <td align="left">
                              <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td> <a href="#" target="_blank">Call To Action</a> </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <p>Applicable only for the Management team of Suwa Medhura Hospital.Above bold text is a Feedback From a client.Take immediate and most appropiate actions according to this matter.</p><br>
                      <pre>Feedback Center</pre>
                      <pre>Suwa Medhura Hospital</pre>
                      <pre>Panadura</pre>
                     
                    </td>
                  </tr>
    
                  <!-- END MAIN CONTENT AREA -->
                  </table>
    
                <!-- START FOOTER -->
              
    
                <!-- END FOOTER -->
                
    <!-- END CENTERED WHITE CONTAINER --></div>
            </td>
            <td>&nbsp;</td>
          </tr>
        </table>
      </body>
    </html>
    '; 
    
    //email message

    // Success sent message alert
    if ($mail->send()) {
      // Send a success response back to the client-side JavaScript
      echo json_encode(array("success" => true));
  } else {
      // Send an error response back to the client-side JavaScript
      echo json_encode(array("success" => false));
  }
   
}
?>