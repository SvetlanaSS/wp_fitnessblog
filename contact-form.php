<?php
/*
Template Name: Contact form
*/

require_once 'functions.php';

get_header();?>

<?php
  //response generation function
  $response = "";

  //response messages
  $not_human = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid = "Email Address Invalid.";
  $message_unsent = "Message was not sent. Try Again.";
  $message_sent = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "rn" . 'Reply-To: ' . $email . "rn";

  // human validation
  if(!$human == 0){
    if($human != 2) generate_response("error", $not_human); //not human!
    else {
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        generate_response("error", $email_invalid);
        else { //email is valid
          //validate presence of name and message
          if(empty($name) || empty($message)){
            generate_response("error", $missing_content);
          }
          else { //ready to go!
            $sent = mail($to, $subject, $message, $headers);
            if($sent) generate_response("success", $message_sent); //message sent!
            else generate_response("error", $message_unsent);//message wasn't sent
          } //send email
        }
    }
  }
  else if ($_POST['submitted']) generate_response("error", $missing_content);


  //function to generate response
  function generate_response($type, $message){
    global $response;
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }
?>



<!-- Contact form -->
<div class="wp-container">
  <div id="primary" class="site-content row">
    <div id="content" role="main" class="col-sm-12 col-md-6 col-md-offset-3">
      <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <h5 class="contact-form-title">LET’S CONNECT!</h5>
            <h5 class="contact-form-title">USE THE FORM BELOW TO DROP ME</h5>
          </header>
          <div class="entry-content">
          <?php the_content(); ?>
            <div id="respond">
            <?php echo $response; ?>
              <form action="<?php the_permalink(); ?>" method="post">
                <div class="form-group">
                  <label for="name">Name: <span>*</span></label>
                  <input type="text" class="form-control" name="message_name" value="<?php echo $_POST['message_name']; ?>">
                </div>
                <div class="form-group">
                  <label for="message_email">Email: <span>*</span></label>
                  <input type="text" class="form-control" name="message_email" value="<?php echo $_POST['message_email']; ?>">
                </div>
                <div class="form-group">
                  <label for="message_text">Message: <span>*</span></label>
                  <textarea type="text" class="form-control" name="message_text"><?php echo $_POST['message_text'];?></textarea>
                </div>
                <div class="form-group">
                  <label for="message_human">Human Verification: <span>*</span></label>
                  <input type="text" class="form-control" name="message_human"> + 3 = 5
                </div>
                <input type="hidden" class="form-control" name="submitted" value="1">
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block" value="Send">
                </div>
              </form>
            </div>
          </div>
        </article>

      <?php endwhile; // end of the loop. ?>

    </div>
  </div>
</div>


<?php get_footer();?>
