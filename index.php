<?php include_once 'header.php' ?>
<body class="">
  <!-- Pushy Menu -->
  <nav class="pushy pushy-left">
    <ul class="list-unstyled">
        <li><a href="#domov">Domov</a></li>
        <li><a href="#lastnosti">Lastnosti</a></li>
        <li><a href="#info">Informacije o nas</a></li>
        <li><a href="#turnirji">Turnirji</a></li>
        <li><a href="#galerija">Galerija</a></li>
        <li><a href="#kontakt">Stopite v kontakt!</a></li>
        <li><a href="register.php">Registracija</a></li>
        <li><a href="login.php">Prijava</a></li>
    </ul>
  </nav>

  <!-- Site Overlay -->
  <div class="site-overlay"></div>

    <header id="home">
        <div class="container-fluid">
            <!-- change the image in style.css to the class header .container-fluid [approximately row 50] -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-10">
                        <a href="#" class="thumbnail logo">
                            <img src="images/your_logo.png" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-1 col-md-offset-8 col-xs-2 text-center">
                      <div class="menu-btn"><span class="hamburger">&#9776;</span></div>
                    </div>
                </div>
                <div class="jumbotron">
                    <h1><small>Pridruži se ali organiziraj svoj</small></br>
					<strong>Nogometni Turnir</strong></h1>
                    <p>Pozdravljeni na spletni strani, kjer boste z lahkoto organizirali turnirje ali pa se nanje le prijavili!</p>
                    <p><a class="btn btn-primary btn-lg" role="button">Nauči se kako in kaj</a> <a href="#" class="btn btn-lg btn-danger" role="button">Začni s turnirji</a></p>
                </div>
            </div>
        </div>
    </header>
    <section id="feat">
        <div class="container">
            <div class="row features">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="100ms">
                    <span class="typcn typcn-pencil x3"></span>
                    <h4>Od kje ideja?</h4>
                    <p>Ste se že kdaj znašli v primeru, kjer ste s skupino prijateljev želeli poskusiti igrati nogomet proti ostalim, vendar niste imeli oseb proti katerim bi igrali? To se je zgodilo nam!</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="300ms">
                    <span class="typcn typcn-camera-outline x3"></span>
                    <h4>Zakaj smo to naredili?</h4>
                    <p>Ker smo na to težavo naleteli mi, smo pomislili, da seveda nismo edini, ki se s njo ubadamo. Spletno stran smo se odločili ustvariti za vse, ki imajo s tem probleme.</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="500ms">
                    <span class="typcn typcn-bookmark x3"></span>
                    <h4>Kdo lahko uporablja storitev?</h4>
                    <p>Storitev lahko uporabljajo vsi, ki si želijo udeležiti ali organizirati nogometne turnirje. Storitev je v celoti brezplačna in želimo, da vam bo všeč.</p>
                </div>
            </div>
        </div>
    </section>
<?php include_once 'footer.php' ?>
