 <?php ob_start(); ?>
 <header class="bg-primary text-white py-5 mt-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold">Optimisez Votre Productivité</h1>
            <p class="lead">Découvrez comment nos solutions de gestion de tâches et de projets peuvent transformer votre organisation.</p>
        </div>
    </header>

    <main class="container">

        <section class="text-center mb-5">
            <h2 class="mb-4 text-primary">Gestion Quotidienne des Tâches</h2>
            <p class="lead text-muted">Facilitez l'organisation individuelle et collaborative grâce à des outils intuitifs et puissants.</p>

            <div class="row g-4 mt-4">
                
                <div class="col-md-4">
                    <div class="card h-100 p-4 shadow-sm border-0">
                        <i class="fas fa-list-check fa-3x text-success mb-3"></i>
                        <h5 class="card-title fw-bold">Organisation Intelligente</h5>
                        <p class="card-text text-muted">Créez, assignez et priorisez vos tâches avec des étiquettes et des délais clairs.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 p-4 shadow-sm border-0">
                        <i class="fas fa-chart-line fa-3x text-info mb-3"></i>
                        <h5 class="card-title fw-bold">Suivi en Temps Réel</h5>
                        <p class="card-text text-muted">Recevez des notifications, synchronisez vos calendriers et ne manquez plus jamais un délai critique.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 p-4 shadow-sm border-0">
                        <i class="fas fa-users fa-3x text-warning mb-3"></i>
                        <h5 class="card-title fw-bold">Collaboration Simplifiée</h5>
                        <p class="card-text text-muted">Commentez les tâches, partagez des fichiers et collaborez sans effort avec votre équipe.</p>
                    </div>
                </div>

            </div>
        </section>

        <hr class="my-5">

        <section class="text-center mb-5">
            <h2 class="mb-4 text-primary">Pilotage de Projets Complexes</h2>
            <p class="lead text-muted">De la planification initiale au déploiement, gérez vos projets avec clarté et efficacité.</p>
            
            <div class="row g-4 mt-4">

                <div class="col-md-6">
                    <div class="card h-100 p-4 shadow-sm border-primary border-3 border-top">
                        <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Visualisation et Planification</h5>
                        <p class="card-text">Utilisez des vues Kanban, Gantt ou liste pour structurer et visualiser chaque étape de vos projets.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 p-4 shadow-sm border-primary border-3 border-top">
                        <i class="fas fa-chart-bar fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Analyse et Reporting</h5>
                        <p class="card-text">Obtenez des rapports détaillés sur les performances, le temps passé et le budget pour prendre des décisions éclairées.</p>
                    </div>
                </div>

            </div>
        </section>

        <hr class="my-5">

        <section class="text-center bg-light p-5 rounded shadow-lg mb-5">
            <h2 class="mb-3 text-secondary">Prêt à transformer votre gestion de projet ?</h2>
            <p class="lead mb-4">Commencez dès aujourd'hui notre essai gratuit de 14 jours, sans engagement.</p>
            <a href="#" class="btn btn-primary btn-lg fw-bold px-5 py-3 shadow-sm">Démarrer l'Essai Gratuit</a>
        </section>

    </main>
<?php
$content = ob_get_clean();
require_once('layout/layout.php');
