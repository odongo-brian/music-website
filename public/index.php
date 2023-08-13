<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/webfonts/">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    <style>
        @media  (max-width: 768px) {
            header{
                flex-direction: column;
            }
        footer{
            flex-direction: column;
        }
        .main-nav{
            flex-wrap: wrap;
        }
    
}
    </style>
</head>
<body>
<div class="main-title">MUSIC WEBSITE</div>
    <header>
        <div class="logo-holder">
            <a href=""><img class="logo" src="" alt="my logo here"></a>
        </div>
        <div class="header-div">
           
            <div class="main-nav">
                <div class="nav-item"><a href="" class="active">Home</a></div>
                <div class="nav-item"><a href="">Music</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Category</a>
                    <div class='dropdown-list'>
                        <div class='nav-item'><a href="">Country</a></div>
                        <div class='nav-item'><a href="">Pop</a></div>
                        <div class='nav-item'><a href="">R&B</a></div>
                        <div class='nav-item'><a href="">Raggae</a></div>
                        <div class='nav-item'><a href="">Gospel</a></div>
                    </div>
                </div>
                <div class="nav-item"><a href="">Artists</a></div>
                <div class="nav-item"><a href="">About us</a></div>
                <div class="nav-item"><a href="">Contact us</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Hi, user</a>

                    <div class='dropdown-list'>
                        <div class='nav-item'><a href="">Profile</a></div>
                        <div class='nav-item'><a href="">Admin</a></div>
                        <div class='nav-item'><a href="">Logout</a></div>
                    
                    </div>
                
                </div>
            </div>
        </div>
    </header>

    <section>
        <img class='hero' src="../images/hero.jpg" alt="hero image here">
    </section>
    <h3 class='section-title'>Featured</h3>
    <section class='content'>
        
        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->

        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->

        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->

        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->

        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->

        <!--End music card-->
        <div class='music-card'>
            <div style='overflow:hidden'>
                <a href=""><img src="../images/hero2.jpg" alt="music card image here"></a>
             </div>
            <div class="card-content">
                <div class="card-title">Song title</div>
                <div class="card-subtitle">Artist name</div>
            </div>
        </div>
        <!--End music card-->
    </section>

    <footer>
        <div class="footer-div">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Login</a></li>
            </ul>
        </div>
        <div class="footer-div">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="search for music" name="find">

                    <buttton class="btn btn-primary">search</buttton>
                </div>
            </form>
        </div>

        <div class="footer-div end">
            <p>Follow us: </p>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-whatsapp"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>

        </div>


       

    </footer>


    <script src="../script.js"></script>
</body>
</html>