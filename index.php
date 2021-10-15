<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Google faq</title>
</head>
<body>
    <header>
        <div class="header-top">
            <span class="logo-text"><img src="<?php echo $logo?>" class="logo">Privacy e termini</span>

            <span class="user"><i class="fas fa-align-justify"></i><img class="user-image" src="<?php echo $user_image?>"></span>
        </div>
        <nav>
            <?php 
                for($i = 0; $i < count($nav_item); $i++) {
                    
                    if($i != count($nav_item) - 1) {
                        echo "<span class='nav-item'>" . $nav_item[$i] . "</span>";
                    } else {
                        echo "<span class='nav-item' id='active-item'>" . $nav_item[$i] . "</span>";
                    }
                }
            ?>
        </nav>
    </header>

    <main>
        <?php
            foreach($faqs as $key) {
                echo "<span class='faq'>" . $key["faq"] . "</span>" . $key["reply"];
            }
        ?>
        <div class="main-footer">
            <div>
                <span class="footer-item">Google</span>
                <span class="footer-item">Tutto su Google</span>
                <span class="footer-item">Privacy</span>
                <span class="footer-item">Termini</span>
            </div>

            <div class="right-footer">
                <img class="select-img" src="https://cdn1.iconfinder.com/data/icons/unigrid-bluetone-culture/60/037_001_bubble_chat_language_global-512.png" alt="" srcset="">
                <select name="" id="">
                    <option value="">Italiano</option>
                </select>
            </div>
        </div>
        
    </main>
</body>
</html>