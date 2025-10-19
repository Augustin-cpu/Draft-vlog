<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Officiel - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
        }

        .blog-header {
            line-height: 1;
        }

        .blog-footer {
            padding: 2.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: 0.05rem solid #e5e5e5;
        }

        nav {
            transform: translateX(60px)
        }
        .tabnav{
            transform: translateX(40px);
        }
        .social {
            margin-left: auto;
        }

        .main {
            height: 100%;
            transform: translateY(30px);
        }

        .distance {
            transform: translateY(60px);
        }

        .card-img-top {
            height: 200px;
            /* Taille fixe pour les images */
            object-fit: cover;
            /* Assure que l'image couvre la zone sans déformation */
        }

        .text-date-author {
            font-size: 0.85rem;
            /* Rendre l'information secondaire plus petite */
        }

        .sticky-sidebar-content {
            position: sticky;
            top: 0;
            /* Pour qu'elle se colle immédiatement au sommet */
            /* Assurez-vous aussi que sa hauteur permet le défilement du contenu */
            height: 100%;
            /* Pour occuper toute la hauteur de la fenêtre (Viewport Height) */
            overflow-y: auto;
            /* Permet à la sidebar elle-même d'avoir une barre de défilement si son contenu est long */
        }

        .post1 {
            transform: translateX(100px);
        }

        .blog-footer {
            position: relative;
            bottom: 0px;
            margin-top: 110px;
            padding: 1.5rem 0;
            color: #727272;
            text-align: center;
            background-color: #f9f9f9;
            border-top: 0.05rem solid #e5e5e5;
        }
    </style>
</head>

<body class="bg-light">
    <header class="container-fluid d-flex p-lg-3 fixed-top bg-primary shadow-sm blog-header">
        <nav class="nav navbar-expand gap-lg-5">
            <div class="d-flex icon ms-lg-5">
                <span class="d-block text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                        <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z" />
                        <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z" />
                    </svg>
                </span>
                <h4 class="display-6 fs-3 text-white titre-nav mt-1 ms-2 ">Draft-Vlog</h4>
            </div>
            <div class="collapse navbar-collapse tabnav" id="navbarNav">
                <ul class="navbar-nav lien gap-lg-4 ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-normal text-white" aria-current="page" href="index.php">Maison</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-normal text-white" href="?page=about">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-normal text-white" href="?page=service">service</a>
                    </li> <li class="nav-item">
                        <a class="nav-link fs-5 fw-normal text-white" href="#">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-normal text-white" href="#">compte</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="social d-flex gap-lg-3 me-lg-5 mt-lg-2">
            <a href="#" class="nav-link fs-5 fw-normal text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                </svg>
            </a>
            <a href="#" class="nav-link fs-5 fw-normal text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                </svg>
            </a>
            <a href="#" class="nav-link fs-5 fw-normal text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
            </a>
        </div>
    </header>
    <main class="container-fluid main">
        <?= $content ?>
    </main>
    <footer class="container-fluid blog-footer text-dark">
        <div class="container">
            <div class="row">

                <div class="col-md-4 mb-3 text-center text-md-start">
                    <div class="d-flex">
                        <span class="d-block text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                        <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z" />
                        <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z" />
                    </svg>
                </span>
                <h4 class="display-6 fs-3 text-dark titre-nav mt-1 ms-2 ">Draft-Vlog</h4>
                    </div>
                    <p class="text-muted small">
                        © 2025 Tous droits réservés. <br>
                        Fait avec passion et Draft-Vlog.
                    </p>
                </div>

                <div class="col-md-4 mb-3 text-center">
                    <h5 class="text-uppercase fw-bold mb-3">Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-dark text-decoration-none">À Propos</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-dark text-decoration-none">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3 text-center text-md-end">
                    <h5 class="text-uppercase fw-bold mb-3">Contact</h5>
                    <ul class="list-unstyled text-muted small">
                        <li><i class="fas fa-envelope me-2"></i> contact@monsite.com</li>
                        <li><i class="fas fa-phone me-2"></i> +33 1 23 45 67 89</li>
                        <li><a href="#" class="text-muted text-decoration-none">Politique de confidentialité</a></li>
                    </ul>
                </div>

            </div>

            <hr class="my-4 text-secondary">

            <div class="row">
                <div class="col-12 text-center small text-muted">
                    <p>Découvrez notre mission et rejoignez notre communauté.</p>
                </div>
            </div>

        </div>
    </footer>

</body>

</html>