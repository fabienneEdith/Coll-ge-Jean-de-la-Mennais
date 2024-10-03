<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Web CJM</title>

    <!-- Lien Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Importation de Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Importation des icônes Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



    <style>

        body {
/*            background-image: url('StockCake-Vibrant Geometric Art_1727875498.jpg');*/
background-color: white;
            font-size: 1.1rem;
            font-family: 'Calibri';
        }


        /* Navbar Styling */
        .navbar {
            
            background-color: white;
            height: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);

        }
        .button-pulse {
    background-color: #d32f2f;
    color: white;
    size: 3rem;
    
    border:none;
    border-radius: 500px;
    animation: pulse 1s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    25% {
        transform: scale(1.05);
    }
    70% {
        transform: scale(1);
    }
}


        .navbar-brand {
            font-size: 1rem;
            color: #ff0000 !important;
        }

        .nav-link {
            color: #333;
            font-weight: bold;
            font-size: 1.1rem;
            font-family: 'Calibri';
        }




        .nav-link:hover {
            color: darkred!important;
        }

        /* Jumbotron Styling */
        

            .jumbotron {
    background-color: #ff0000; /* Fond rouge */
    color: white;
    padding: 80PX;
    text-align: center;
    height: 500px;


                                
}


        

        .jumbotron h1 {
            font-size:3.7rem;
           
               animation: slideIn 1s ease-in-out;
            
        }

        .jumbotron p {
            font-size: 1.5rem;
            font-family: 'calibri';
         
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: black; }
        }

        @keyframes slideIn {
            from {
                transform: translateY(30%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Section Styling */
        .section-title {
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: red;
font-family: 'Calibri';
         
            
        }

        .section-content {
            font-size: 1rem;
            color: #333;
            font-family: Calibri;
      
        
        }

        /* Footer Styling */
        .footer {
            background-color: #ff0000;
            color: white;
            text-align: center;
            padding: 10px;
        }

        /* Container Box Styling */
        .container-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 350px;
            width: 500px;
            margin-bottom: 50px;
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




@keyframes rotateIn {
    0% {
        transform: rotate(-10deg);
        opacity: 0;
    }
    25% {
        transform: rotate(0);
        opacity: 1;
    }
}





.start-btn i {
    font-size: 24px;
    margin-left: 10px; /* Espacement entre le texte et la flèche */
    transition: transform 0.3s ease;
}






.typing-animation {
    
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
    width: 0;
    animation: typing 6s steps(30, end) infinite, blink-caret 0.75s step-end infinite;
}

@keyframes typing {
    0% { width: 4; }
    70% { width: 100%; }
    85% { width: 100%; } /* Pause à la fin */
    100% { width: 0; }   /* Recommence à 0 pour une boucle */
}

@keyframes blink-caret {
    from, to { border-color: transparent; }
    50% { border-color: black; }
}

    </style>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><b><font size="7px">C</font></b><b style="color: gray;">OLLEGE </b><br> <b><font size="6px">J</font></b><b style="color: gray;">EAN de la </b><b><font size="6px">M</font></b>	<b style="color: gray;">ENNAIS</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Collège</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#accueil">Accueil</a></li>
                        <li><a class="dropdown-item" href="presentation.php">Présentation</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admission</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#directeur">Mot du Directeur</a></li>
                        <li><a class="dropdown-item" href="#alumni">Nos Alumni</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#scolarite">Contact</a></li>
                <button class="button-pulse"style="border-radius: 500px; background-color:red;">
                    <li class="nav-item"><a class="nav-link" href="#connexion" style="color: white;">Se connecter</a></li>
                </button>
               
               
            </ul>
        </div>
    </div>
</nav>

<br>
  
<br>
    <!-- Section d'accueil (Jumbotron) --><br><br>
    <div class="jumbotron" id="accueil">
       
        <h1>Bienvenue au Collège Catholique Jean de la Mennais</h1><br>
        <p class="typing-animation">Meilleur collège de la région du Tonkpi.</p><br>
        
       <a href="#miss" style="text-decoration: none; color: white;"> <button id="start-btn" style="background-image: url('Sans tre.jpg');  border-radius: 100px; font-size: 30PX; height: 50px; width: 500px;font-family: Calibri; color: white; "class="button-pulse"   > D E M A R E R  <i class="bi bi-arrow-down-circle"></i></button></a>

    </div>
    <br><br>

    <div class="d-flex align-items-center">
    <div>
        <img src="superkids.jpg" style="width: 500px; height: 500 PX;">
    </div>
    <div style="margin-left: 40px;">
        <b><p style="color: gray;"  id="jm"> <font size="5px">Le </font></font><b><font size="7px" color="red">C</font></b><b style="color: gray;">OLLEGE </b> <font size="6px" color="red">J</font></b><b>EAN de la </b><b><font size="6px" color="red">M</font></b>    <b style="color: gray;">ENNAIS</b> <b>est un établissement d'enseignement situé à Man, en Côte d'Ivoire.  Fondé en 1954 par la congrégation religieuse des Frères de l'Instruction Chrétienne de Ploërmel. Cette congrégation a été fondée par l'abbé Jean-Marie de la Mennais et Gabriel Deshayes en France au XIXe siècle, avec une mission d'éduquer les jeunes, en particulier ceux issus de milieux modestes, tout en leur inculquant des valeurs chrétiennes. 
            <br> <br>

Le Collège Jean de la Mennais offre une éducation de qualité, alliant formation académique et développement moral et spirituel. Les infrastructures modernes de l'école soutiennent un cadre d'apprentissage adapté à la formation de futurs leaders. Les programmes académiques <b><a href="presentation.php" style="text-decoration: none; color: red; size:7px;"> voir plus...</a> </b><br><br>
<a href="presentation.php" style="text-decoration: none; color: white;"> <button id="start-btn" style="background-color: red;  border-radius: 50px; font-size: 20PX; height: 50px; width: 180px;font-family: Calibri; margin-left: 150px; color: white; "class="button-pulse"   > <b>VOIR PLUS <i class="bi bi-arrow-right-circle"></i></button></a></b>


</p>
</b>
    </div>
</div>
<br><br>
<b><div style="background-color:black; color: white; align-content: center;" ><br><br>
    <center><h1 > Vous désiriez faire une admission?</h1><br>

  <a href="presentation.php" style="text-decoration: none; color: white;"> <button id="start-btn" style="background-color: red;  border-radius: 50px; font-size: 20PX; height: 50px; width: 200px;font-family: Calibri;  color: white; border-style: none; " > <b>PRENDRE UN RDV <i class="bi bi-whatsapp"></i></b></button></a></b></center>
  <br>  <br>    

</div>


    
    <!-- Section Notre Mission -->
    <br>    <br>     
  <div id="miss">
    <br><br><br>
    <div class="container text-center my-5"  style="border-style: orangered; border-color: red; border-radius: 200px;background-image: url('Sans titre.jpg'); color: white; animation: rotateIn 0.5s ease-in-out;"><br>
<br><b><u><h1  >Notre Mission</h1></u></b><font size="4.8px"> <p  >
            Nous sommes engagés à fournir un environnement d'apprentissage de qualité qui prépare nos élèves pour un avenir brillant. <br>
            Nos enseignants qualifiés et nos infrastructures modernes garantissent un développement optimal de nos élèves.
        </p></font><br>
    </div>
    
<div class="container"  style=" background-image: url('StockCake-Abstract geometric art_1727873730.jpg'); background-size: max(10, 10);"><br><br>
    <div class="row">
        <!-- Mot du Directeur -->
        <div class="col-md-6 d-flex flex-column align-items-center"style="background-color: white; border-color: red; border-radius: 40px; border-style: solid; height: 380PX; width: 400PX;" >
            <img src="20a1ac12-af9d-473d-9829-8615a5e056aa.jfif" alt="Photo du Directeur" class="img-fluid rounded-circle" style="width: 150px; height: 160px;">
            <h3 class="section-title">Mot du Directeur</h3>
            <p class="section-content">
                "Au Collège Jean de la Mennais, notre mission est d'accompagner <br>nos jeunes dans leur parcours académique et humain. 
                Ensemble, nous formons des leaders de demain,<br> capables de relever les défis du monde moderne."
            </p>
        </div></div>
<br>	<br> <br>
        <!-- Nos Alumni -->
        <div class="col-md-6 d-flex flex-column align-items-center"style="background-color: white; border-color: red;border-radius: 40px; border-style: solid; height: 380PX; width: 400PX;">
        	
            <img src="images.jfif" alt="Photo d'Alumni" class="img-fluid rounded-circle" style="width: 150px; height: 170px;">
            <h3 class="section-title" >Nos Alumni</h3>
            <p class="section-content">
                Le collège Catholique Jean de la Mennais m'a permis d'acquerir des compétences et des valeurs humaines, qui m'ont permis aujourd'hui d'exceller dans le monde professionel
            </p>
        </div>
    </div>
     <br>	<br>	
</div>


    <!-- Section Connexion -->
    <div class="container container-box" id="connexion">
        <h2 class="section-title">Connexion</h2>
        <form id="loginForm" action="login_process.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer votre mot de passe" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Collège Jean de la Mennais- Tous droits réservés</p>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
