<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Fryzjerski</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Salon Fryzjerski</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#glowna">Strona główna</a></li>
                <li><a href="#uslugi">Usługi</a></li>
                <li><a href="#cennik">Cennik</a></li>
                <li><a href="#galeria">Galeria</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="glowna" class="hero">
            <div class="hero-content">
                <h2>Witaj w naszym salonie</h2>
                <p>Profesjonalne usługi fryzjerskie w przyjaznej atmosferze</p>
                <a href="#kontakt" class="btn">Umów wizytę</a>
            </div>
        </section>

        <section id="uslugi" class="services">
            <h2>Nasze Usługi</h2>
            <div class="services-grid">
                <div class="service-card">
                    <i class="fas fa-cut"></i>
                    <h3>Strzyżenie</h3>
                    <p>Profesjonalne strzyżenie damskie i męskie</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Koloryzacja</h3>
                    <p>Farbowanie i pasemka</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-female"></i>
                    <h3>Stylizacja</h3>
                    <p>Czesanie i upięcia okolicznościowe</p>
                </div>
            </div>
        </section>

        <section id="cennik" class="pricing">
            <h2>Cennik</h2>
            <div class="price-list">
                <div class="price-item">
                    <h3>Strzyżenie damskie</h3>
                    <p class="price">od 80 zł</p>
                </div>
                <div class="price-item">
                    <h3>Strzyżenie męskie</h3>
                    <p class="price">od 50 zł</p>
                </div>
                <div class="price-item">
                    <h3>Koloryzacja</h3>
                    <p class="price">od 150 zł</p>
                </div>
            </div>
        </section>

        <section id="galeria" class="gallery">
            <h2>Galeria</h2>
            <div class="gallery-grid">
                <!-- Tu będą dodane zdjęcia -->
                <div class="gallery-item">
                    <img src="images/fryzura1.jpg" alt="Fryzura 1">
                </div>
                <div class="gallery-item">
                    <img src="images/fryzura2.jpg" alt="Fryzura 2">
                </div>
                <div class="gallery-item">
                    <img src="images/fryzura3.jpg" alt="Fryzura 3">
                </div>
            </div>
        </section>

        <section id="kontakt" class="contact">
            <h2>Kontakt</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Dane kontaktowe</h3>
                    <p><i class="fas fa-map-marker-alt"></i> ul. Przykładowa 123, 00-000 Miasto</p>
                    <p><i class="fas fa-phone"></i> +48 123 456 789</p>
                    <p><i class="fas fa-envelope"></i> kontakt@salonfryzjerski.pl</p>
                </div>
                <div class="opening-hours">
                    <h3>Godziny otwarcia</h3>
                    <p>Poniedziałek - Piątek: 9:00 - 19:00</p>
                    <p>Sobota: 9:00 - 15:00</p>
                    <p>Niedziela: Zamknięte</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Salon Fryzjerski. Wszelkie prawa zastrzeżone.</p>
    </footer>
</body>
</html>
