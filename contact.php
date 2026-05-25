<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

if (
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($message)
) {

    echo "
    <h1>Error</h1>
    <p>All fields are required.</p>
    <a href='index.html'>Go Back</a>
    ";

    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Submitted</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h1 class="text-success">
                Message Sent Successfully!
            </h1>

            <hr>

            <h4>
                Thank you,
                <?php echo $name; ?>
            </h4>

            <p>
                Your message has been received successfully.
            </p>

            <div class="mt-4">

                <h5>Message Summary:</h5>

                <p>
                    <?php echo $message; ?>
                </p>

            </div>

            <a href="index.html" class="btn btn-primary mt-3">
                Return to Homepage
            </a>

        </div>

    </div>

</body>

</html>