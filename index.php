<?php
$quotes = [
    "Containers are just fancy processes.",
    "Works on my machine? Not anymore.",
    "Kubernetes: because one server wasn't complicated enough.",
    "Every admin has deleted the wrong thing at least once.",
    "Debugging is archaeology with logs."
];

$quote = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My OpenShift PHP App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
        }
        .card {
            width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
    </style>
</head>
<body>

<div class="card">
    <h1>🚀 Soumi's First OpenShift PHP App</h1>

    <p><strong>Server:</strong> <?php echo gethostname(); ?></p>

    <p><strong>PHP Version:</strong> <?php echo PHP_VERSION; ?></p>

    <p><strong>Current Time:</strong> <?php echo date("Y-m-d H:i:s"); ?></p>

    <hr>

    <h3>Random DevOps Wisdom</h3>
    <p><em><?php echo $quote; ?></em></p>
</div>

</body>
</html>
