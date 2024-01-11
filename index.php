<!DOCTYPE html>
<html>
<head>
    <title>Carter :: CS3270</title>
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
                <h3>Why are you taking this class?</h3>
                <p>I'm trying to narrow down what my specialization should be in the computer science field. Not that there's anything wrong with being an all-rounder,
                but it also means that you really only have broad knowledge of each topic and no in-depth experience. Introduction to Web Programming has been one of my favorite
                classes of all time, so there's no reason why I shouldn't continue.</p>
                <h3>What do you want to take away from this class?</h3>
                <p>By the end of CS3270, I would like a better understanding of PHP's use cases. What can it do that basic HTML cannot? I would also like an understanding
                of how databases can be used to improve a website's functionality or features. I always thought it might be cool to create an anonymous message board on a site
                with a low population, but I currently don't have the knowledge to execute it, as basic HTML doesn't store information.</p>
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
            <section class="footer-left"> 
                <a href="https://github.com/carterleseman/wbpg.git"><img src="assets/github-icon.gif" id="github-source"></a>
            </section>
        </div>
    </footer>
    <script src="scripts/showNav.js"></script>
    <script src="scripts/hideNav.js"></script>
    <script src="scripts/showContact.js"></script>
</body>
</html>