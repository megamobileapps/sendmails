<?php
require 'vendor/autoload.php';

use Aws\Ses\SesClient;


$client = SesClient::factory(array('region' => 'us-east-1'));

$html_data_1_10_2014 = "
<html>
<body>
    <table align='center' cellspacing = 0 border=0>
    
        <tr align='center'><td>
        <font size='-1' color='silver'><br>
                If you are not able to view this mailer properly, please
                <a href='http://www.uptoschoolworksheets.com/promos/dussheraUTSW.html?dusshera14UTSW=suruceria@indusworldschool.com' 
                title='A stupendous 30% Off on UpToSchoolWorksheets'>
                Click Here            
                </a></font><br/>
                This email is to inform you that we are offering a 30% Off on our worksheets for English, Hindi, Maths, Science, Social Studies
                developed as per the syllabus of your child.<br/>
                <a href='http://www.uptoschoolworksheets.com?30pcDiscount=suruceria@indusworldschool.com' 
                title='A stupendous 30% Off on UpToSchoolWorksheets'>
                <img src='http://www.uptoschoolworksheets.com/promos/dusshera.jpg'  alt='A stupendous 30% Off on UpToSchoolWorksheets'  
                        border='1'
                        title = 'A stupendous 30% Off on UpToSchoolWorksheets'
                        width='600' height='523' />
                </a>
        </td></tr>
        <tr>
            <td>
                <font size='-1' color='silver'>You are either a register user with uptoschoolworksheets  or were 
                contacted as part of our ongoing campaign.<br> 
                If you are not interested in receiving our alert and want to unsubscribe reply with subject 'unsubscribe'.</font>
            </td>
        </tr>
    </table>    

</body>
</html>
";

$html_body='<h1> hello World-------</h1>
	   <img src="http://www.uptoschoolworksheets.com/images/banner4.jpg" alt="logo">

	';
$result = $client->sendEmail(array(
    // Source is required
    'Source' => 'pkgoel74@gmail.com',
    // Destination is required
    'Destination' => array(
        'ToAddresses' => array( 'goel74@yahoo.com' ),
        'CcAddresses' => array(),
        'BccAddresses' => array(),
    ),
    // Message is required
    'Message' => array(
        // Subject is required
        'Subject' => array(
            // Data is required
            'Data' => 'My first mail from aws. Amazon web service for mass mail',
            'Charset' => 'ISO-8859-1',
        ),
        // Body is required
        'Body' => array(
            'Text' => array(
                // Data is required
                'Data' => 'Hellow world!',
                'Charset' => 'ISO-8859-1',
            ),
            'Html' => array(
                // Data is required
                'Data' => $html_data_1_10_2014,
                'Charset' => 'ISO-8859-1',
            ),
        ),
    ),
    'ReplyToAddresses' => array('pkgoel74@gmail.com'),
    'ReturnPath' => 'pkgoel74@gmail.com',
));
?>
