<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Настан 2 | СОУ „Ристе Ристески - Ричко“</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="IMAGES/favicon.ico">
    <link rel="stylesheet" href="nastan2.css">
</head>
<body>

    <header>
        <a href="index.html" class="logo-badge" id="logoBadge">
            <img src="IMAGES/Лого.png" alt="Logo">
        </a>
        
         <div class="header-title reveal d-100">
            <strong>СОУ „Ристе Ристески</strong>
            <span>- Ричко“</span>
        </div> 

        
        <nav>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php" class="nav-link">Почетна</a></li>
                <li><a href="zaNas.php" class="nav-link">За нас</a></li>
                <li><a href="nastani.php" class="nav-link active">Настани</a></li>
                <li><a href="struki.php" class="nav-link">Квалификации и сектори</a></li>
                <li><a href="index.php#location" class="nav-link">Контакт</a></li>
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
                    <span><i class="far fa-calendar-alt"></i> 25.12.2025</span>
                    <span><i class="fas fa-tag"></i> Спорт</span>
                </div>
                <h1 class="article-title">Зонски натпревари во футсал</h1>
            </div>

            <div class="main-img-wrapper reveal">
                <img src="IMAGES/nastani2.jpg" alt="Футсал">
            </div>

            <div class="content-text reveal">
                <p><strong>ГОЛЕМ УСПЕХ НА ЗОНСКИТЕ НАТПРЕВАРИ ВО ФУТСАЛ ЗА РИЧКО ⚽🏆</strong></p>
                <p>На 25.12.2025 година, во салата на СОУ „Ристе Ристески – Ричко“, се одиграа зонските натпревари во футсал во машка конкуренција. 
                    Нашата екипа настапи одлично и убедливо го освои првото место, забележувајќи победи на двата натпревари.</p>
                <p>Екипата беше успешно водена од професорите Илија Ангелески и Христијан Митрески.</p>
                <p>На 26.12.2025 г. следуваше уште еден голем успех – прво место на зонските натпревари во женска конкуренција, исто така со две победи.
                Ментор на женската екипа беше Илија Ангелески.</p>
                <p>Честитки до сите учесници за победата, се гордееме со вас и ви посакуваме многу успех и во наредните натпревари🍀</p>
            </div>

            <h3 class="reveal" style="margin-bottom:30px; color:var(--ricko-blue); font-weight:800;">Галерија од настанот</h3>
            <div class="gallery-grid reveal">
                <div class="gallery-item"><img src="IMAGES/nastani2.jpg" alt="Фото"></div>
                <div class="gallery-item"><img src="IMAGES/futsal.jpg" alt="Фото 1"></div>
                <div class="gallery-item"><img src="IMAGES/futsal2.jpg" alt="Фото 2"></div>
                <div class="gallery-item"><img src="IMAGES/futsal3.jpg" alt="Фото 3"></div>
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
                        <a href="https://www.facebook.com/mladinskaricko" class="social-logo-btn"><i class="r-symbol">M</i></a>
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
                &copy; 2026 СОУ „Ристе Ристески - Ричко“. Сите права задржани.
            </div>
        </div>
    </footer>

    <script>
        // Scroll Reveal logic
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

        // Mobile Menu Toggle
        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('active');
        }

        // Header Scrolled State (matches Index)
        window.addEventListener('scroll', () => {
            const badge = document.getElementById('logoBadge');
            if (window.scrollY > 50) {
                badge.classList.add('scrolled');
            } else {
                badge.classList.remove('scrolled');
            }
            reveal();
        });

        // Initial call
        reveal();
    </script>
</body>
</html>