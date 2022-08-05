

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> 
    <title>Lucien Käser</title>
</head>
<body>
    <?php
    include 'content/default_css_includes.php';
    include 'components/header/header.php';
    $request = $_SERVER['REQUEST_URI'];
    switch(strtoupper($request)){
        default:
            $content = 'pages/home.phtml';
            break;
    }
    echo '<div class="container">';
    include ($content);
    echo '</div>';
    include 'components/footer/footer.php';
    ?>
</body>
</html>