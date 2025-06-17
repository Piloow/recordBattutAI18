@extends('layout')

@section('title', 'Catégories de Records')

@section('content')
    <section class="categories-section">
        <div class="container">
            <h1 class="page-title">CATEGORIES DE RECORDS</h1>

            <div class="categories-grid">
                <!-- Alimentation -->
                <a href="{{ route('records.category', 'alimentation') }}" class="category-card">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/alimentation-category.png') }}" alt="Alimentation">
                        <div class="category-badge">
                            <div class="badge-inner"></div>
                        </div>
                    </div>
                    <h3 class="category-title">Alimentation</h3>
                </a>

                <!-- Parcours étudiant -->
                <a href="{{ route('records.category', 'parcours-etudiant') }}" class="category-card">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/parcours-category.png') }}" alt="Parcours étudiant">
                        <div class="category-badge">
                            <div class="badge-inner"></div>
                        </div>
                    </div>
                    <h3 class="category-title">Parcours étudiant</h3>
                </a>

                <!-- Sport -->
                <a href="{{ route('records.category', 'sport') }}" class="category-card">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/sport-category.png') }}" alt="Sport">
                        <div class="category-badge">
                            <div class="badge-inner"></div>
                        </div>
                    </div>
                    <h3 class="category-title">Sport</h3>
                </a>
            </div>
        </div>
    </section>
@endsection
