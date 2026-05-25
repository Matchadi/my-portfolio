<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

if(
empty($name) ||
empty($email) ||
empty($subject) ||
empty($message)
)
{

echo "
<h1>Error</h1>
<p>All fields are required.</p>
<a href='index.html'>Go Back</a>
";

exit;

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Form Submitted</title>

</head>

<body>

<h1>Message Sent Successfully!</h1>

<p>
Thank you,
<?php echo $name; ?>
</p>

<h3>Your Message:</h3>

<p>
<?php echo $message; ?>
</p>

<a href="index.html">
Return to Homepage
</a>

</body>

</html>