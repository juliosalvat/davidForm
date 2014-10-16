<?
if ($_POST) {
    $FromName = "";
    $FromEmail = "";

    $ToName = "";
    $ToEmail = "";

    $Subject = "Message from DavidConner";
    $Body = "
        First Name: {$_POST['FirstName']}<br/>
        Last Name: {$_POST['LastName']}<br/>
        Company Name: {$_POST['CompanyName']}<br/>
        Direct Number: {$_POST['DirectNumber']}<br/>
        Direct Contact Number: {$_POST['DirectContactNumber']}<br/>
        Email: {$_POST['Email']}<br/>
        Quantity of Leads Needed: {$_POST['LeadsQuantity']}<br/>
        How soon you need leads: {$_POST['LeadsWhen']}<br/>
        Comments: {$_POST['Comments']}<br/>
";

    // To send HTML mail, the Content-type header must be set
    $Headers = "MIME-Version: 1.0\r\n";
    $Headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    // Additional headers
    $Headers .= "To: {$ToName} <{$ToEmail}>\r\n";
    $Headers .= "From: {$FromName} <{$FromEmail}>\r\n";

    mail($ToEmail, $Subject, $Body, $Headers);
}
?>

<?php include 'header.php'; ?>

<div class="clear"></div>
<div class="wrap" style="padding-top:60px;">
    <div class="LeftContainer">
        <h3>Thank you your Message has been sent!</h3>
        <h5>Please allow 24hrs for an Account Executive to respond.</h5>
        <p>
            David Conner will get at you soon.
        </p>

    </div>
    
</div>
<?php include 'footer.php'; ?>
