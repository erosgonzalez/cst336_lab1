<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset= "utf-8">
        <title> Eros Gonzalez-Lopez: Personal Website</title>
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
    </head>
    
    <body style = "background-color:black; color:white">
        <header>
            <h1> Eros Gonzalez-Lopez</h1>
        </header>
        
        <nav>
            <hr width = "50%" />
            <a href = "index.html"><strong>Home</strong></a>
            <a href = "about.html">About</a>
            <a href = "contact.html">Contact</a>
        </nav>
        
        <br /><br />
        
        <main>
            <figure id="me">
                <img src = "img/IMG_4571.JPG" />
            </figure>
            
            <div id="welcomeText">
                Hello! <br />
                <p> I am a Software Engineer student and I am currently attending California
                    State University</p>
                    
                    <p> Feel free to contact me!</p>
                    
                    <br /><br />
                    
                    <em>“We evolve, beyond the person that we were a minute before.
                    <strong>Little</strong> by <strong>little</strong>, we advance with each turn. That's how a drill works!” </em><br />
                        -Simon
                <div id ="music">  
                    <p><strong>Check out the singles off of my album Wumbology</strong></p>
                        <ul>
                            <li>日付 11615</li>
                                <audio controls>
                                    <source src="music/日付 11615.m4a" type="audio/mpeg">
                                </audio>
                            <li>Wumbology</li>
                                <audio controls>
                                    <source src="music/Wumbology.m4a" type="audio/mpeg">
                                </audio>
                        </ul>
                </div>  
            </div>
        </main>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
                CST-336. 2018&COPY; Gonzalez-Lopez<br />
                <strong> Disclaimer:</strong> The information in this webpage is super real. <br />
            </hr>
            
            <figure id = "csumbLogo">
                <img src="img/Cal-State-Monterey-Bay.jpg"></img>
            </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>