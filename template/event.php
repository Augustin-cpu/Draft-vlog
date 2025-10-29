
        <div class="row mt-5">
            <aside class="col-lg-3 p-lg-4 sticky-sidebar-content">
                <div class="form">
                    <form method="POST" action="traitement_ajout_article.php" enctype="multipart/form-data">

                        <h2 class="mb-4 text-primary">Nouveau Post d'Article</h2>
                        <p class="text-muted mb-5">Remplissez les informations ci-dessous pour publier votre contenu.</p>

                        <div class="row mb-4">

                            <div class="col-md-8 mb-3">
                                <label for="titre" class="form-label fw-bold">Titre de l'Article <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="titre" name="titre" required
                                    placeholder="Ex: L'IA : menace ou opportunité ?">
                                <div class="form-text">Doit être accrocheur (max 100 caractères).</div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="categorie" class="form-label fw-bold">Catégorie <span class="text-danger">*</span></label>
                                <select class="form-select" id="categorie" name="categorie" required>
                                    <option value="" disabled selected>Choisir...</option>
                                    <option value="politique">Politique</option>
                                    <option value="economie">Économie</option>
                                    <option value="technologie">Technologie</option>
                                    <option value="sante">Santé</option>
                                    <option value="culture">Culture</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="col-md-6 mb-3">
                                <label for="auteur" class="form-label fw-bold">Nom de l'Auteur <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="auteur" name="auteur" required
                                    placeholder="Ex: Marie Dubois">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="date_pub" class="form-label fw-bold">Date (Automatique)</label>
                                <input type="text" class="form-control" id="date_pub" value="<?php echo date('Y-m-d'); ?>" readonly>
                            </div>

                        </div>

                        <div class="mb-4">
                            <label for="contenu" class="form-label fw-bold">Contenu de l'Article <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="contenu" name="contenu" rows="10" required
                                placeholder="Commencez à rédiger votre article ici..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="image_couverture" class="form-label fw-bold">Image de Couverture</label>
                            <input class="form-control" type="file" id="image_couverture" name="monfichier"
                                accept="image/jpeg, image/jpg, image/gif">
                            <div class="form-text">
                                Formats acceptés : JPG, JPEG, GIF. Taille maximale : 1 Mo.
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="description" class="form-label fw-bold">Extrait / Description Courte</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                placeholder="Un court résumé (utilisé pour les cartes de listage)."></textarea>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-outline-secondary">Effacer</button>
                            <button type="submit" class="btn btn-primary fw-bold">Publier l'Article</button>
                        </div>

                    </form>
                </div>
            </aside>
            <section class="col-lg-9 p-lg-4">
                <form class="d-flex mb-3" role="search" action="/search" method="GET">

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

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                    <div class="col">
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
                </div>
            </section>
        </div>
