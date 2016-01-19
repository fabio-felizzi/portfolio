<?php
  if ($_POST['submit']) {

    if (!$_POST['name']) {
      $error="<br/>Please enter your name";
    }
    if (!$_POST['email']) {
      $error.="<br/>Please enter your email address";
    }
    if (!$_POST['comment']) {
      $error.="<br/>Please enter a comment";
    }
    if ($_POST['email'] AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $error.="<br/>Please enter a valid email address";
    } 
    if($error) {
      $result='<div class="alert alert-danger"><strong>There were error(s) in your form:'.$error.'</strong></div>';
    } else {
      if (mail("fabiofelizzi@gmail.com", "Comment from website!", "Name: ".$_POST['name']."

        Email:".$_POST['email']."

        Comment: ".$_POST['comment'])) {
          $result='<div class="alert alert-success"><strong>Thank You!</strong> I\'ll be in touch.</div>';
      } else {
        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
      }
    }
  }
?>


	<div class="container">
		<div class="row">
			<div class="col-md-6 emailForm"> 
        <?php echo $result; ?>
        <p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>
        <form method="post">
          <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
          </div>
          <div class="form-group">
            <label for="email">Your Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
          </div>
          <div class="form-group">
            <label for="comment">Your Comment:</label>
            <textarea name="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>
          </div>
          <input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit">
        </form>
			</div>
		</div>
	</div>
