<nav class="navbar navbar-nav navbar-dark navbar-expand-md bg-secondary w-100 sticky-top header">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand ms-0 col-2"><a href="/" class="text-body fs-2">
            <img src="./static/img/vampire-v5.png" alt="VtES Nantes" width="825px" class="w-100 p-3"/>
        </a></h1>
        <div class="collapse navbar-collapse col-8 text-light" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link<?php
                    print(($_SERVER['REQUEST_URI'] == '/') ? " active" : "");
                    ?>">Accueil</a>
                </li>
                <!-- Tournois mensuels -->
            </ul>
        </div>
    </div>
</nav>
