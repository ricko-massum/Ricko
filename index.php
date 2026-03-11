<!DOCTYPE html>
<html lang="mk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СОУ „Ристе Ристески - Ричко“ | Прилеп</title>
    <meta name="description" content="Официјален веб сајт на Средното Општинско Училиште Ристе Ристески - Ричко, Прилеп. Лидер во стручното образование.">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="IMAGES/favicon.ico">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <header>
        <div class="logo-badge reveal">
           
            <img src="IMAGES/Лого.png" alt="Лого СОУ Ристе Ристески Ричко">
        </div>
            </div>

        <div class="header-title reveal d-100">
            <strong>СОУ „Ристе Ристески</strong>
            <span>- Ричко“</span>
        </div> 

        <nav>
            <ul class="nav-menu" id="nav-menu">
                <li class="reveal d-100"><a href="#home" class="nav-link">Почетна</a></li>
                <li class="reveal d-100"><a href="zaNas.php" class="nav-link">За нас</a></li>
                <li class="reveal d-200"><a href="nastani.php" class="nav-link">Настани</a></li>
                <li class="reveal d-300"><a href="struki.php" class="nav-link">Квалификации и сектори</a></li>
                <li class="reveal d-400"><a href="#location" class="nav-link">Контакт</a></li>
            </ul>
        </nav>

        <div class="hamburger" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="reveal">
                Твојата <br>
                <span>Иднина</span> <br>
                Започнува Тука.
            </h1>
            <p class="reveal d-200">
                Средно Општинско Училиште „Ристе Ристески - Ричко“ - Прилеп.
                Лидер во техничкото образование и дуалната настава.
            </p>
            <div class="reveal d-300">
                <a href="#sectors" class="btn btn-primary">Разгледај Струки <i class="fas fa-arrow-right" style="margin-left:10px;"></i></a>
            </div>
        </div>
    </section>

    <section id="activities" class="activities">
        <div class="container">
            <div class="section-header reveal">
                <h3>Актуелно</h3>
                <h2>Настани и Активности</h2>
            </div>

            <div class="slider-container reveal d-100">
                <div class="cards-track" id="cardTrack">
                    
                    <a href="nastan1.html" class="event-card">
                        <span class="card-badge">Ново</span>
                        <div class="card-img">
                            <img src="IMAGES/nastani1.jpg" alt="Teatar">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Хуманитарна театарска претстава "Втората смрт на Кузман Капидан"</h4>
                            <p>Промотивната недела на СОУ "Ристе Ристески - Ричко“ ја заокруживме со хуманитарната театарска претстава "Втората смрт на Кузман Капидан",
                                 реализирана од учениците во организација на училишната ученичка заедница и драмската секција.</p>
                            <div class="card-meta">
                                <span><i class="fas fa-user"></i> Култура</span>
                                <span><i class="far fa-calendar-alt"></i> 26.12.2025</span>
                            </div>
                        </div>
                    </a>

                    <a href="nastan2.html" class="event-card">
                        <span class="card-badge">Футсал</span>
                        <div class="card-img">
                            <img src="IMAGES/nastani2.jpg" alt="Футсал">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Зонски натпревари во футсал</h4>
                            <p>Голем успех на зонските натпревари во футсал за Ричко!</p>
                            <div class="card-meta">
                                <span><i class="fas fa-users"></i> Спорт</span>
                                <span><i class="far fa-calendar-alt"></i> 25.12.2025</span>
                            </div>
                        </div>
                    </a>

                    <a href="nastan3.html" class="event-card">
                        <span class="card-badge">Хуманитарна акција</span>
                        <div class="card-img">
                            <img src="IMAGES/nastani3.jpg" alt="Хуманитарна акција">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Празниците се најубави кога се споделуваат</h4>
                            <p>Вo, духот Ha хуманоста и заедништвото, учениците од СОУ „Ристе Ристески- Ричко"
                               преку активност на Училишната ученичка заедница Младинска Организација - Ричко ,
                               внесоа радост и насмевки таму каде што најмногу значат.</p>
                            <div class="card-meta">
                                <span><i class="fas fa-info-circle"></i> Хуманизам</span>
                                <span><i class="far fa-calendar-alt"></i> 25.12.2025</span>
                            </div>
                        </div>
                    </a>
                    
                    <a href="nastan4.html" class="event-card">
                        <span class="card-badge">Литература</span>
                        <div class="card-img">
                            <img src="IMAGES/t.jpg" alt="Литературно читање">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Литературно читање</h4>
                            <p>Bo pамките на низата активности посветени на нашиот патрон Ристе Ристески — Ричко,
                                 денес ce одржа литературно читање што ја славеше моќта на зборот.</p>
                            <div class="card-meta">
                                <span><i class="fas fa-trophy"></i> Култура</span>
                                <span><i class="far fa-calendar-alt"></i> 23.12.2025</span>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="slider-nav">
                    <button class="nav-btn" onclick="slideLeft()"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn" onclick="slideRight()"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section id="sectors" class="sectors">
        <div class="container">
            <div class="section-header reveal">
                <h3>Образование</h3>
                <h2>Нашите Сектори</h2>
            </div>

            <div class="sector-grid">
                <div class="sector-card reveal d-100">
                    <div class="sector-icon"><i class="fas fa-bolt"></i></div>
                    <h4>Електротехника</h4>
                    <p>Компјутерска техника, автоматика и електроника. Дуално образование.</p>
                    <a href="sektori12.html" class="btn btn-outline">Детали</a>
                </div>

                <div class="sector-card reveal d-200">
                    <div class="sector-icon"><i class="fas fa-cogs"></i></div>
                    <h4>Машинство</h4>
                    <p>CNC управување, моторни возила и машинска енергетика.</p>
                    <a href="sektori12.html" class="btn btn-outline">Детали</a>
                </div>

                <div class="sector-card reveal d-300">
                    <div class="sector-icon"><i class="fas fa-road"></i></div>
                    <h4>Сообраќај</h4>
                    <p>Техничар за транспорт и шпедиција. Логистика и безбедност.</p>
                    <a href="sektori12.html" class="btn btn-outline">Детали</a>
                </div>

                <div class="sector-card reveal d-400">
                    <div class="sector-icon"><i class="fas fa-pen-nib"></i></div>
                    <h4>Графичарство</h4>
                    <p>Графички дизајн и мултимедија. Креирај ја иднината.</p>
                    <a href="sektori12.html" class="btn btn-outline">Детали</a>
                </div>
                <div class="sector-card reveal d-400">
                    <div class="sector-icon"><i class="fas fa-basketball-ball"></i></div>
                    <h4>Спортска Гимназија</h4>
                    <p>Времетраење на образовен процес: четири години</p>
                    <a href="sektori12.html" class="btn btn-outline">Детали</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stats" id="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item reveal d-100">
                    <div class="stat-icon-wrapper"><i class="fas fa-book-reader"></i></div>
                    <span class="stat-number" data-target="4">0</span>
                    <span class="stat-label">Сектори</span>
                </div>
                <div class="stat-item reveal d-200">
                    <div class="stat-icon-wrapper"><i class="fas fa-certificate"></i></div>
                    <span class="stat-number" data-target="18">0</span>
                    <span class="stat-label">Профили</span>
                </div>
                <div class="stat-item reveal d-300">
                    <div class="stat-icon-wrapper"><i class="fas fa-user-graduate"></i></div>
                    <span class="stat-number" data-target="940">0</span>
                    <span class="stat-label">Ученици</span>
                </div>
                <div class="stat-item reveal d-400">
                    <div class="stat-icon-wrapper"><i class="fas fa-chalkboard-teacher"></i></div>
                    <span class="stat-number" data-target="92">0</span>
                    <span class="stat-label">Вработени</span>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="container text-center reveal">
            <h4 style="margin-bottom: 40px; text-transform:uppercase; letter-spacing:2px; color:#999;">Наши Партнери</h4>
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-track">
                <img src="IMAGES/EVN-logo.jpg" class="partner-logo" alt="EVN">
                <img src="IMAGES/Vitaminka_logo.png" class="partner-logo" alt="Vitaminka">
                <img src="IMAGES/gentherm-logo.png" class="partner-logo" alt="Gentherm">
                <img src="IMAGES/Kostal-logo.webp" class="partner-logo" alt="Kostal">
                <img src="IMAGES/Drexlmaier-Logo.png" class="partner-logo" alt="Drexlmaier">
                <img src="IMAGES/wik-logo.webp" class="partner-logo" alt="WIK">
                <img src="IMAGES/gogreen-logo.png" class="partner-logo" alt="GoGreen">
                <img src="IMAGES/e4.png" class="partner-logo" alt="E4E">
                
                <img src="IMAGES/EVN-logo.jpg" class="partner-logo" alt="EVN">
                <img src="IMAGES/Vitaminka_logo.png" class="partner-logo" alt="Vitaminka">
                <img src="IMAGES/gentherm-logo.png" class="partner-logo" alt="Gentherm">
                <img src="IMAGES/Kostal-logo.webp" class="partner-logo" alt="Kostal">
                <img src="IMAGES/Drexlmaier-Logo.png" class="partner-logo" alt="Drexlmaier">
                <img src="IMAGES/wik-logo.webp" class="partner-logo" alt="WIK">
                <img src="IMAGES/gogreen-logo.png" class="partner-logo" alt="GoGreen">
                <img src="IMAGES/e4.png" class="partner-logo" alt="E4E">
            </div>
        </div>
    </section>

    <section id="location" class="location-section reveal">
        <div class="directions-overlay">
            <div class="loc-text">
                <h4>Посети нè во училиштето</h4>
                <p>ул. Браќа Миладиновци бр. 213, Прилеп</p>
            </div>
            <a href="https://www.google.com/maps/dir//High+School+Riste+Risteski+-+Richko,+Prilep" target="_blank" class="btn btn-primary">
                <i class="fas fa-location-arrow"></i> Насоки
            </a>
        </div>
        <iframe class="map-frame" src="https://maps.google.com/maps?q=High%20School%20Riste%20Risteski%20-%20Richko%2C%20Prilep&t=&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
    </section>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-logo">РИЧКО</div>
                    <p>Средно општинско училиште за стручно образование. Формираме кадри за иднината.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/rickoedumk"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.facebook.com/mladinskaricko"><i  class="r-symbol">M</i></a>
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
        // 1. MOBILE MENU TOGGLE
        function toggleMenu() {
            const nav = document.getElementById('nav-menu');
            nav.classList.toggle('active');
        }

        // 2. SCROLL REVEAL ANIMATION 
        
        function reveal() {
            var reveals = document.querySelectorAll('.reveal');
            var windowHeight = window.innerHeight;
            var elementVisible = 120; 

            for (var i = 0; i < reveals.length; i++) {
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add('active');
                }
            }
        }
        window.addEventListener('scroll', reveal);
        
        reveal();

        
        const sliderTrack = document.getElementById('cardTrack');
        function slideRight() {
            sliderTrack.scrollBy({ left: 350, behavior: 'smooth' });
        }
        function slideLeft() {
            sliderTrack.scrollBy({ left: -350, behavior: 'smooth' });
        }

        
        const statsSection = document.getElementById('stats-section');
        const counters = document.querySelectorAll('.stat-number');
        let started = false;

        const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !started) {
                started = true;
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target'); 
                    const speed = 60; 
                    const increment = target / speed;
                    
                    let count = 0;
                    
                    const updateCount = () => {
                        count += increment;
                        if(count < target) {
                            counter.innerText = Math.ceil(count);
                            setTimeout(updateCount, 20);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            }
        }, { threshold: 0.5 }); 

        observer.observe(statsSection);

    </script>
    <script>
    window.addEventListener('scroll', () => {
        const logoBadge = document.querySelector('.logo-badge');
        if (window.scrollY > 50) {
            logoBadge.classList.add('scrolled');
        } else {
            logoBadge.classList.remove('scrolled');
        }
    });
</script>
</body>
</html>


