<?php
    include 'about-me/about.php';
    include 'assignments/assignments.php';
    $title = 'Home';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carter :: <?php echo $title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css-sheet.css">
    <link rel="stylesheet" href="styles/navigation-sheet.css">
    <link rel="stylesheet" href="styles/hamburger-icon.css">
    <link rel="stylesheet" href="styles/scrollbar.css">
    <link rel="stylesheet" href="styles/close-button.css">
    <link href='https://fonts.googleapis.com/css?family=Silkscreen' rel='stylesheet'>
</head>
<body id="animbackground">
    <header class="float-left">
        <h1><a href="#" onclick="clearArticles();">Carter's<br>Project<br>Page</a></h1>
    </header>
    <nav class="sidenav float-left">
        <label for="check">
            <input type="checkbox" id="check" onclick="showNav()">
            <span></span>
            <span></span>
            <span></span>
        </label> 
        <ul id="links" >
            <li><a href="#" onclick="hideNav()">Home</a></li>  
            <li><a href="#assignments" onclick="hideNav(); enableArticleDisplay('assignments');">Assignments</a></li>
            <li><a href="#about-me" onclick="hideNav(); enableArticleDisplay('about-me')">About Me</a></li>
            <li><a href="#contact" onclick="hideNav(); enableArticleDisplay('contact')">Contact</a></li>
        </ul>
    </nav>
    <main class ="main-content">
        <div class="container">
            <article id="assignments">
                <div class="close" onclick="disableArticleDisplay(this)"></div>
                <h1><?php echo $assignment['navigation'][0]['header']?></h1>
                <p style="text-align: center;"><?php echo $assignment['navigation'][0]['sub']?></p>
                <a href="#assign1" onclick="enableArticleDisplay('assign1')">Assignment 1: Questions</a><br><br>
                <a href="#about-me" onclick="enableArticleDisplay('about-me')">Assignment 2: About Me</a>
            </article>
            <article id="assign1">
                <div class="close" onclick="disableArticleDisplay(this)"></div>
                <?php foreach($assignment['assign1'] as $article){ ?>
                    <h3><?php echo $article['header']?></h3>
                    <p><?php echo $article['content']?></p>
                <?php } ?>
            </article>
            <article id="about-me">
                <div class="close" onclick="disableArticleDisplay(this)"></div>
                <h1><?php echo $about['title']?></h1>
                <img id="senior-photo" src="assets/senior-photo.jpg">
                <?php foreach($about['sections'] as $article){ ?>
                    <h3><?php echo $article['header']?></h3>
                    <p><?php echo $article['content']?></p>
                <?php } ?>     
            </article>
            <article id="contact">
                <div class="close" onclick="disableArticleDisplay(this)"></div>
                <form method="post" action="scripts/contact.php">
                    <p>
                        <label for="name">Your Name (required)<br>
                            <input type="text" id="name" name="name" required>
                        </label>
                    </p>
                    <p>
                        <label for="email">Your Email (required)<br>
                            <input type="text" id="email" name="email" required>
                        </label>
                    </p>
                    <p>
                        <label for="subject">Subject<br>
                            <input type="text" size="50" id="subject" name="subject">
                        </label>
                    </p>
                    <p>
                        <label for="message">Your Message<br>
                            <textarea cols="50" rows="10" id="message" name="message"></textarea>
                        </label>
                    </p>
                    <p>
                        <input type="submit" id="send" value="Send">
                    </p>
                </form>
            </article>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <ul class="footer-left">
                <li><a href="https://github.com/carterleseman/project-page" title="Source Code"><img src="assets/github-icon.gif"></a></li>
                <li><a href="mailto:fo7140gp@go.minnstate.edu" title="Contact via Email"><img src="assets/email-icon.gif"></a></li>
            </ul>
        </div>
    </footer>
    <script src="scripts/showNav.js"></script>
    <script src="scripts/hideNav.js"></script>
    <script src="scripts/toggleDisplay.js"></script>
    <script src="scripts/clearArticles.js"></script>
</body>
</html>