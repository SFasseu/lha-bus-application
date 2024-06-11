<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Acceuil</title>
    <link href="{{asset('/admin')}}/bertrand/reservation/css/acceuil.css" rel="stylesheet" />
</head>

<body>
<div class="navigation">
    <div class="userBx">
        <div class="imgBx">
            <img src="" alt="" />
        </div>
        <p class="logoname">Bertrand</p>
    </div>
    <div class="menuToggle"></div>
    <div class="menu">
        <ul>
            <li><a href="Compte/profile.html">Mon Profile</a></li>
            <li><a href="#">Modifier Profile</a></li>
            <li><a href="#">Changer mon de passe</a></li>
            <li><a href="Compte/login.html">Decconexion</a></li>
            <li><a href="#">Contactez nous</a></li>
            <li><a href="acceuil.html">Home</a></li>
        </ul>
    </div>
</div>
</header>
</div>

    <img src="{{asset('/admin')}}/bertrand/reservation/images/1.jpg" class="acceuil">
    <br>
    <br>

    <br>
    <center>
        </a>
        </a>
        <a href="{{ route('login') }}" class=" rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            <button class="btn">ADMINISTRATEUR</button>
        </a>
        <a href="reserver.html"><button class="btn">CLIENT</button></a>

    </center>


    <br>
    <br>
    <center>
        <h1><b>En quete d'inspiration pour votre prochain Voyage?</b></h1>
    </center>
    <hr>
    <p>Nos destinations</p>


    <div class="container">

        <div class="grid">
            <img src="{{asset('/admin')}}/bertrand/reservation/images/REGION/DOUALA.jpg" class="yo">
            <div class="texts">
                <h1>YAOUNDE-MBALMAYO</h1>

            </div>
        </div>

        <div class="grid">
            <img src="{{asset('/admin')}}/bertrand/reservation/images/REGION/YAOUNDE.jpg" class="yo">
            <div class="texts">
                <h1>YAOUNDE-SANGMELIMA</h1>

            </div>
        </div>

        <div class="grid">
            <img src="{{asset('/admin')}}/bertrand/reservation/images/REGION/BAMENDA.jpg" class="yo">
            <div class="texts">
                <h1>YAOUNDE-EBOLOWA</h1>

            </div>

    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let navigation = document.querySelector('.navigation');
        menuToggle.onclick = function() {
            navigation.classList.toggle('active')
        }
    </script>
</body>
<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>
</html>
