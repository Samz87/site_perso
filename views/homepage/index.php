<?php
if (isset($_SESSION['isLogged'])) {
    require_once('views/templates/header_admin.php');
} else {
    require_once('views/templates/header.php');
} ?>

<body>
    <main>
        <div class="container-fluid homepage">
            <div class="row">
                <div class="col-md-6 col-xs-12 homepage-section">
                    <div class="img-homepage">
                        <img src="http://placehold.it/500x300" alt="">
                    </div>
                    <div class="text-homepage">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eum explicabo inventore ut aperiam? Aspernatur fuga distinctio incidunt minus nihil? Ducimus, beatae. Modi eaque corrupti necessitatibus. Nesciunt soluta recusandae excepturi, ipsam tempora dolore voluptates accusamus commodi optio maxime, eligendi consequuntur in similique amet vero! Quo, velit labore. Laudantium, culpa illum.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 homepage-section cards-section">
                    <!-- <div class="col-6 col-xs-12 card">
                        <img src="http://placehold.it/100x70" alt="">
                    </div>
                    <div class="col-6 col-xs-12 card">
                        <img src="http://placehold.it/100x70" alt="">
                    </div>
                    <div class="col-6 col-xs-12 card">
                        <img src="http://placehold.it/100x70" alt="">
                    </div>
                    <div class="col-6 col-xs-12 card">
                        <img src="http://placehold.it/100x70" alt="">
                    </div>
                </div> -->
                    <div class="card">
                        <img class="card-img-top" src="http://placehold.it/250x80" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">A propos de moi</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="http://placehold.it/250x80" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Mes objectifs</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="http://placehold.it/250x80" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Actualités</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="http://placehold.it/250x80" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Me contacter</h5>
                        </div>
                    </div>
                </div>
    </main>
</body>
<?php require_once('views/templates/footer.php');
