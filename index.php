<?php
$participant = [
    "to" => isset($_GET['to']) ? $_GET['to'] : "Tamu Kehormatan"
];

require 'connection.php';

$tampilkan = query("SELECT * FROM wishes");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Denny & Jacklyn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Monsieur+La+Doulaise&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon_io/site.webmanifest">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="screen active" id="welcome-screen">
        <div class="content crimson-text-regular">
            <h6>28.09.24</h6>
            <h5>DENNY & JACKLYN</h5>
        </div>
        <div class="image-container">
            <span class="judulpertama">Wedding Reception </span>
            <p class="crimson-text-regular" id="name"><?= htmlspecialchars($participant["to"]) ?>,<br>YOU'RE INVITED</p>
            <button class="open-full-invitation josefin-sans-400" id="openInvitation">
                OPEN FULL INVITATION !
            </button>
        </div>
    </div>

    <div class="screen" id="main-content">
        <div class="bagianatas" id="home">
            <div class="backgroundnav fixed-top">
                <nav class="menu crimson-text-regular">
                    <div class="menu-toggle">
                        <input type="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h5 class="brand"><a href="index.php">DENNY & JACKLYN</a></h5>
                    <ul class="menu-list">
                        <li><a href="#home" class="list">Home</a></li>
                        <li><a href="#wedding" class="list">Wedding</a></li>
                        <li><a href="#galleryy" class="list">Gallery</a></li>
                        <li><a href="#wishes" class="list">Wishes</a></li>
                    </ul>
                </nav>
            </div>
            <header class="header crimson-text-regular">
                <div class="hero">
                    <h5 class="heading">THE WEDDING OF</h5>
                </div>
                <div class="features feature-1">
                    <h1 class="price">DENNY ANDREAN<br>&<br>JACKLYN JESSICA</h1>
                </div>
                <div class="features feature-2">
                    <h4 class="price">28.09.24</h4>
                </div>
            </header>
        </div>


        <div class="bagianayat">
            <div class="ourclasses crimson-text-regular">
                <img src="../img/ayat.png" alt="" class="backgroundayat">
                <div class="alamatayat">
                    <h6 class="heading">MATTHEW 19 : 6</h6>
                </div>
                <div class="isiayat">
                    <h4 class="price">“SO THAT THEY ARE NO LONGER TWO, BUT ONE FLESH. THEREFORE, WHAT GOD HAS YOKED TOGETHER LET NO MAN PUT APART. “</h4>
                </div>    
            </div>
        </div>


        <div class="groombride">
            <div class="fotobersama"></div>
            <div class="thegroom">
                <div class="gambargroom"></div>
                <div class="informasigroom">
                    <img src="../img/foto1.png" alt="" class="dekorasi-1">
                    <img src="../img/foto1.png" alt="" class="dekorasi-2">
                    <h6 class="josefin-sans-400">THE GROOM</h6>
                    <h2 class="crimson-text-regular">DENNY ANDREAN NANDAJAYA</h2>
                    <p class="crimson-text-regular"><i>The Son of<br>Alm. Sim In Wah &<br>Alm. Phiong Tjhin Tjhin</i></p>
                </div>
            </div>
            <div class="thebride">
                <div class="informasibride crimson-text-regular">
                    <img src="../img/foto1.png" alt="" class="dekorasi-1">
                    <img src="../img/foto1.png" alt="" class="dekorasi-2">
                    <h6 class="josefin-sans-400">THE BRIDE</h6>
                    <h2 class="crimson-text-regular">JACKLYN JESSICA</h2>
                    <p class="crimson-text-regular"><i>The Daughter of<br>Mr. Darwin Lie &<br>Mrs. Renny C</i></p>
                </div>
                <div class="gambarbride"></div>
            </div>
        </div>

        <div class="countdown crimson-text-regular" id="wedding">
            <div class="savedthedate crimson-text-regular">
                <h1>THE WEDDING</h1>
                <h5>28 SEPTEMBER 2024</h5>
                <div class="informasiacara">
                    <div class="acara weddingtalk">
                        <h2>WEDDING TALK</h2>
                        <p>KINGDOM HALL OF JEHOVAH WITNESSES<br><span>Jl. Boulevard Barat. Ruko Inkopal<br>No.Blok G, RT.15/RW.3, Klp. Gading Bar.</span></p>
                        <h6>09:00 - 10:30</h6>
                        <div class="map-button josefin-sans-400"><a href="https://maps.app.goo.gl/GDB8dSXdqUypjmsa7?g_st=aw" target="_blank">GOOGLE MAP</a></div>
                    </div>
                    <div class="acara weddingreception">
                        <h2>WEDDING RECEPTION</h2>
                        <p>DIAMOND BALLROOM MANGGA DUA SQUARE<br><span>Mangga Dua Square lt.2, Jl. Gn. Sahari 12</span></p>
                        <h6>12:00 - 14:00</h6>
                        <div class="map-button josefin-sans-400"><a href="https://maps.app.goo.gl/hw8rFrj7niuP6onT9" target="_blank">GOOGLE MAP</a></div>
                    </div>
                </div>
                <div class="launch-time">
                    <div class="box-cover">
                        <div class="waktu" >
                            <p id="days-tens">0</p>
                            <p id="days-units">0</p>
                        </div>
                        <span>Days</span>
                    </div>
                    <div class="box-cover">
                        <div class="waktu">
                            <p id="hours-tens">0</p>
                            <p id="hours-units">0</p>
                        </div>
                        <span>Hours</span>
                    </div>
                    <div class="box-cover">
                        <div class="waktu">
                            <p id="minutes-tens">0</p>
                            <p id="minutes-units">0</p>
                        </div>
                        <span>Minutes</span>
                    </div>
                    <div class="box-cover">
                        <div class="waktu">
                            <p id="seconds-tens">0</p>
                            <p id="seconds-units">0</p>
                        </div>
                        <span>Seconds</span>
                    </div>
                </div>
                <div class="save-button josefin-sans-400"><a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NjBzMzhlMzU2b3FtNmJiMjZoaGplYjlrNjhyNmFiYjFjOHJtOGI5bTZ0aGowZWI2Y2NxMzJkOXA2NCBoYXJ2ZW5zYW5AbQ&tmsrc=harvensan%40gmail.com" target="_blank">SAVE THE DATE</a></div>    
            </div>
        </div>
        
        <div class="gallery" id="galleryy">
            <h1 class="crimson-text-regular">GALLERY</h1>
            <div class="album">
                <img src="../img/picture6.jpg" alt="" class="picture1 gallery-item">
                <img src="../img/picture5.jpg" alt="" class="picture2 gallery-item">
                <img src="../img/picture7.jpg" alt="" class="picture3 gallery-item">
                <img src="../img/picture3.jpg" alt="" class="picture4 gallery-item">
                <img src="../img/picture2.jpg" alt="" class="picture5 gallery-item">
                <img src="../img/picture1.jpg" alt="" class="picture6 gallery-item">
                <img src="../img/picture8.jpg" alt="" class="picture8 gallery-item">
                <img src="../img/picture9.jpg" alt="" class="picture9 gallery-item">
                <img src="../img/picture10.jpg" alt="" class="picture10 gallery-item">
            </div>
        </div>

        <div class="guestbook" id="wishes">
            <div class="guest-container">
                <h1 class="crimson-text-regular">SHARE YOUR WISHES</h1>
                <h5 class="crimson-text-regular">We are very delightful to have your imprint to our special day!</h5>
                <div class="guestcontent">
                    <form action="connection.php?to=<?= urlencode($participant['to']) ?>" method="post" class="bookcontent">
                        <div class="fullname">
                            <label for="nama" class="form-label josefin-sans-400">FULL NAME</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Type Full Name" required>
                        </div>
                        <div class="yourwishes">
                            <label for="harapan" class="form-label josefin-sans-400">YOUR WISHES</label>
                            <textarea class="form-control" id="harapan" name="harapan" rows="3" placeholder="Type Your Wishes" required></textarea>
                        </div>
                        <button type="submit" class="btn sendwishes josefin-sans-400" name="submit">SEND WISHES</button>
                    </form>
                    <span></span>
                    <img src="../img/fotobersama.jpg" alt="" class="fotoguest">
                </div>
            </div>
        </div>

        <div class="sendgift josefin-sans-400">
            <div class="sendgift-container">
            <div class="tekscontent">
                <h1>SEND US A SIGN OF LOVE</h1>
                <p>The most important thing is to have you in our special day. However if you do wish to give us something a support to our wedding would be great. We do love surprise.</p>
            </div>
            <button type="button" class="gift" data-bs-toggle="modal" data-bs-target="#reg-modal">SEND GIFT NOW !</button>
            </div>
        </div>

        <div class="wishesspill">
            <div class="wishes-container">
                <div class="guest-judul">
                    <h1 class="crimson-text-regular">WISHES</h1>
                    <h5 class="crimson-text-regular">We are very delighted to hear from you on our special day!<br>Thank you for all the wishes.</h5>
                </div>
                <div class="guest-book-entries">
                    <?php foreach($tampilkan as $row) : ?>
                        <div class="entry mb-4 p-2">
                            <p class="josefin-sans-400 ha"><strong><?= htmlspecialchars($row["harapan"]); ?></strong></p>
                            <p class="josefin-sans-400">- <?= htmlspecialchars($row["nama"]); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="thankyou josefin-sans-400">
            <h1>THANK YOU</h1>
            <h5>FROM DENNY AND JACKLYN</h5>
            <p>Your presence and prayers will bring joy to us.<br>Hope to see you there!</p>
        </div>

        <footer class="crimson-text-regular">
            <a href="https://www.instagram.com/harvensnjaya/" target="_blank">Digital Invitation by<br><i class="fa-brands fa-instagram"></i><span> @harvensnjaya</span></a>
        </footer>

        <audio id="song">
            <source src="../img/denny jacklyn.mp3" type="audio/mp3">
        </audio>
        <div class="music fab-container">
            <div class="fab shadow">
                <div class="content">
                    <div onclick="playPause()"><i class="fa-solid fa-play fa-l" id="ctrlicon"></i></div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered josefin-sans-400">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">SEND GIFT</h1>
                <p>The most important thing is to have you in our special day. However if you do wish to give us something a support to our wedding would be great. We do love surprise.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="../img/bca.png" alt="">
                <h5>Denny Andrean N - 4870665895</h5>
                
                <h5>Jacklyn Jessica - 4870641074</h5>
            </div>
        </div>
        </div>
    </div>
    
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/46a9ff5b70.js" crossorigin="anonymous"></script>
</body>
</html>