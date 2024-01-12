<?php
    $data = [
        'title' => 'Home',
        "articles" => [
            [
                'header' => 'Why are you taking this class?',
                'content' => "I'm trying to narrow down what my specialization should be in the computer science field. Not that there's anything wrong with being an all-rounder,
                but it also means that you really only have broad knowledge of each topic and no in-depth experience. Introduction to Web Programming has been one of my favorite
                classes of all time, so there's no reason why I shouldn't continue.",
            ],
            [
                'header' => 'What do you want to take away from this class?',
                'content' => "By the end of CS3270, I would like a better understanding of PHP's use cases. What can it do that basic HTML cannot? I would also like an understanding
                of how databases can be used to improve a website's functionality or features. I always thought it might be cool to create an anonymous message board on a site
                with a low population, but I currently don't have the knowledge to execute it, as basic HTML doesn't store information.",
            ]
        ]
    ]
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carter :: <?php echo $data['title']?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css-sheet.css">
    <link rel="stylesheet" href="styles/navigation-sheet.css">
    <link rel="stylesheet" href="styles/hamburger-icon.css">
    <link rel="stylesheet" href="styles/scrollbar.css">
    <link href='https://fonts.googleapis.com/css?family=Silkscreen' rel='stylesheet'>
</head>
<body id="animbackground">
    <header class="float-left">
        <h1><a href="#">Carter's<br>Project<br>Page</a></h1>
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
            <li><a href="assignments.php" onclick="hideNav()">Assignments</a></li>
            <li><a href="#contact" onclick="hideNav(); showContact()">Contact</a></li>
        </ul>
    </nav>
    <main class ="main-content">
        <div class="container">
            <article>
                <?php foreach($data['articles'] as $article){ ?>
                    <h3><?php echo $article['header']?></h3>
                    <p><?php echo $article['content']?></p>
                <?php } ?>
            </article>
            <article id="contact">
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
    <script src="scripts/showContact.js"></script>
</body>
</html>