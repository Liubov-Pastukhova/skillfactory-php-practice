<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>PHP Practice</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </header>

        <main>
            <div class="greetings">
                <h1><?php echo $data["greetings"]; ?></h1>
            </div>

            <div class="personal">
                <div class="photo">
                    <?php echo '<img src="../img/photo.jpg">'; ?>
                </div>
                <div class="info-container">
                    <div class="info">
                        <p>Меня зовут 
                            <?php 
                                echo $data["name"], ' ',  $data["surname"] . '</p>';
                                echo '<p>' . 'Город ', $data["city"];
                            ?></p>
                        <p>Мне <?php echo getAge($data["birthYear"]); ?></p>
                    </div>
                    <div class="skills">
                        <h3>В этом блоке мы узнали:</h3>
                        <?php
                            foreach($skills as $value) {
                                echo "<p>$value</p>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!------------------------ Knowledge ------------------------>

            <div class="knowledge">
                <h2>Knowledge</h2>
                <?php include 'knowledge.inc.php'; ?>
                <p><?php echo "$a $b $c"; ?></p>
                <p>
                    <?php 
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo "Сумма чисел $a и $b равна $c";
                    ?>
                </p>
                <p><?php echo $d; ?></p>
            </div>

            <!------------------------- Article ------------------------->

            <div class="article">
                <h2>Article</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni quibusdam explicabo saepe ducimus laborum? Ratione quibusdam quas adipisci quis non ea eaque magni deleniti ut repellat qui libero, repudiandae, illum iusto perferendis laborum quae delectus ex nulla veniam, ab nostrum molestias? Molestias cum repudiandae quam, velit consectetur eos debitis minima.</p>
            </div>
        </main>
    </div>
    <footer class="footer">
        <?php include 'footer.inc.php';?>
    </footer>
</body>
</html>