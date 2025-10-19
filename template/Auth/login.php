
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Connexion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { min-height:100vh; display:flex; align-items:center; background:#f8f9fa; }
    .card { max-width:420px; width:100%; margin:auto; }
    .span-icon{transform: translateX(150px);}
  </style>
</head>
<body>
  <main class="container py-5">
    <div class="card shadow">
      <div class="card-body p-4">
          <span class="d-block text-dark span-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-easel2-fill" viewBox="0 0 16 16">
                    <path d="M8.447.276a.5.5 0 0 0-.894 0L7.19 1H2.5A1.5 1.5 0 0 0 1 2.5V10h14V2.5A1.5 1.5 0 0 0 13.5 1H8.809z" />
                    <path fill-rule="evenodd" d="M.5 11a.5.5 0 0 0 0 1h2.86l-.845 3.379a.5.5 0 0 0 .97.242L3.89 14h8.22l.405 1.621a.5.5 0 0 0 .97-.242L12.64 12h2.86a.5.5 0 0 0 0-1zm3.64 2 .25-1h7.22l.25 1z" />
                </svg>
            </span>
          <h4 class="card-title mb-3 text-center mt-1">Draft-Vlog</h4>
        <p class="text-muted text-center mb-4 small">Entrez vos identifiants pour continuer</p>

        <form id="loginForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="mail" placeholder="you@example.com" required>
            <div class="invalid-feedback">Merci de saisir une adresse e-mail valide.</div>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="pass" minlength="6" placeholder="••••••••" required>
            <div class="invalid-feedback">Merci de saisir votre mot de passe (min. 6 caractères).</div>
          </div>

          <div class="mb-3 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember">
              <label class="form-check-label" for="remember">Se souvenir</label>
            </div>
            <a href="#" class="small">Mot de passe oublié ?</a>
          </div>

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">Connexion</button>
          </div>

          <div class="text-center">
            <small class="text-muted">Pas encore de compte ? <a href="?page=register">S'inscrire</a></small>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>