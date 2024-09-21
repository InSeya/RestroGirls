
<?php 
error_reporting(E_ERROR | E_PARSE);
include 'config.php';

 session_start();
 
 if(!empty($_POST["send"])) {
     $name = $_POST["username"];
     $email = $_POST["email"];
     $subject = $_POST["subject"];
     $content = $_POST["content"];
 
     $toEmail = "admin@gmail.com";
     $mailHeaders = "From: " . $name . "<". $email .">\r\n";
     if(mail($toEmail, $subject, $content, $mailHeaders)) {
         $message = "Your contact information is received successfully.";
         $type = "success";
     }
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>RestroGirls	</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Contact us</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
            <div class="input-group">
				<input type="text" placeholder="subject" name="Subject" value="<?php echo $subject; ?>" required>
			</div>
           
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="50" rows="6"></textarea>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Send</button>
		</form>
	</div>
</body>
</html>




