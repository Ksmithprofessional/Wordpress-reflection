<?php 

/**
* Plugin Name: contact-form-plugin
* Plugin URI: localhost/worpress-reflection
* Description: Testing contact form
* Version: 0.1
* Author: Karl Smith
* Author URI: localhost/worpress-reflection
**/

/*
 Add all these functions as php code snippets to wherever you need them. 
  
 */

function createForm() {

    ?>


    <form action="#" method="post">

    <fieldset>

        <span class="fname name-star">
                <input type="text" id="fname" name="fname" placeholder="First Name">
        </span>

        <span class="lname">
            <input type="text" id="lname" name="lname" placeholder="Last Name">
        </span>

        <span class="email e-star">
            <input type="text" id="email" name="email" placeholder="Emailaddress@email.com">
        </span>

        <span class="subject">
            <input type="text" id="subject" name="subject" placeholder="Subject">
        </span>

        <span class="message mess-star">
            <textarea id="message" name="message" placeholder="Message"></textarea>
        </span>

        <input type="submit" value="Submit" name="submit" id="submit">
        <p class="error"><?php if(isset($error)) { echo $error; }?></p>
        <p><?php if(isset($success)) { echo $success; }?></p>

    </fieldset>
    </form>

<?php 
}

// loads the css and javascript files
function add_my_css_and_my_js_files(){
    
    wp_enqueue_style( 'style.css', plugins_url('/css/style.css', __FILE__), false, '1.0.0', 'all');
    wp_enqueue_script( 'main.js', plugins_url( 'js/main.js', __FILE__ ), array());
}
// add_action('wp_enqueue_scripts', "add_my_css_and_my_js_files");

function test() {

    // tests whether the form submits the right values. Turn off for production.
    var_dump($_POST);
}

function databaseSetUp() {

    try {
        // change these values to match whatever database connection you have. host, database name, username, password.
        $pdo = new PDO("mysql:host=localhost;dbname=wordpress_reflection;","root","");
    } catch (Exception $e) {
    
        echo 'Error: ' . $e->getMessage();
    }

    $error = '';
    $success = '';

    if(isset($_POST['submit'])) {


        // filter input, escape output!
        $fName = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);


        try {
            $sql = "INSERT INTO wp_contact_form (f_name, l_name, email_address, subject, message) VALUES (?, ?, ?, ?, ?)";
            $results = $pdo->prepare($sql);
            $results-> bindparam(1, $fName);
            $results-> bindparam(2, $lName);
            $results-> bindparam(3, $email);
            $results-> bindparam(4, $subject);
            $results-> bindparam(5, $message);
            $results->execute();
            $success = 'Thank you for your message!'; 

        } catch (Exception $e) {

            $error = 'Error submitting message';
        }
    }
}