<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation - Collège Jean de la Mennais</title>
    
    <!-- Lien Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('StockCake-Vibrant Geometric Art_1727875498.jpg');
            font-family: 'Lucida Console', monospace;
        }

        .navbar {
            background-color: ghostwhite;
            height: 80px;
        }

        .navbar-brand, .nav-link {
            color: red; !important;
        }

        .jumbotron {
            background-color: ghostwhite;
            color: darkred;
            padding: 60px 20px;
            text-align: center;
        }

        .jumbotron h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 2rem;
            color: #ff0000;
            text-align: center;
            margin-bottom: 30px;
        }

        .section-content {
            font-size: 1.2rem;
            text-align: justify;
            color: #333;
        }

        .container-box {
            background-color: white;
            padding: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .footer {
            background-color: #ff0000;
            color: white;
            text-align: center;
            padding: 10px;
        }

         @keyframes slideFromLeft {
    0% {
        transform: translateX(-100%);
        opacity: 0;
    }
    100% {
        transform: translateX(0);
        opacity: 1;
    }
}


    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
    	<br>
        <div class="container-fluid">
        	
            <a class="navbar-brand" href="#">Collège Jean de la Mennais</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
                    <li class="nav-item"><a class="nav-link" href="#infrastructure">Infrastructures</a></li>
                    <li class="nav-item"><a class="nav-link" href="#programmes">Programmes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#admission">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1 style="animation: slideFromLeft 2s ease-in-out;">Présentation du Collège Jean de la Mennais</h1>
<b><u><p style="color: ghostwhite;">               ettvbdhjj</p></u></b>
        <p style="color: red;">Meilleur collège de toute la région du <font size="5px" style="color: red;">Tonkpi.</font></p>
    </div>

    <!-- Notre Mission -->
    <div class="container container-box" id="mission">
        <h2 class="section-title">Notre Mission</h2>
        <p class="section-content">
            Le Collège Jean de la Mennais s’engage à offrir un environnement éducatif de qualité, axé sur le développement académique et personnel de chaque élève. Nous mettons un point d’honneur à inculquer des valeurs d’excellence, d’intégrité et de respect, tout en accompagnant chaque élève vers la réussite.
        </p>
    </div>

    <!-- Infrastructures -->
    <div class="container container-box" id="infrastructure">
        <h2 class="section-title">Nos Infrastructures</h2>
        <p class="section-content">
            Nos infrastructures modernes comprennent des salles de classe spacieuses, une bibliothèque bien fournie, des laboratoires scientifiques et un grand terrain de sport. Ces installations permettent à nos élèves de s’épanouir aussi bien sur le plan académique que personnel.
        </p>
    </div>

    <!-- Programmes -->
    <div class="container container-box" id="programmes">
        <h2 class="section-title">Programmes Académiques</h2>
        <p class="section-content">
            Le Collège propose un programme académique rigoureux, avec un accent sur les matières scientifiques, littéraires, et techniques. Nous offrons aussi des activités parascolaires variées, incluant le sport, les arts et la culture, pour un épanouissement complet des élèves.
        </p>
    </div>

    <!-- Admission -->
    <div class="container container-box" id="admission">
        <h2 class="section-title">Admission</h2>
        <p class="section-content">
            Le Collège Jean de la Mennais ouvre ses portes à tous les élèves motivés. Le processus d’inscription est simple et accessible à tous. Vous pouvez visiter notre établissement ou nous contacter pour plus d’informations.
        </p>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Collège Jean de la Mennais - Tous droits réservés</p>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
