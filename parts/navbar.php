<nav class="navbar navbar-expand-lg navbar-dark px-lg-5">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h2 class="mb-0 text-primary text-uppercase">USC</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="./" class="nav-item nav-link <?= $title==''?'active':''?>">Accueil</a>
                    <a href="about" class="nav-item nav-link <?= $title=='A propos'?'active':''?>">A propos</a>
                    <a href="blog" class="nav-item nav-link <?= $title=='Blog'?'active':''?>">Blog</a>
                    <a href="sessions" class="nav-item nav-link <?= $title=='Sessions'?'active':''?>">Sessions</a>
                    <a href="service" class="nav-item nav-link <?= $title=='Services'?'active':''?>">Services</a>
                    <a href="formation" class="nav-item nav-link <?= $title=='Formations'?'active':''?>">Formations</a>
                    <a href="contact" class="nav-item nav-link <?= $title=='Contact'?'active':''?>">Contact</a>
                </div>
                <div class="d-none d-lg-flex">
                    <?php if(isset($_SESSION['user-id'])): ?>
                    <a class="btn btn-outline-primary border-2" href="user">ESPACE ADMIN</a>
                    <?php elseif(isset($_SESSION['client-id'])): ?>
                    <a class="btn btn-outline-primary border-2" href="client">ESPACE CLIENT</a>
                    <?php else: ?>
                    <a class="btn btn-outline-primary border-2" href="login">CONNEXION</a>
                    <?php endif ?>
                </div>
            </div>
        </nav>