@extends('layout')

@section('title', 'Enregistrer un Record')

@section('content')
    <section class="contact-section">
        <div class="container">
            <h1 class="contact-main-title">NOUS CONTACTER POUR ENREGISTRER UN RECORD</h1>

            <!-- Section Contacts -->
            <div class="contact-info">
                <h2 class="contact-section-title">CONTACTS</h2>

                <div class="contact-details">
                    <div class="contact-item">
                        <span class="contact-label">Instagram :</span>
                        <span class="contact-value">@record.battut</span>
                    </div>

                    <div class="contact-item">
                        <span class="contact-label">Adresse e-mail :</span>
                        <span class="contact-value"><a href="mailto:record.battut@gmail.com">record.battut@gmail.com</a></span>
                    </div>
                </div>
            </div>

            <!-- Section Enregistrer un record -->
            <div class="record-registration-info">
                <h2 class="contact-section-title">ENREGISTRER UN RECORD</h2>

                <div class="registration-content">
                    <p>Record Batt'UT a pour mission de recenser et homologuer les records réalisés par les étudiants et le personnel de l'UTC. Pour garantir l'authenticité et la validité de chaque exploit, nous avons mis en place un processus rigoureux d'homologation supervisé par nos membres et, si nécessaire, par un huissier.</p>

                    <p>Si vous pensez avoir réalisé un record digne d'être homologué par notre association, nous vous invitons à nous contacter via Instagram ou par e-mail. Décrivez-nous votre exploit en détail : la nature du record, les conditions dans lesquelles il a été réalisé, la date, et si possible, joignez des preuves photographiques ou vidéo. Notre équipe évaluera votre proposition et, si elle répond à nos critères, nous organiserons une session d'homologation officielle pour valider votre record et l'intégrer à notre catalogue.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
