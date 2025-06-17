<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Records Etudiants')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="nav-wrapper">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/LogoRB1.png') }}" alt="Records Logo" class="logo-img">
                </a>
            </div>

            <!-- Navigation -->
            <nav class="nav-menu">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">ACCUEIL</a>
                <a href="{{ route('records') }}" class="nav-link {{ request()->routeIs('records*') ? 'active' : '' }}">RECORDS</a>
                <a href="{{ route('enregistrer') }}" class="nav-link {{ request()->routeIs('enregistrer') ? 'active' : '' }}">ENREGISTRER UN RECORD</a>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">QUI SOMMES-NOUS ?</a>
            </nav>

            <!-- User Profile -->
            <div class="user-profile">
                <div class="user-avatar" onclick="toggleProfileMenu()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="10" fill="#333"/>
                        <circle cx="12" cy="8" r="3" fill="white"/>
                        <path d="M6 20c0-4 3-6 6-6s6 2 6 6" fill="white"/>
                    </svg>
                </div>

                <!-- Menu déroulant -->
                <div class="profile-dropdown" id="profileDropdown">
                        <a href="{{ route('profile') }}" class="dropdown-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                            Mon profil
                        </a>

                            <a href="{{ route('admin') }}" class="dropdown-item">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                                    <circle cx="9" cy="9" r="2"/>
                                    <path d="M21 15.5c0-1-1.7-2.5-4-2.5s-4 1.5-4 2.5"/>
                                </svg>
                                Admin
                            </a>


                        <div class="dropdown-divider"></div>

                        <form method="POST" action="#" class="dropdown-form">
                            @csrf
                            <button type="submit" class="dropdown-item logout-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                                    <polyline points="16,17 21,12 16,7"/>
                                    <line x1="21" y1="12" x2="9" y2="12"/>
                                </svg>
                                Se déconnecter
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<main class="main-content">
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-links">
            <a href="{{ route('about') }}">À propos</a>
            <a href="{{ route('faq') }}">FAQ</a>
            <a href="{{ route('enregistrer') }}">Contact</a>
            <a href="{{ route('legal') }}">Mentions légales</a>
        </div>
    </div>
</footer>

