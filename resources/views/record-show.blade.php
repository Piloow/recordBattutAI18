@extends('layout')

@section('title', ucfirst($slug))

@section('content')
    <section class="record-detail-section">
        <div class="container">
            <!-- Header du record -->
            <div class="record-header">
                @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                    <h1 class="record-main-title">LA PLUS GRANDE TOUR DE CARTONS DE PIZZA</h1>
                @elseif($slug === "bf-pg-speed")
                    <h1 class="record-main-title">BF PG A VELO LE PLUS RAPIDEMENT</h1>
                @elseif($slug === "student-card")
                    <h1 class="record-main-title">LE PLUS DE CARTE eTUDIANTE DETENUE</h1>
                @endif

                <div class="record-actions">
                    <div class="record-likes-big" onclick="toggleLike()" id="likeButton">
                        <svg width="24" height="24" viewBox="0 0 24 24" class="heart-icon" id="heartIcon">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                        <span id="likeCount">0</span>
                    </div>
                    <a href="{{ route('enregistrer') }}">
                        <button class="beat-record-btn">JE VEUX LE BATTRE !</button>
                    </a>
                </div>
            </div>

            <!-- Contenu principal -->
            <div class="record-main-content">
                <!-- Informations du record -->
                <div class="record-info">
                    <div class="record-details">
                        <div class="detail-item">
                            <span class="detail-icon">
                                <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            </span>
                            <span class="detail-label">Catégorie</span>
                            <span class="detail-value">
                                @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                                    Alimentation
                                @elseif($slug === "bf-pg-speed")
                                    Sport
                                @elseif($slug === "student-card")
                                    Parcours Étudiant
                                @endif
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-icon">
                                <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            </span>
                            <span class="detail-label">Détenteur actuel</span>
                            <span class="detail-value">
                                @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                                    Imad Amerali
                                @elseif($slug === "bf-pg-speed")
                                    Baptiste Pommet
                                @elseif($slug === "student-card")
                                    Pol Discart
                                @endif
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-icon">
                                <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            </span>
                            <span class="detail-label">Date d'homologation</span>
                            <span class="detail-value">
                                 @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                                    25/03/2025
                                @elseif($slug === "bf-pg-speed")
                                    22/09/2024
                                @elseif($slug === "student-card")
                                    04/05/2025
                                @endif
                            </span>
                        </div>

                        <div class="detail-item">
                            <span class="detail-icon">
                                <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            </span>
                            <span class="detail-label">Record</span>
                            <span class="detail-value">
                                @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                                    5,68m
                                @elseif($slug === "bf-pg-speed")
                                    4'34"24
                                @elseif($slug === "student-card")
                                    6
                                @endif
                            </span>
                        </div>

                        <div class="detail-item description">
                            <span class="detail-icon">
                                <img src="{{ asset('assets/images/star.png') }}" alt="star">
                            </span>
                            <span class="detail-label">Description</span>
                        </div>
                    </div>

                    <div class="record-description">
                        @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                            <p>Qui n'a jamais rêvé de transformer ses soirées pizza en monument architectural ? Dans l'ambiance chaleureuse du Picasso, ce défi consiste à ériger la plus haute tour de cartons de pizza jamais construite à l'UTC. Entre stratégie d'empilement et physique appliquée, ce record teste autant votre patience que votre capacité à résister à l'envie de grignoter les dernières miettes restées dans les cartons. Un véritable art de vivre étudiant sublimé !</p>
                        @elseif($slug === "bf-pg-speed")
                            <p>Le grand classique des trajets UTC ! Entre les amphis de Benjamin Franklin et les labos de Pierre Guillaumat, ce record teste votre condition physique, votre connaissance des raccourcis compiégnois et votre respect du code de la route. Un défi qui combine sport, géographie locale et gestion du stress des changements de cours de dernière minute. Attention aux dos d'âne et aux feux rouges !</p>
                        @elseif($slug === "student-card")
                            <p>Collectionneur dans l'âme ou simplement étourdi chronique ? Ce record célèbre l'art subtil de l'accumulation de cartes étudiantes UTC ! Que ce soit par nostalgie, maladresse répétée aux services administratifs, ou stratégie de collection bien pensée, découvrez qui détient le plus impressionnant "deck" de cartes étudiantes de l'histoire de l'UTC. Un record qui révèle parfois des parcours étudiants... mouvementés !</p>
                        @endif
                    </div>
                </div>

                @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                    <!-- Galerie d'images -->
                    <div class="record-gallery">
                        <div class="gallery-main">
                            <div class="main-image-container">
                                <!-- Conteneur pour image OU vidéo avec indicateurs de type -->
                                <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Record principal" class="main-media main-image" id="mainMedia">
                                <video class="main-media main-video" id="mainVideo" controls playsinline style="display: none;">
                                    <source src="{{ asset('assets/videos/record-video-1.mp4') }}" type="video/mp4">
                                    Votre navigateur ne supporte pas la vidéo.
                                </video>

                                <!-- Bouton play au centre de la vidéo -->
                                <div class="video-play-button" id="videoPlayButton" style="display: none;" onclick="playVideo()">
                                    <svg width="60" height="60" viewBox="0 0 24 24" fill="none">
                                        <circle cx="12" cy="12" r="12" fill="rgba(255, 255, 255, 0.9)"/>
                                        <polygon points="9,7 9,17 17,12" fill="#00296B"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Miniatures avec navigation -->
                        <div class="gallery-thumbnails-container">
                            <button class="thumbnail-nav thumbnail-nav-left" onclick="scrollThumbnails('left')" id="scrollLeftBtn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="#00296B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <div class="gallery-thumbnails" id="thumbnailsContainer">
                                <div class="thumbnail active" onclick="showMedia(0)" data-type="image" data-src="{{ asset('assets/images/Photo_record_pizza.png') }}">
                                    <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Thumbnail 1">
                                </div>
                                <div class="thumbnail" onclick="showMedia(1)" data-type="image" data-src="{{ asset('assets/images/Photo_record_pizza2.png') }}">
                                    <img src="{{ asset('assets/images/Photo_record_pizza2.png') }}" alt="Thumbnail 2">
                                </div>
                                <div class="thumbnail" onclick="showMedia(2)" data-type="image" data-src="{{ asset('assets/images/Photo_record_pizza3.png') }}">
                                    <img src="{{ asset('assets/images/Photo_record_pizza3.png') }}" alt="Thumbnail 3">
                                </div>
                                <!-- Vidéo 1 -->
                                <div class="thumbnail" onclick="showMedia(3)"
                                     data-type="video"
                                     data-src="{{ asset('assets/images/record-video-1.mp4') }}">
                                    <img src="{{ asset('assets/images/record-video-thumb-1.jpg') }}" alt="Video thumbnail 1">
                                    <div class="video-play-overlay">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                            <polygon points="9,18 15,12 9,6" fill="white"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <button class="thumbnail-nav thumbnail-nav-right" onclick="scrollThumbnails('right')" id="scrollRightBtn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 18L15 12L9 6" stroke="#00296B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                @elseif($slug === "bf-pg-speed")
                    <div class="record-gallery">
                        <div class="gallery-main">
                            <div class="main-image-container">
                                <img src="{{ asset('assets/images/Photo_record_speed.jpeg') }}" alt="Record principal" class="main-image" id="mainImage">
                            </div>
                        </div>
                    </div>
                @elseif($slug === "student-card")
                    <div class="record-gallery">
                        <div class="gallery-main">
                            <div class="main-image-container">
                                <img src="{{ asset('assets/images/Photo_record_speed.jpg') }}" alt="Record principal" class="main-image" id="mainImage">
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            <!-- Historique -->
            <div class="record-history">
                <h2 class="history-title">
                    <span class="detail-icon">
                        <img src="{{ asset('assets/images/star.png') }}" alt="star">
                    </span>
                    Historique / Classement
                </h2>

                <div class="history-table">
                    <div class="table-header">
                        <div class="table-col"></div>
                        <div class="table-col">Etudiant</div>
                        <div class="table-col">Homologation</div>
                        <div class="table-col">Record</div>
                    </div>

                    @if($slug === "la-plus-grande-tour-de-cartons-de-pizza")
                        <div class="table-row">
                            <div class="table-col rank">1.</div>
                            <div class="table-col">Imad Amerali</div>
                            <div class="table-col">25/03/2025</div>
                            <div class="table-col">5,68m</div>
                        </div>
                    @elseif($slug === "bf-pg-speed")
                        <div class="table-row">
                            <div class="table-col rank">1.</div>
                            <div class="table-col">Baptiste Pommet</div>
                            <div class="table-col">22/09/2024</div>
                            <div class="table-col">4'34"24</div>
                        </div>
                    @elseif($slug === "student-card")
                        <div class="table-row">
                            <div class="table-col rank">1.</div>
                            <div class="table-col">Pol Discart</div>
                            <div class="table-col">04/05/2025</div>
                            <div class="table-col">6</div>
                        </div>
                        <div class="table-row">
                            <div class="table-col rank">2.</div>
                            <div class="table-col">Hugo Sinoquet</div>
                            <div class="table-col">09/10/2024</div>
                            <div class="table-col">4</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script>
        // Gestion du système de like
        let isLiked = false;
        let likeCount = 0;

        function toggleLike() {
            const likeButton = document.getElementById('likeButton');
            const heartIcon = document.getElementById('heartIcon');
            const likeCountElement = document.getElementById('likeCount');

            if (!isLiked) {
                isLiked = true;
                likeCount++;
                likeButton.classList.add('liked');
                likeCountElement.classList.add('like-count-animation');
                likeCountElement.textContent = likeCount;
                createHeartParticles(likeButton);
            } else {
                isLiked = false;
                likeCount--;
                likeButton.classList.remove('liked');
                likeCountElement.classList.add('like-count-animation');
                likeCountElement.textContent = likeCount;
            }

            setTimeout(() => {
                likeCountElement.classList.remove('like-count-animation');
            }, 400);
        }

        function createHeartParticles(button) {
            const particlesContainer = document.createElement('div');
            particlesContainer.className = 'heart-particles';
            button.appendChild(particlesContainer);

            for (let i = 0; i < 4; i++) {
                const particle = document.createElement('div');
                particle.className = 'heart-particle';
                particle.innerHTML = '♥';
                particle.style.left = Math.random() * 30 + 'px';
                particle.style.animationDelay = (i * 100) + 'ms';
                particlesContainer.appendChild(particle);
            }

            setTimeout(() => {
                button.removeChild(particlesContainer);
            }, 1000);
        }

        // Gestion de la galerie avec support vidéo amélioré
        let currentMediaIndex = 0;
        let totalMedia = 0;
        let thumbnails = [];
        let mediaData = [];

        function initGallery() {
            thumbnails = document.querySelectorAll('.thumbnail');
            totalMedia = thumbnails.length;

            if (totalMedia > 0) {
                mediaData = Array.from(thumbnails).map(thumb => {
                    const type = thumb.getAttribute('data-type') || 'image';
                    const src = thumb.getAttribute('data-src') || thumb.getAttribute('data-image');
                    return { type, src };
                });

                updateGallery();
                updateScrollButtons();
            }
        }

        function showMedia(index) {
            currentMediaIndex = index;
            updateGallery();
        }

        // Garder la compatibilité
        function showImage(index) {
            showMedia(index);
        }

        function updateGallery() {
            const mainImage = document.getElementById('mainMedia');
            const mainVideo = document.getElementById('mainVideo');
            const playIcon = document.getElementById('playIcon');
            const imageIcon = document.getElementById('imageIcon');
            const videoPlayButton = document.getElementById('videoPlayButton');

            if (mediaData[currentMediaIndex]) {
                const currentMedia = mediaData[currentMediaIndex];

                if (currentMedia.type === 'video') {
                    // Mode vidéo
                    if (mainImage) mainImage.style.display = 'none';
                    if (mainVideo) {
                        mainVideo.style.display = 'block';
                        mainVideo.src = currentMedia.src;
                        mainVideo.load();

                        // Afficher le bouton play au centre
                        if (videoPlayButton) {
                            videoPlayButton.style.display = 'flex';
                        }

                        // Réinitialiser l'état pause de la vidéo
                        mainVideo.pause();
                        mainVideo.currentTime = 0;
                    }
                    if (playIcon) playIcon.style.display = 'block';
                    if (imageIcon) imageIcon.style.display = 'none';
                } else {
                    // Mode image
                    if (mainVideo) {
                        mainVideo.pause();
                        mainVideo.style.display = 'none';
                    }
                    if (videoPlayButton) {
                        videoPlayButton.style.display = 'none';
                    }
                    if (mainImage) {
                        mainImage.style.display = 'block';
                        mainImage.style.opacity = '0';
                        setTimeout(() => {
                            mainImage.src = currentMedia.src;
                            mainImage.style.opacity = '1';
                        }, 200);
                    }
                    if (playIcon) playIcon.style.display = 'none';
                    if (imageIcon) imageIcon.style.display = 'block';
                }

                // Mettre à jour les miniatures actives
                thumbnails.forEach((thumb, index) => {
                    thumb.classList.toggle('active', index === currentMediaIndex);
                });
            }
        }

        // Fonction pour lancer la vidéo
        function playVideo() {
            const mainVideo = document.getElementById('mainVideo');
            const videoPlayButton = document.getElementById('videoPlayButton');

            if (mainVideo && videoPlayButton) {
                mainVideo.play();
                videoPlayButton.style.display = 'none';

                // Réafficher le bouton si la vidéo est mise en pause
                mainVideo.addEventListener('pause', function() {
                    if (!mainVideo.ended) {
                        videoPlayButton.style.display = 'flex';
                    }
                });

                // Masquer définitivement le bouton à la fin de la vidéo
                mainVideo.addEventListener('ended', function() {
                    videoPlayButton.style.display = 'none';
                });
            }
        }

        function scrollThumbnails(direction) {
            const container = document.getElementById('thumbnailsContainer');
            if (!container) return;

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

            setTimeout(updateScrollButtons, 300);
        }

        function updateScrollButtons() {
            const container = document.getElementById('thumbnailsContainer');
            const leftBtn = document.getElementById('scrollLeftBtn');
            const rightBtn = document.getElementById('scrollRightBtn');

            if (container && leftBtn && rightBtn) {
                const canScrollLeft = container.scrollLeft > 5;
                leftBtn.disabled = !canScrollLeft;
                leftBtn.style.opacity = canScrollLeft ? '1' : '0.3';

                const maxScroll = container.scrollWidth - container.clientWidth;
                const canScrollRight = container.scrollLeft < (maxScroll - 5);
                rightBtn.disabled = !canScrollRight;
                rightBtn.style.opacity = canScrollRight ? '1' : '0.3';
            }
        }

        // Navigation clavier
        document.addEventListener('keydown', (e) => {
            if (e.target.tagName !== 'INPUT' && e.target.tagName !== 'TEXTAREA') {
                if (e.key === 'ArrowLeft') {
                    currentMediaIndex = (currentMediaIndex - 1 + totalMedia) % totalMedia;
                    updateGallery();
                } else if (e.key === 'ArrowRight') {
                    currentMediaIndex = (currentMediaIndex + 1) % totalMedia;
                    updateGallery();
                }
            }
        });

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            const galleryContainer = document.querySelector('.record-gallery');
            if (galleryContainer) {
                initGallery();

                // Support du swipe tactile
                const mainContainer = document.querySelector('.main-image-container');
                if (mainContainer) {
                    let startX = 0;
                    let endX = 0;

                    mainContainer.addEventListener('touchstart', (e) => {
                        startX = e.touches[0].clientX;
                    });

                    mainContainer.addEventListener('touchend', (e) => {
                        endX = e.changedTouches[0].clientX;
                        const diff = startX - endX;
                        const threshold = 50;

                        if (Math.abs(diff) > threshold) {
                            if (diff > 0) {
                                currentMediaIndex = (currentMediaIndex + 1) % totalMedia;
                            } else {
                                currentMediaIndex = (currentMediaIndex - 1 + totalMedia) % totalMedia;
                            }
                            updateGallery();
                        }
                    });
                }

                const container = document.getElementById('thumbnailsContainer');
                if (container) {
                    container.addEventListener('scroll', updateScrollButtons);
                }
            }
        });
    </script>
@endsection
