
<?php
use phpformbuilder\Form;
use phpformbuilder\Validator\Validator;

/* =============================================
    start session and include form class
============================================= */


/* =============================================
    validation if posted
============================================= */

if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('contact-form-1') === true) {
    // create validator & auto-validate required fields
    $validator = Form::validate('contact-form-1');

    // additional validation
    $validator->maxLength(100)->validate('message');
    $validator->email()->validate('user-email');

    // recaptcha validation
    $validator->recaptcha('YOUR RECAPTCHA SECRET CODE', 'Recaptcha Error')->validate('g-recaptcha-response');

    // check for errors
    if ($validator->hasErrors()) {
        $_SESSION['errors']['contact-form-1'] = $validator->getAllErrors();
    } else {
        $email_config = array(
            'sender_email'    => 'contact@phpformbuilder.pro',
            'sender_name'     => 'Php Form Builder',
            'recipient_email' => addslashes($_POST['user-email']),
            'subject'         => 'Contact from Php Form Builder',
            'filter_values'   => 'contact-form-1, submit-btn',
            'debug'           => true
        );
        $sent_message = Form::sendMail($email_config);
        Form::clear('contact-form-1');
    }
}

/* ==================================================
    The Form
================================================== */


$form->startFieldset('Please fill in this form to contact us');
$form->addHtml('<p class="text-warning">All fields are required</p>');
$form->groupInputs('user-name', 'user-first-name');
$form->setCols(0, 6, 'sm');
$form->addIcon('user-name', '<span class="glyphicon glyphicon-user"></span>', 'before');
$form->addInput('text', 'user-name', '', '', 'required, placeholder=Name');
$form->addIcon('user-first-name', '<span class="glyphicon glyphicon-user"></span>', 'before');
$form->addInput('text', 'user-first-name', '', '', 'required, placeholder=First Name');
$form->setCols(0, 12, 'xs');
$form->addIcon('user-email', '<span class="glyphicon glyphicon-envelope"></span>', 'before');
$form->addInput('email', 'user-email', '', '', 'required, placeholder=Email');
$form->addIcon('user-phone', '<span class="glyphicon glyphicon-earphone"></span>', 'before');
$form->addInput('tel', 'user-phone', '', '', 'required, data-fv-intphonenumber=true');
$form->addTextarea('message', '', '', 'cols=30, rows=4, required, placeholder=Message');
$form->addCheckbox('newsletter', 'Suscribe to Newsletter', 1, 'checked=checked');
$form->printCheckboxGroup('newsletter', '');
$form->addRecaptcha('6Ldg0QkUAAAAABmXaV1b9qdOnyIwVPRRAs4ldoxe');
$form->addBtn('reset', 'reset-btn', 1, 'Reset <span class="glyphicon glyphicon-cancel append"></span>', 'class=btn btn-warning', 'my-btn-group');
$form->addBtn('submit', 'submit-btn', 1, 'Send <span class="glyphicon glyphicon-envelope append"></span>', 'class=btn btn-success ladda-button, data-style=zoom-in', 'my-btn-group');
$form->printBtnGroup('my-btn-group');
$form->endFieldset();

// word-character-count plugin
$form->addPlugin('word-character-count', '#message', 'default', array('%maxAuthorized%' => 100));

// Custom radio & checkbox css
$form->addPlugin('nice-check', 'form', 'default', ['%skin%' => 'green']);

// International Phone Numbers
$form->addPlugin('intl-tel-input', 'input[type=tel]');

// jQuery validation
$form->addPlugin('formvalidation', '#contact-form-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Contact Form - Php Form Builder</title>
    <meta name="description" content="Bootstrap Form Generator - how to create a Contact Form with Php Form Builder Class">
    <!-- Change the link to bootstrap.min.css according to your directory structure -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" media="screen">
    <?php $form->printIncludes('css'); ?>
</head>
<body>
    <h1 class="text-center">Php Form Builder - Bootstrap Horizontal Contact Form<br><small>with icons &amp; placeholders</small></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <?php
            if (isset($sent_message)) {
                echo $sent_message;
            }
            $form->render();
            ?>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
        $form->printIncludes('js');
        $form->printJsCode();
    ?>
</body>
</html>
 