<script>
    // Gestion du menu déroulant profil
    function toggleProfileMenu() {
        const dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('show');
    }

    // Fermer le menu si on clique ailleurs
    document.addEventListener('click', function(event) {
        const userProfile = document.querySelector('.user-profile');
        const dropdown = document.getElementById('profileDropdown');

        if (!userProfile.contains(event.target)) {
            dropdown.classList.remove('show');
        }
    });

    // Fermer le menu avec la touche Échap
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            document.getElementById('profileDropdown').classList.remove('show');
        }
    });

    // JavaScript du carrousel d'accueil
    let currentSlide = 0;
    const totalSlides = 3; // Mis à jour pour 5 slides
    let autoPlayInterval;
    let isAutoPlaying = true;

    // Fonction pour aller à un slide spécifique
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
        resetAutoPlay();
    }

    // Fonction pour le slide suivant
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
        resetAutoPlay();
    }

    // Fonction pour le slide précédent
    function previousSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
        resetAutoPlay();
    }

    // Mettre à jour l'affichage du carrousel
    function updateCarousel() {
        const slidesContainer = document.getElementById('carouselSlides');
        const indicators = document.querySelectorAll('.carousel-indicator');

        if (slidesContainer) {
            // Déplacer les slides
            const translateX = -currentSlide * 20; // 20% par slide
            slidesContainer.style.transform = `translateX(${translateX}%)`;

            // Mettre à jour les indicateurs
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });

            // Réinitialiser les animations de progression
            const progressBars = document.querySelectorAll('.slide-progress');
            progressBars.forEach((bar, index) => {
                if (index === currentSlide) {
                    bar.style.animation = 'none';
                    setTimeout(() => {
                        bar.style.animation = 'slideProgress 5s linear infinite';
                    }, 10);
                } else {
                    bar.style.animation = 'none';
                }
            });
        }
    }

    // Auto-play automatique
    function startAutoPlay() {
        if (isAutoPlaying) {
            autoPlayInterval = setInterval(() => {
                nextSlide();
            }, 5000);
        }
    }

    // Réinitialiser l'auto-play
    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }

    // Pause l'auto-play au survol
    function pauseAutoPlay() {
        isAutoPlaying = false;
        clearInterval(autoPlayInterval);
    }

    // Reprendre l'auto-play
    function resumeAutoPlay() {
        isAutoPlaying = true;
        startAutoPlay();
    }

    // JavaScript pour la galerie avec support images ET vidéos
    let currentMediaIndex = 0;
    let totalMedia = 0;
    let thumbnails = [];
    let mediaData = [];

    // Initialisation de la galerie
    function initGallery() {
        thumbnails = document.querySelectorAll('.thumbnail');
        totalMedia = thumbnails.length;

        if (totalMedia > 0) {
            // Récupérer toutes les données des médias (images ET vidéos)
            mediaData = Array.from(thumbnails).map(thumb => {
                const type = thumb.getAttribute('data-type') || 'image'; // Par défaut : image
                const src = thumb.getAttribute('data-src') || thumb.getAttribute('data-image'); // Compatibilité
                return { type, src };
            });

            // Mettre à jour l'affichage initial
            updateGallery();
            updateScrollButtons();
        }
    }

    // Afficher un média spécifique (image ou vidéo)
    function showMedia(index) {
        currentMediaIndex = index;
        updateGallery();
    }

    // Garder la compatibilité avec l'ancienne fonction
    function showImage(index) {
        showMedia(index);
    }

    // Média suivant (navigation clavier)
    function nextMedia() {
        if (totalMedia > 0) {
            currentMediaIndex = (currentMediaIndex + 1) % totalMedia;
            updateGallery();
        }
    }

    // Média précédent (navigation clavier)
    function previousMedia() {
        if (totalMedia > 0) {
            currentMediaIndex = (currentMediaIndex - 1 + totalMedia) % totalMedia;
            updateGallery();
        }
    }

    // Garder la compatibilité avec les anciennes fonctions
    function nextImage() {
        nextMedia();
    }

    function previousImage() {
        previousMedia();
    }

    // Mettre à jour l'affichage de la galerie
    function updateGallery() {
        const mainImage = document.getElementById('mainImage') || document.getElementById('mainMedia');
        const mainVideo = document.getElementById('mainVideo');
        const playIcon = document.getElementById('playIcon');
        const imageIcon = document.getElementById('imageIcon');

        if (mediaData[currentMediaIndex]) {
            const currentMedia = mediaData[currentMediaIndex];

            if (mainVideo && currentMedia.type === 'video') {
                // Mode vidéo : masquer l'image, afficher la vidéo
                if (mainImage) mainImage.style.display = 'none';
                mainVideo.style.display = 'block';
                mainVideo.src = currentMedia.src;
                mainVideo.load(); // Recharger la vidéo

                // Mettre à jour les indicateurs si ils existent
                if (playIcon) playIcon.style.display = 'block';
                if (imageIcon) imageIcon.style.display = 'none';
            } else {
                // Mode image : masquer la vidéo, afficher l'image
                if (mainVideo) mainVideo.style.display = 'none';
                if (mainImage) {
                    mainImage.style.display = 'block';
                    mainImage.style.opacity = '0';

                    setTimeout(() => {
                        mainImage.src = currentMedia.src;
                        mainImage.style.opacity = '1';
                    }, 200);
                }

                // Mettre à jour les indicateurs si ils existent
                if (playIcon) playIcon.style.display = 'none';
                if (imageIcon) imageIcon.style.display = 'block';
            }

            // Mettre à jour les miniatures actives
            thumbnails.forEach((thumb, index) => {
                thumb.classList.toggle('active', index === currentMediaIndex);
            });
        }
    }

    // Faire défiler les miniatures manuellement
    function scrollThumbnails(direction) {
        const container = document.getElementById('thumbnailsContainer');

        if (!container) {
            console.error('Container thumbnails not found');
            return;
        }

        const scrollAmount = 200;

        if (direction === 'left') {
            container.scrollTo({
                left: container.scrollLeft - scrollAmount,
                behavior: 'smooth'
            });
        } else {
            container.scrollTo({
                left: container.scrollLeft + scrollAmount,
                behavior: 'smooth'
            });
        }

        // Mettre à jour l'état des boutons après le défilement
        setTimeout(updateScrollButtons, 300);
    }

    // Mettre à jour l'état des boutons de défilement
    function updateScrollButtons() {
        const container = document.getElementById('thumbnailsContainer');
        const leftBtn = document.getElementById('scrollLeftBtn');
        const rightBtn = document.getElementById('scrollRightBtn');

        if (container && leftBtn && rightBtn) {
            // Vérifier si on peut défiler vers la gauche
            const canScrollLeft = container.scrollLeft > 5;
            leftBtn.disabled = !canScrollLeft;
            leftBtn.style.opacity = canScrollLeft ? '1' : '0.3';

            // Vérifier si on peut défiler vers la droite
            const maxScroll = container.scrollWidth - container.clientWidth;
            const canScrollRight = container.scrollLeft < (maxScroll - 5);
            rightBtn.disabled = !canScrollRight;
            rightBtn.style.opacity = canScrollRight ? '1' : '0.3';
        }
    }

    // Variables pour la gestion tactile (partagées)
    let startX = 0;
    let endX = 0;

    // Gestion du swipe pour le carrousel d'accueil
    function handleCarouselSwipe() {
        const diff = startX - endX;
        const threshold = 50;

        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextSlide(); // Swipe gauche = slide suivant
            } else {
                previousSlide(); // Swipe droite = slide précédent
            }
        }
    }

    // Gestion du swipe pour la galerie
    function handleMediaSwipe() {
        const diff = startX - endX;
        const threshold = 50;

        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                nextMedia(); // Swipe gauche = média suivant
            } else {
                previousMedia(); // Swipe droite = média précédent
            }
        }
    }

    // Garder la compatibilité
    function handleImageSwipe() {
        handleMediaSwipe();
    }

    // Gestion des touches clavier améliorée
    document.addEventListener('keydown', (e) => {
        // Seulement si on n'est pas dans un input/textarea
        if (e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
            if (e.key === 'ArrowLeft') {
                // Si on est sur la page avec galerie, naviguer dans la galerie
                if (document.getElementById('mainImage') || document.getElementById('mainMedia')) {
                    previousMedia();
                } else if (document.getElementById('carouselSlides')) {
                    // Sinon, naviguer dans le carrousel d'accueil
                    previousSlide();
                }
            } else if (e.key === 'ArrowRight') {
                if (document.getElementById('mainImage') || document.getElementById('mainMedia')) {
                    nextMedia();
                } else if (document.getElementById('carouselSlides')) {
                    nextSlide();
                }
            }
        }
    });

    // Initialisation au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        // Initialiser le carrousel d'accueil s'il existe
        const carousel = document.querySelector('.hero-carousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', pauseAutoPlay);
            carousel.addEventListener('mouseleave', resumeAutoPlay);

            // Event listener pour le swipe sur le carrousel
            carousel.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            });

            carousel.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                handleCarouselSwipe();
            });

            // Initialiser le carrousel
            updateCarousel();
            startAutoPlay();
        }

        // Initialiser la galerie s'il existe
        const galleryContainer = document.querySelector('.record-gallery');
        if (galleryContainer) {
            initGallery();

            // Event listener pour le swipe sur la galerie
            const mainContainer = document.querySelector('.main-image-container');
            if (mainContainer) {
                mainContainer.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                });

                mainContainer.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    handleMediaSwipe();
                });
            }

            // Écouter les événements de défilement pour mettre à jour les boutons
            const container = document.getElementById('thumbnailsContainer');
            if (container) {
                container.addEventListener('scroll', updateScrollButtons);
            }
        }
    });
</script>
</body>
</html>
