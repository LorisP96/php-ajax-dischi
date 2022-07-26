<?php include 'database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mile1 Php Dischi</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="logo">
    </header>
    <main>
        <section>
            <div class="container">
            <?php foreach($database as $data) { ?>
                <div class="card">
                    <div class="album-image">
                        <img src="<?php echo $data['poster'] ?>" alt="<?php echo $data['title'] ?>">
                    </div>
                    <div class="album-info">
                        <h3><?php echo $data['title'] ?></h3>
                        <div class="artist"><?php echo $data['author'] ?></div>
                        <div class="year"><?php echo $data['year'] ?></div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </section>
    </main>
</body>
</html>