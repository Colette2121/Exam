<!DOCTYPE html>
<html>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
<head>
    <title>Form Data Retrieved</title>
    <style>
        body {
            background-color: #000000;
            background-image: url('milli img/bg.avif');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: rgba(20,20,20,0.9);
            padding: 40px;
            border-radius: 20px;
            border: 2px solid #a83131;
            text-align: center;
            max-width: 500px;
        }
        h1 {
            color: #a83131;
           font-family: "Archivo Black", sans-serif;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 30px;
            background: #a83131;
            color: black;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        .back-link:hover {
            background: #a83131;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>YOUR SHOUTOUT</h1>
    <?php
        $name = $_POST['fan_name'];
        echo '<p style="color:white; font-size:1.5rem;">✨ Thanks, ' . htmlspecialchars($name) . '! Heavy love from Milli. ✨</p>';
    ?>
    <a href="index.php" class="back-link">← Back</a>
</div>
</body>
</html>