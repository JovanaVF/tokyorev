<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokyo revengers</title>
    <link rel="stylesheet" href="css1/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="main-content">
    <?php
    if(isset($_SESSION["id"])) {
      echo '
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/toman1.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Welcome to <span> Tokyo revengers </span> fan page.
                </h1>
                <p>
                    Obzirom da sam fan razlicitih anime i manga serijala. Smatram da je ovo adekvatna ideja za sajt.
                </p>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>About <span> author </span>
                    <span class="bg-text">Ken <br> Wakui</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information About Ken Wakui</h4>
                    <p>
                        After being fired from his first job, during his high school years, Wakui often spent time with street gangs. However, he later found work as a bar host and eventually graduated from high school.
                        <br /> <br /> In 2004, Wakui entered Shinjuku Swan into the Weekly Young Magazine Newcomer Award, where it earned an honorable mention. The next year, it began serialization in Weekly Young Magazine, where it ran until 2013. The
                        series performed well and earned a jury recommendation at the 12th Japan Media Arts Festival.[3] It was also adapted into two live-action films, which were released in May 2015 and January 2017.
                    </p>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"> Awards </p>
                            <p class="small-text"> 2020 Kodansha Manga Award <br /> in the shōnen category</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">12+</p>
                            <p class="small-text">Years of work</p>

                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">Notable works</p>
                            <p class="small-text">Shinjuku <br /> Swan </p>
                            <p class="small-text"> Tokyo<br /> Revengers </p>

                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text"> Links </p> <br>
                            <p class="small-text"><a href="https://twitter.com/kenwakuiart"> twitter</a></p>
                            <p class="small-text"><a href="https://tokyorevengers.fandom.com/wiki/Ken_Wakui"> Wiki</a></p>
                            <p class="small-text"><a href="https://www.instagram.com/tokyorevengersofficial/"> instagram</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2><span> Characters </span><span class="bg-text">Tokyo revengers</span></h2>
            </div>
            <p class="port-text">
                Tokyo revengers Character list.
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/draken3.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Draken <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Ken_Ryuguji" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/drakenryugujie/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=QMV_aaGLbYk" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/mikey1.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Mikey <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Manjiro_Sano" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/sanomanjiro_mikey/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=sd-Mg-BGTZk" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/takemichy1.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Takemitchy <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Takemichi_Hanagaki" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/takemitchi/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=dYZfN0XH1VU" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/haitans.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Haitani brothers <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Takemichi_Hanagaki" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/takemitchi/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=dYZfN0XH1VU" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/koko.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Kokonoi <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Takemichi_Hanagaki" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/takemitchi/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=dYZfN0XH1VU" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/sanzu11.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Sanzu <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Takemichi_Hanagaki" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/takemitchi/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=dYZfN0XH1VU" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/mitsuya2.jpeg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3> Mitsuya <br> Links </h3>
                        <div class="icons">
                            <a href="https://tokyorevengers.fandom.com/wiki/Takemichi_Hanagaki" class="icon">
                                <i class="fab fa-blogger"></i>
                            </a>
                            <a href="https://www.instagram.com/takemitchi/" class="icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/watch?v=dYZfN0XH1VU" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>My <span> Blogs</span><span class="bg-text"> My <br> Blogs</span></h2>
                </div>
                <br>
                <br>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/toman2.jpeg" alt="">
                        <div class="blog-text">
                            <a href="https://tokyorevengersmanga.com/">
                                <h4>TOKYO卍REVENGERS MANGA ONLINE</h4>
                            </a>
                            <p>
                                Online manga reader.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/mikeyll.png" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="https://www.sportskeeda.com/anime/mikey-dominates-tokyo-revengers-manga-s-latest-popularity-poll">
                                Popularity Poll. </a>
                            </h4>
                            <p>
                                Mikey dominates Tokyo Revengers manga’s latest popularity poll.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/sanzu&koko.png" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="https://tokyorevengers.fandom.com/wiki/Bonten"></a>
                                Bonten Arc
                            </h4>
                            <p>
                                Bonten (梵天ぼんてん, Bonten?) is a criminal organization led by Manjiro Sano as a product of the Kanto Manji Gangs victory in the Battle of Three Deities. Bonten is also known as Japans most feared crime syndicate
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/draken2.jpeg" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="https://superherojacked.com/2021/10/01/top-10-most-popular-tokyo-revengers-characters-of-all-time/">
                                Top 10 Most Popular Tokyo Revengers Characters of All Time
                              </a>
                            </h4>
                            <p>
                                Tokyo Revengers is one of the most popular anime around right now.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/mikey3.jpeg" alt="">
                        <div class="blog-text">
                            <h4>
                                <a href="https://www.anime-planet.com/anime/tokyo-revengers">About anime </a>
                            </h4>
                            <p>
                                Takemichi Hanagaki is a freelancer thats reached the absolute pits of despair in his life. He finds out that the only girlfriend he ever had in his life that he dated in middle school, Hinata Tachibana, had been killed by the ruthless Tokyo Manji Gang.
                            </p>
                        </div>
                    </div>
                    <div class="blog">
                        <img src="img/toman3.jpeg" alt="">
                        <div class="blog-text">
                            <h4> <a href="https://hypebeast.com/2022/6/tokyo-revengers-season-2-return-date-info">
                                Tokyo Revengers Announces Release Date for Season 2
                              </a></h4>
                            <p>
                                Tokyo Revengers, a popular manga adapted into an anime series by Liden Films in 2021, has announced the official release date for Season 2. Dubbed the “Christmas Showdown Arc,” the upcoming season will pit Mikey’s biker gang Toman against a group known
                                as the Black Dragons, a powerful and violent gang that has lasted for ten generations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4> Feel free to ask :)</h4>
                        <div class="contact-info">

                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="www.facebook.com" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="" class="contact-form">
                            <div class="input-control i-c-2">
                                <input type="text" required placeholder="YOUR NAME">
                                <input type="email" required placeholder="YOUR EMAIL">
                            </div>
                            <div class="input-control">
                                <input type="text" required placeholder="ENTER SUBJECT">
                            </div>
                            <div class="input-control">
                                <textarea name="" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                            </div>
                            <div class="submit-btn">
                            <a class="header" href="php/includes/logout.inc.php"> LogOut </a></li>                           
                            <span class="btn-icon"><i class="fas fa-long-arrow-alt-down"></i></span>
            
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home">
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    ';
} else {
    echo '
    <div class="center">
      <h1> Ulogujte se </h1>
      <form action="php/includes/login.inc.php" method="post">
        <div class="text_field">
          <input type="text" name="kIme" required>
          <span></span>
          <label>Korisničko ime ili E-mail</label>
        </div>
        <div class="text_field">
          <input type="password" name="pwd" required>
          <span></span>
          <label>Šifra </label>
        </div>
        <input type="submit" name="login-submit" value="Uloguj se">
        <div class="singup_link">
          Nemate nalog? <a href="registracija.php">Registrujte se</a>

        </div>
        <div class="singup_link">';

        if (isset($_GET["error"])) {
            if ($_GET["error"]=="wornglogin") {
              echo "<h2>Podaci koji su uneti su netacni ili ne postoji korisnik! </h2>";
            }
        }

      echo '
      </div>
      </form>
    ';
}
?>
</body>

</html>