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
                                <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Record principal" class="main-image" id="mainImage">
                            </div>
                        </div>

                        <div class="gallery-thumbnails-container">
                            <button class="thumbnail-nav thumbnail-nav-left" onclick="scrollThumbnails('left')" id="scrollLeftBtn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="#00296B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>

                            <div class="gallery-thumbnails" id="thumbnailsContainer">
                                <div class="thumbnail active" onclick="showImage(0)" data-image="{{ asset('assets/images/Photo_record_pizza.png') }}">
                                    <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Thumbnail 1">
                                </div>
                                <div class="thumbnail" onclick="showImage(1)" data-image="{{ asset('assets/images/Photo_record_pizza2.png') }}">
                                    <img src="{{ asset('assets/images/Photo_record_pizza2.png') }}" alt="Thumbnail 2">
                                </div>
                                <div class="thumbnail" onclick="showImage(2)" data-image="{{ asset('assets/images/Photo_record_pizza3.png') }}">
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
        let likeCount = 0; // Valeur initiale

        function toggleLike() {
            const likeButton = document.getElementById('likeButton');
            const heartIcon = document.getElementById('heartIcon');
            const likeCountElement = document.getElementById('likeCount');

            if (!isLiked) {
                // Liker
                isLiked = true;
                likeCount++;
                likeButton.classList.add('liked');

                // Animer le compteur
                likeCountElement.classList.add('like-count-animation');
                likeCountElement.textContent = likeCount;

                // Créer des particules de cœur
                createHeartParticles(likeButton);

                // Optionnel : envoyer la requête au serveur
                // sendLikeToServer(true);

            } else {
                // Dé-liker
                isLiked = false;
                likeCount--;
                likeButton.classList.remove('liked');

                // Animer le compteur
                likeCountElement.classList.add('like-count-animation');
                likeCountElement.textContent = likeCount;

                // Optionnel : envoyer la requête au serveur
                // sendLikeToServer(false);
            }

            // Nettoyer l'animation du compteur
            setTimeout(() => {
                likeCountElement.classList.remove('like-count-animation');
            }, 400);
        }

        // Créer des particules de cœur pour l'effet visuel
        function createHeartParticles(button) {
            const particlesContainer = document.createElement('div');
            particlesContainer.className = 'heart-particles';
            button.appendChild(particlesContainer);

            // Créer 3-5 particules
            for (let i = 0; i < 4; i++) {
                const particle = document.createElement('div');
                particle.className = 'heart-particle';
                particle.innerHTML = '♥';
                particle.style.left = Math.random() * 30 + 'px';
                particle.style.animationDelay = (i * 100) + 'ms';
                particlesContainer.appendChild(particle);
            }

            // Nettoyer les particules après l'animation
            setTimeout(() => {
                button.removeChild(particlesContainer);
            }, 1000);
        }

        // Fonction pour envoyer le like au serveur (à personnaliser)
        function sendLikeToServer(liked) {
            // Exemple avec fetch API
            /*
            fetch('/api/records/like', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    record_id: RECORD_ID, // ID du record
                    liked: liked
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Mettre à jour le compteur avec la valeur du serveur
                    likeCount = data.like_count;
                    document.getElementById('likeCount').textContent = likeCount;
                }
            })
            .catch(error => {
                console.error('Erreur lors du like:', error);
                // Revenir à l'état précédent en cas d'erreur
                toggleLike();
            });
            */
        }

        // Initialiser l'état du like au chargement (optionnel)
        document.addEventListener('DOMContentLoaded', function() {
            // Vous pouvez récupérer l'état initial depuis le serveur
            // Par exemple si l'utilisateur a déjà liké ce record

            /*
            fetch('/api/records/like-status/' + RECORD_ID)
            .then(response => response.json())
            .then(data => {
                if (data.is_liked) {
                    isLiked = true;
                    document.getElementById('likeButton').classList.add('liked');
                }
                likeCount = data.like_count;
                document.getElementById('likeCount').textContent = likeCount;
            });
            */
        });
    </script>
@endsection
