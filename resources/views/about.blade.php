@extends('layout')

@section('title', 'Qui sommes-nous ?')

@section('content')
    <section class="about-section">
        <div class="container">
            <h1 class="about-main-title">RECORD BATTUT</h1>
            <h2 class="about-subtitle">QUI SOMMES-NOUS ?</h2>

            <div class="about-content">
                <!-- Section avec logo et texte -->
                <div class="about-intro">
                    <div class="about-logo-section">
                        <div class="about-logo-box">
                            <h3 class="logo-title">NOUVELLE ASSO</h3>
                            <div class="about-logo">
                                <img src="{{ asset('assets/images/LogoRB1.png') }}" alt="Logo Record Battut">
                            </div>
                            <p class="logo-subtitle">Le Guinness Word Record mais version UTC !</p>
                            <br>
                            <p class="logo-subtitle">Du record de + de A (ou de F) au record de vitesse entre BF et PG, rentre dans les annales de l’UTC. </p>
                        </div>
                    </div>

                    <div class="about-text">
                        <p>Record Batt'UT est une association étudiante de l'UTC créée il y a six mois avec pour ambition de recenser et homologuer les records les plus insolites et spectaculaires réalisés par les membres de la communauté universitaire. Notre mission consiste à mettre en lumière les exploits extraordinaires de nos étudiants et du personnel, qu'ils soient sportifs, culinaires, académiques ou simplement originaux.</p>

                        <p>En tant qu'association récente mais dynamique, nous nous positionnons comme le Guinness des Records de l'UTC. Nous fixons les règles d'homologation, validons les performances et délivrons des certificats officiels pour immortaliser chaque record. Notre équipe, composée de passionnés dévoués, travaille en collaboration avec des huissiers lorsque cela s'avère nécessaire pour garantir l'authenticité des exploits recensés.</p>
                    </div>
                </div>

                <div class="trombi-first-row">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/pphugo.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Hugo SINOQUET</p>
                        <h3 class="category-title">Président</h3>
                    </div>

                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/pppol.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Pol DISCART</p>
                        <h3 class="category-title">Vice-Président</h3>
                    </div>

                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/ppjojo.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Johanna RONCERET</p>
                        <h3 class="category-title">Resp Com</h3>
                    </div>
                </div>

                <div class="trombi-second-row">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/ppahmed.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Ahmed BOUZIDI</p>
                        <h3 class="category-title">Co-Resp Info</h3>
                    </div>

                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/ppgeo.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Geo SAGLIO</p>
                        <h3 class="category-title">Co-Resp Info</h3>
                    </div>

                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/pplena.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Léna DEMEESTERE</p>
                        <h3 class="category-title">Co-Resp Huissier</h3>
                    </div>

                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset('assets/images/pppaul.png') }}" alt="Président">
                            <div class="category-badge">
                                <div class="badge-inner"></div>
                            </div>
                        </div>
                        <p class="logo-subtitle">Paul FREGAUT</p>
                        <h3 class="category-title">Co-Resp Huissier</h3>
                    </div>
                </div>

                <!-- Section description complète -->
                <div class="about-description">
                    <p>Notre volonté est de créer une véritable culture du défi et de l'excellence au sein de l'UTC, en encourageant les étudiants à repousser leurs limites et à exprimer leur créativité. Des records de tours de cartons de pizza aux exploits académiques les plus impressionnants, nous célébrons toutes les formes de performance qui reflètent l'esprit d'innovation et l'audace caractéristiques de notre université.</p>

                    <p>Actuellement gérée par une équipe de membres fondateurs en fin de cursus, Record Batt'UT a été conçue pour perdurer au-delà de nos études. Nous mettons en place les fondations solides et les outils nécessaires pour assurer la pérennité de l'association, permettant aux futures générations d'étudiants de reprendre le flambeau et de continuer à enrichir le patrimoine des records de l'UTC pour les années à venir.</p>
                </div>

                <!-- Boutons d'action -->
                <div class="about-actions">
                    <a href="{{ route('faq') }}" class="action-btn primary-btn">NOTRE FAQ</a>
                    <a href="{{ route('enregistrer') }}" class="action-btn secondary-btn">ENREGISTRER UN RECORD</a>
                </div>

                <!-- Logo en bas -->
                <div class="about-bottom-logo">
                    <img src="{{ asset('assets/images/LogoRB1.png') }}" alt="Logo Record Battut">
                </div>
            </div>
        </div>
    </section>
@endsection
