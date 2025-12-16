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
                    <a href="agenda" class="nav-item nav-link <?= $title=='Agenda'?'active':''?>">Agenda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $title=='Services'?'active':''?>" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu m-0">
                            <a href="service?_s=gestion_projet" class="dropdown-item">Gestion de projet</a>
                            <a href="service?_s=voyage" class="dropdown-item">Voyage</a>
                            <a href="service?_s=logement" class="dropdown-item">Logement</a>
                            <a href="service?_s=logiciel" class="dropdown-item">Developpement logiciel</a>
                            <a href="service?_s=siteweb" class="dropdown-item">Création site web</a>
                            <a href="service?_s=coaching" class="dropdown-item">Business coaching</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?= $title=='Formations'?'active':''?>" data-bs-toggle="dropdown">Formation</a>
                        <div class="dropdown-menu m-0">
                            <a href="formation?_s=init_info" class="dropdown-item">Initialtion informatique</a>
                            <a href="formation?_s=bureautique" class="dropdown-item">Bureautique</a>
                            <a href="formation?_s=secretariat" class="dropdown-item">Secrétariat</a>
                            <a href="formation?_s=management" class="dropdown-item">Management</a>
                            <a href="formation?_s=logiciel" class="dropdown-item">Programmation logiciel</a>
                            <a href="formation?_s=web" class="dropdown-item">Programmation web</a>
                            <a href="formation?_s=mobile" class="dropdown-item">Programmation Mobile</a>
                            <a href="formation?_s=database" class="dropdown-item">Administration Base de données</a>
                        </div>
                    </div>
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