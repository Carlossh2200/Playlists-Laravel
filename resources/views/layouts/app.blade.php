<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name','Kanyefy')}}</title>
</head>
<body>
    <header>
        <div class="header">
                <a href="home.php" class="logo">Kanye West</a>   
                <div class="header-right">
                    <a class="login-name">Account</a>
                    <a class="active" href="home.php">Home</a>
                    <a href="playlist.php">Make a playlist</a>
                    <a href="#shoppingCart" class="cartAnchor">Cart</a>
                </div>
            </div>
        </header>
    
    @yield('content')

    <div class="footer">

            <div class="preFooter">
            <a class="kanyeImg" ><img id="kanyeFaceImg" src="./images/Kanye-West-Logo.png"></img></a>
            </div>
            
            <div class="footerContent">
            <div class="footerColumn">
                <p>Contact</p>
                <a href="https://github.com/Carlossh2200" target="_blank">Github</a>
                <a href="https://www.linkedin.com/in/carlos-sandoval-9b3361293/" target="_blank">LinkedIn</a>
            </div>
            <div class="footerColumn">
                <p>About us</p>
                <a href="about.php">About</a>
                <a href="team.php">Team</a>
            </div>
            <div class="footerColumn">
                <p>Support</p>
                <a href="faq.php">FAQ</a>
                <a href="contact.php">Contact us</a>
            </div>
            </div> 
    </div>    
</body>
</html>

    