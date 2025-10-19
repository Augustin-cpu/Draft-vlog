<?php ob_start(); ?>
<div class="container distance">
    <div class="row pt-5">
        <div class="col-lg-4 p-lg-3 sticky-sidebar-content">
            <span class="d-block text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                    <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z" />
                    <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z" />
                </svg>
            </span>
            <div class="d-flex">
                <h1 class="display-5 fw-medium">Draft-Vlog</h1>
                <span class="badge text-bg-primary ms-2 mt-4 align-self-start">Admin</span>
            </div>
            <p class="fs-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique.
            </p>
            <div class="d-flex gap-5">
                <p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info link</a></p>
                <p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info link</a></p>
                <p><a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info link</a></p>
            </div>
            <h6 class="bg-body-tertiary p-2 ">Marketing team</h6>

            <ul class="list-group list-group-item-light mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px"
                            class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">John Doe</p>
                            <p class="text-muted mb-0">john.doe@gmail.com</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/6.jpg" class="rounded-circle" alt=""
                            style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Alex Ray</p>
                            <p class="text-muted mb-0">alex.ray@gmail.com</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/7.jpg" class="rounded-circle" alt=""
                            style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Kate Hunington</p>
                            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                        </div>
                    </div>
                </li>
            </ul>

            <h6 class="bg-body-tertiary p-2">Design team</h6>

            <ul class="list-group list-group-item-light">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/9.jpg" alt="" style="width: 45px; height: 45px"
                            class="rounded-circle" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Soraya Letto</p>
                            <p class="text-muted mb-0">soraya.letto@gmail.com</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/11.jpg" class="rounded-circle" alt=""
                            style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Zeynep Dudley</p>
                            <p class="text-muted mb-0">zeynep.dudley@gmail.com</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/15.jpg" class="rounded-circle" alt=""
                            style="width: 45px; height: 45px" />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Ayat Black</p>
                            <p class="text-muted mb-0">ayat.black@gmail.com</p>
                        </div>
                    </div>
                </li>
            </ul>

        </div>
        <div class="col-lg-8">
             <section class="col-lg-9">
                <form class="d-flex mb-3 post1" role="search" action="/search" method="GET">

                    <div class="input-group">

                        <input
                            type="search"
                            class="form-control form-control-lg border-secondary"
                            placeholder="Rechercher des articles..."
                            aria-label="Rechercher"
                            name="q">

                        <button
                            class="btn btn-primary btn-lg"
                            type="submit"
                            aria-label="Lancer la recherche">
                            <i class="fas fa-magnifying-glass"></i>
                        </button>

                    </div>

                </form>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 post1">

                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 1">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-primary mb-2 align-self-start">Politique</span>

                                <h5 class="card-title text-dark fw-bold">Analyse des nouvelles réformes fiscales</h5>

                                <p class="card-text text-secondary mb-3">
                                    Un résumé concis et percutant des impacts majeurs sur les entreprises...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 2 octobre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Jean Dupont
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="https://placehold.co/600x400" class="card-img-top" alt="Image de l'article 2">

                            <div class="card-body d-flex flex-column">
                                <span class="badge text-bg-success mb-2 align-self-start">Technologie</span>

                                <h5 class="card-title text-dark fw-bold">L'IA au service de la médecine : les avancées</h5>

                                <p class="card-text text-secondary mb-3">
                                    Découvrez comment l'intelligence artificielle révolutionne...
                                </p>

                                <div class="text-date-author text-muted mt-auto mb-3">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt text-secondary me-1"></i> 30 septembre 2025
                                    </span>
                                    <span>
                                        <i class="fas fa-user-circle text-secondary me-1"></i> Sophie Martin
                                    </span>
                                </div>

                                <a href="#" class="btn btn-sm btn-outline-primary align-self-start">Lire l'article &rarr;</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
            <section></section>
            <section></section>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once('layout/layout.php');
