<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настан 4 | СОУ „Ристе Ристески - Ричко“</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="IMAGES/favicon.ico">
    <link rel="stylesheet" href="nastan4.css">
</head>
<body>

    <header>
        <a href="index.html" class="logo-badge reveal">
            <img src="IMAGES/Лого.png" alt="Лого СОУ Ристе Ристески Ричко">
        </a>

        <div class="header-title reveal d-100">
            <strong>СОУ „Ристе Ристески</strong>
            <span>- Ричко“</span>
        </div> 

        <nav>
            <ul class="nav-menu" id="nav-menu">
                <li class="reveal d-100"><a href="index.php" class="nav-link">Почетна</a></li>
                <li class="reveal d-100"><a href="zaNas.php" class="nav-link">За нас</a></li>
                <li class="reveal d-200"><a href="nastani.php" class="nav-link">Настани</a></li>
                <li class="reveal d-300"><a href="struki.php" class="nav-link">Квалификации и сектори</a></li>
                <li class="reveal d-400"><a href="index.php#location" class="nav-link">Контакт</a></li>
            </ul>
        </nav>

        <div class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <main class="article-main">
        <div class="container">
            
            <div class="article-header reveal">
                <div class="article-meta">
                    <span><i class="far fa-calendar-alt"></i> 23.12.2025</span>
                    <span><i class="fas fa-tag"></i> Култура</span>
                </div>
                <h1 class="article-title">Литературно читање</h1>
            </div>

            <div class="main-img-wrapper reveal">
                <img src="IMAGES/t.jpg" alt="Книги">
            </div>

            <div class="content-text reveal">
                <p><strong>Во рамки на низата активности посветени на нашиот патрон Ристе Ристески – Ричко, денес се одржа литературно читање што ја славеше моќта на зборот.</strong></p>
                <p>Ученици од сите средни училишта во градот ги споија своите гласови во поетски стихови низ кои се испреплетуваа тивки надежи, младешки немири и искрени емоции.</p>
                <p>Беше тоа настан што не се слуша само со уши, туку се чувствува со срце, миг што ја гали и разнежнува душата, оставајќи трага од убавина и инспирација. ✨📖</p>
            </div>

            <h3 class="reveal" style="margin-bottom:30px; color:var(--ricko-blue); font-weight:800;">Галерија од настанот</h3>
            <div class="gallery-grid reveal">
                <div class="gallery-item"><img src="IMAGES/nastani4.jpg" alt="Слика 1"></div>
                <div class="gallery-item"><img src="IMAGES/a.jpg" alt="Слика "></div>
                <div class="gallery-item"><img src="IMAGES/b.jpg" alt="Слика "></div>
                <div class="gallery-item"><img src="IMAGES/c.jpg" alt="Слика "></div>
                <div class="gallery-item"><img src="IMAGES/e.jpg" alt="Слика "></div>
                <div class="gallery-item"><img src="IMAGES/t.jpg" alt="Слика "></div>
                <div class="gallery-item"><img src="IMAGES/u.jpg" alt="Слика "></div>
            </div>

            <div class="back-nav reveal">
                <a href="nastani.html" class="btn-back">
                    <i class="fas fa-arrow-left"></i> Назад кон сите настани
                </a>
            </div>

        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-logo">РИЧКО</div>
                    <p>Средно општинско училиште за стручно образование. Формираме кадри за иднината.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/rickoedumk"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.facebook.com/mladinskaricko"><i class="r-symbol">M</i></a>
                        <a href="https://mk.linkedin.com/company/rickoedumk"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/u.u.z_ricko?igsh=YXB3cnBxc3ljbzF0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h5 style="color:#fff; margin-bottom:20px;">Институции</h5>
                    <ul class="footer-links">
                        <li><a href="https://mon.gov.mk/">Министерство за образование</a></li>
                        <li><a href="https://bro.gov.mk/">Биро за развој на образование</a></li>
                        <li><a href="https://www.prilep.gov.mk/">Општина Прилеп</a></li>
                        <li><a href="https://ednevnik.edu.mk/">Е-Дневник</a></li>
                    </ul>
                </div>

                <div>
                    <h5 style="color:#fff; margin-bottom:20px;">Контакт</h5>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Прилеп, Македонија</li>
                        <li><i class="fas fa-phone"></i> +389 48 415 376</li>
                        <li><i class="fas fa-envelope"></i> contact@ricko.edu.mk</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                © 2026 СОУ „Ристе Ристески - Ричко“. Сите права задржани.
            </div>
        </div>
    </footer>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 100) {
                    reveals[i].classList.add('active');
                }
            }
        }

        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('active');
        }

        window.addEventListener('scroll', () => {
            const logoBadge = document.querySelector('.logo-badge');
            if (window.scrollY > 50) {
                logoBadge.classList.add('scrolled');
            } else {
                logoBadge.classList.remove('scrolled');
            }
            reveal();
        });

        reveal();
    </script>
</body>
</html>
