<nav class="navbar navbar-nav navbar-dark navbar-expand-md bg-secondary w-100 sticky-top header" id="menu">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand m-0 col-3 col-md-2" id="vtes"><a href="/" class="text-body fs-2">
            <img src="/static/img/vampire-v5.png" alt="VtES Nantes" width="825px" class="w-100 px-3" />
        </a></h1>
        <div class="collapse navbar-collapse col-8 text-light" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link<?php
                    print(($_SERVER['REQUEST_URI'] == '/') ? " active" : "");
                    ?>">Accueil</a>
                </li>
                <!-- Stratégie élémentaire
                <li class="nav-item">
                    <a href="/strategie-elementaire" class="nav-link<?php
                    print(($_SERVER['REQUEST_URI'] == '/strategie-elementaire') ? " active" : "");
                    ?>">Stratégie élémentaire</a>
                </li>
                -->
                <!-- Tournois mensuels -->
                <li class="nav-item">
                    <a href="/rise-of-the-fallen" class="nav-link<?php
                    print(($_SERVER['REQUEST_URI'] == '/rise-of-the-fallen') ? " active" : "");
                    ?>">Rise of the Fallen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
