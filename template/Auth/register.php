<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inscription</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .span-icon{transform: translateX(259px);}
    </style>
</head>
<body class="bg-light">
  <main class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm">
          <div class="card-body p-4">
            <span class="d-block text-dark span-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                    <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z" />
                    <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z" />
                </svg>
            </span>
          <h4 class="card-title mb-3 text-center mt-1">Draft-Vlog</h4>
            <p class="text-muted text-center mb-4">Veuillez renseigner vos informations</p>

            <form id="signupForm" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="fullName" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="fullName" name="fullName" required>
                <div class="invalid-feedback">Entrez votre nom complet.</div>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">Entrez une adresse e-mail valide.</div>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8" required>
                <div class="form-text">Au moins 8 caractères.</div>
                <div class="invalid-feedback">Le mot de passe doit contenir au moins 8 caractères.</div>
              </div>

              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                <div class="invalid-feedback" id="confirmFeedback">Les mots de passe doivent correspondre.</div>
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">J'accepte les conditions d'utilisation</label>
                <div class="invalid-feedback">Vous devez accepter les conditions.</div>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
              </div>
            </form>

            <hr class="my-4">
            <p class="text-center mb-0 small text-muted">Déjà inscrit ? <a href="?page=login">Connectez-vous</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script>
    // Validation Bootstrap + vérification correspondance mot de passe
    (function () {
      'use strict';
      const form = document.getElementById('signupForm');
      const password = document.getElementById('password');
      const confirmPassword = document.getElementById('confirmPassword');
      const confirmFeedback = document.getElementById('confirmFeedback');

      function passwordsMatch() {
        return password.value && confirmPassword.value && password.value === confirmPassword.value;
      }

      confirmPassword.addEventListener('input', () => {
        if (!passwordsMatch()) {
          confirmPassword.classList.add('is-invalid');
        } else {
          confirmPassword.classList.remove('is-invalid');
          confirmPassword.classList.add('is-valid');
        }
      });

      form.addEventListener('submit', function (e) {
        // Reset custom validation state for confirm
        if (!passwordsMatch()) {
          confirmPassword.classList.add('is-invalid');
          confirmFeedback.textContent = 'Les mots de passe ne correspondent pas.';
        }

        if (!form.checkValidity() || !passwordsMatch()) {
          e.preventDefault();
          e.stopPropagation();
        }

        form.classList.add('was-validated');
      }, false);
    })();
  </script> -->
</body>
</html>
