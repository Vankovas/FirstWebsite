<?php
if (!isset($_REQUEST['submit'])) /** display the contact form */
{
?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label class="contact-label" for="fname">
                    First Name
                </label>
        <input class="contact-input" type="text" id="fname" name="first_name" placeholder="First name here" data-validation="firstName" autocomplete="given-name" />
        <label class="contact-label" for="lname">
                    Last Name
                </label>
        <input class="contact-input" type="text" id="lname" name="last_name" placeholder="Last name here" data-validation="lastName" autocomplete="family-name" />
        <label class="contact-label" for="mail">
                    Email
                </label>
        <input class="contact-input" type="text" id="email" name="email" placeholder="Email address here" data-validation="email" autocomplete="email" />
        <label class="contact-label" for="msg">
                    Message
                </label>
        <textarea maxlength="650" class="contact-input-message" type="text" id="message" name="message" placeholder="Message here" data-validation="message"></textarea>
        <input type="submit" name="submit" class="contact-btn" value="Send" />
    </form>
    <?php
}
else/* send the submitted data */
{
$firstName = $_REQUEST['first_name'];
$lastName = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$from="From: $firstName $lastName <$email>\r\nReturn-path: $email";
$subject="Message sent using your contact form";
mail("ivan.vasilev@student.fontys.nl", $subject, $message, $from);
echo "Email sent!";
}
?>
