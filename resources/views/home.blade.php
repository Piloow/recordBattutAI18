@extends('layout')

@section('title', 'Accueil - Records Etudiants')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-carousel">
            <div class="carousel-container">
                <div class="carousel-slides" id="carouselSlides">
                    <!-- Slide 1 -->
                    <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/Illustration_accueil.png') }}')">
                        <div class="slide-progress"></div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/Illustration_accueil2.png') }}')">
                        <div class="slide-progress"></div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide" style="background-image: url('{{ asset('assets/images/Illustration_accueil3.png') }}')">
                        <div class="slide-progress"></div>
                    </div>
                </div>

                <!-- Boutons de navigation -->
                <button class="carousel-nav carousel-nav-prev" onclick="previousSlide()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15 18L9 12L15 6" stroke="#00296B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="carousel-nav carousel-nav-next" onclick="nextSlide()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L15 12L9 6" stroke="#00296B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

                <!-- Indicateurs -->
                <div class="carousel-indicators">
                    <button class="carousel-indicator active" onclick="goToSlide(0)"></button>
                    <button class="carousel-indicator" onclick="goToSlide(1)"></button>
                    <button class="carousel-indicator" onclick="goToSlide(2)"></button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Records Sections -->
    <section class="records-section">
        <div class="container">
            <div class="records-grid">
                <!-- Derniers Records -->
                <div class="records-column">
                    <h2 class="section-title">DERNIERS RECORDS</h2>
                    <div class="records-list">
                        <a href="{{ route('records.show', 'student-card') }}" class="record-card">
                            <div class="record-image">
                                <img src="{{ asset('assets/images/Photo_record_speed.jpg') }}" alt="Record image">
                            </div>
                            <div class="record-content">
                                <h3 class="record-title">Le plus de cartes étudiantes détenues</h3>
                                <p class="record-category">Parcours Étudiant</p>
                            </div>
                            <div class="record-like-date">
                                <span class="record-date">04/05/2025</span>
                                <div class="record-likes">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('records.show', 'la-plus-grande-tour-de-cartons-de-pizza') }}" class="record-card">
                            <div class="record-image">
                                <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Record image">
                            </div>
                            <div class="record-content">
                                <h3 class="record-title">La plus grande tour de cartons de pizza</h3>
                                <p class="record-category">Alimentation</p>
                            </div>
                            <div class="record-like-date">
                                <span class="record-date">25/03/2025</span>
                                <div class="record-likes">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                    <span>0</span>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('records.show', 'bf-pg-speed') }}" class="record-card">
                            <div class="record-image">
                                <img src="{{ asset('assets/images/Photo_record_speed.jpeg') }}" alt="Record image">
                            </div>
                            <div class="record-content">
                                <h3 class="record-title">BF PG à vélo le plus rapidement</h3>
                                <p class="record-category">Sport</p>
                            </div>
                            <div class="record-like-date">
                                <span class="record-date">22/09/2024</span>
                                <div class="record-likes">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                    </svg>
                                    <span>O</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Records les plus populaires -->
                <div class="records-column">
                    <h2 class="section-title">RECORDS POPULAIRES</h2>
                    <div class="records-list popular-records">
                        <div class="popular-records-card">
                            <div class="record-rank">1.</div>
                            <a href="{{ route('records.show', 'la-plus-grande-tour-de-cartons-de-pizza') }}" class="record-card popular-record">
                                <div class="record-image">
                                    <img src="{{ asset('assets/images/Photo_record_pizza.png') }}" alt="Record image">
                                </div>
                                <div class="record-content">
                                    <h3 class="record-title">La plus grande tour de cartons de pizza</h3>
                                    <p class="record-category">Alimentation</p>
                                </div>
                                <div class="record-like-date">
                                    <span class="record-date">25/03/2025</span>
                                    <div class="record-likes">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                        </svg>
                                        <span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="popular-records-card">
                            <div class="record-rank">2.</div>
                            <a href="{{ route('records.show', 'student-card') }}" class="record-card">
                                <div class="record-image">
                                    <img src="{{ asset('assets/images/Photo_record_speed.jpg') }}" alt="Record image">
                                </div>
                                <div class="record-content">
                                    <h3 class="record-title">Le plus de cartes étudiantes détenues</h3>
                                    <p class="record-category">Parcours Étudiant</p>
                                </div>
                                <div class="record-like-date">
                                    <span class="record-date">25/04/2025</span>
                                    <div class="record-likes">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                        </svg>
                                        <span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="popular-records-card">
                            <div class="record-rank">3.</div>
                            <a href="{{ route('records.show', 'bf-pg-speed') }}" class="record-card">
                                <div class="record-image">
                                    <img src="{{ asset('assets/images/Photo_record_speed.jpeg') }}" alt="Record image">
                                </div>
                                <div class="record-content">
                                    <h3 class="record-title">BF PG à vélo le plus rapidement</h3>
                                    <p class="record-category">Sport</p>
                                </div>
                                <div class="record-like-date">
                                    <span class="record-date">22/09/2024</span>
                                    <div class="record-likes">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="#1e40af">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                        </svg>
                                        <span>O</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
