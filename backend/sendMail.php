<?php
    include_once('PHPMailer/PHPMailer.php');
    include_once('PHPMailer/SMTP.php');
    include_once('PHPMailer/Exception.php');
    $email = $_POST["email"];
    $mail = new PHPMailer\PHPMailer\PHPMailer(); // create a new object
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "trainersclubdummy@gmail.com"; // GMAIL username
    $mail->Password = "manvi@123"; // GMAIL password
    //Typical mail data
    $mail->AddAddress($email);
    //$mail->AddCC('jain4manvi@gmail.com');
    $mail->SetFrom('trainersclubdummy@gmail.com','Trainer Club');
    $mail->Subject = "TC - Privilege membership Plan with Fees";
    $mail->Body = "<h4>TC - Privilege membership Plan with Fees</h4><br><table border='1'>
        <tr>
            <th>TC - Privilege membership Plan with Fees</th>
            <th>Free Enrollment</th>
            <th>Visible to client for booking with basic info. & booking calendar</th>
            <th>Can apply on job posts</th>
            <th>Visible to clients with full profile page, picture & demo video</th>
            <th>Can promote ongoing events, upload videos and images</th>
            <th>Can book TC - Training facilities at discounted rates</th>
            <th>Support to create Signature program and Global Promotion</th>
            <th>Free Participation in Open mic events & get paid for any training services</th>
        </tr>
        <tr>
            <td>FREE PLAN</td><td>YES</td><td>YES</td>
            <td>YES</td><td>No</td><td>No</td>
            <td>No</td><td>No</td><td>No</td>
        </tr>
        <tr>
            <td>TC – Basic – Rs. 6000/- Yearly</td><td>YES</td>
            <td>YES</td><td>YES</td><td>YES</td><td>No</td>
            <td>No</td><td>No</td><td>No</td>
        </tr>
        <tr>
            <td>TC – Star – Rs. 15,000/- Yearly</td><td>YES</td>
            <td>YES</td><td>YES</td><td>YES</td><td>YES</td>
            <td>YES</td><td>No</td><td>No</td>
        </tr>
        <tr>
            <td>TC – Sun – Rs. 25,000/- Yearly</td><td>YES</td>
            <td>YES</td><td>YES</td><td>YES</td><td>YES</td>
            <td>YES</td><td>YES</td><td>YES</td>
        </tr>
    </table>
    <br><br>
    <p>Thanks And Regards,</p>
    <p>www.trainerclub.in</p>
    ";
    $mail->IsHTML(true);
    $mail->WordWrap = 50;
    $mail->Priority = 1;
    try{
        $mail->Send();
        echo "Please check your mail for plan details!";
    } catch(Exception $e){
        //Something went bad
        echo "Fail - " . $mail->ErrorInfo;
    }

?>