<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Web Portfolio</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <header id="home">
        <div id="hero">
            <div class=" mb-4 p-5 text-center bg-image" style="
                    height: 30rem;
                    background: url('../images/heroImage.jpg');
                    background-size:cover;
                    ">
                <div class="font-systemui mt-5 pt-5">
                    <div class="display-1 fw-bold text-center text-white">
                        WEB ENGINEERING
                    </div>
                    <h1 class="h4 text-center text-white">
                        I am a professional Web Engineer in Osaka
                    </h1>
                </div>
            </div>
        </div>
    </header>
    
    <?php
    $result = $_REQUEST['result'];
    ?>
    <section id="about">
        <div id="about-header">
            <div class="display-5 mx-5 my-2 fw-bold text-center text-white pt-4">
                <div class="font-monospace"><?php echo (isset($result))?$result:'';?></div>
            </div>
        </div>
        <div id="about-container">
            <div class="text-center mt-4">
                <a href="../index.html">
                    <button class="btn btn-primary" id="submit">Return</button>
            </a>
            </div>
        </div>
    </section>
</body>

</html>