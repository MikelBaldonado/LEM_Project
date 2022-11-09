<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{

    public function sendMail(){
        
        require '../vendor/autoload.php';
        $API_KEY = '4GpPGjpCa0U3imYCwCgUfqrS5Dw4Zz684S9oO3aqxdQ=';
        // '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';
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Headers: *");
      
        if(isset($_POST['sendmail'])){
          $name = $_POST['name'];    
          $emailSender = $_POST['email'];
          $email_id = 'lomejanebabao37@gmail.com';
          $subject = $_POST['subject'];
          $message = $_POST['msg'];
         
      
          $email = new \SendGrid\Mail\Mail();
          $email->setFrom($emailSender, $name);
          $email->setSubject($subject);
          $email->addTo($email_id, $name);
          $email->addContent(
                "text/html", 
                    "<div class='card p5'>
                        <div class='card-body'>
                            <h1>
                                $message
                            </h1>
                        </div> 
                    </div>"
            );

        
        $sendgrid = new \SendGrid($API_KEY);
      
        try {
            $response = $sendgrid->send($email);    
        
            echo "<script>alert('Successfully Sent!');</script>" ;

            return redirect('contact');    
            
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
      
        }


    }
}
