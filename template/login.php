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
<h1 class="display-1 text-center">
    LOGIN
</h1>
</body>

</html>