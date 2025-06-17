@extends('layout')

@section('title', 'Categorie ' . ucfirst($category))

@section('content')
    <section class="category-records-section">
        <div class="container">
            <h1 class="page-title">CATEGORIE {{ strtoupper($category) }}</h1>

            <div class="category-records-grid">
                @if($category === "alimentation")
                    @for($i = 0; $i < 8; $i++)
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
                    @endfor
                @elseif($category === "parcours-etudiant")
                    <a href="{{ route('records.show', 'student-card') }}" class="record-card">
                        <div class="record-image">
                            <img src="{{ asset('assets/images/Photo_record_speed.jpg') }}" alt="Record image">
                        </div>
                        <div class="record-content">
                            <h3 class="record-title">Le plus de carte étudiante détenue</h3>
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
                @elseif($category === "sport")
                    <a href="{{ route('records.show', 'bf-pg-speed') }}" class="record-card">
                        <div class="record-image">
                            <img src="{{ asset('assets/images/Photo_record_speed.jpeg') }}" alt="Record image">
                        </div>
                        <div class="record-content">
                            <h3 class="record-title">BF-PG le plus rapidement en vélo</h3>
                            <p class="record-category">Sport</p>
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
                @endif

            </div>
        </div>
    </section>
@endsection
