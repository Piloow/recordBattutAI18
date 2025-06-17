@extends('layout')

@section('title', 'Mon Profil')

@section('content')
    <section class="profile-section">
        <div class="container">
            <h1 class="profile-main-title">MON PROFIL</h1>
            <p class="profile-subtitle">Se déconnecter</p>

            <div class="profile-content">
                <h2 class="profile-section-title">MES RECORDS</h2>

                <div class="profile-records-list">
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
        </div>
    </section>
@endsection
