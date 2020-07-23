<?php
if (!isset($_SESSION['isLogged'])) {
    require_once('views/templates/header.php');
} else {
    require_once('views/templates/header_admin.php');
} ?>

<main>
    <div class="container-fluid objectives">
        <div class="row">
            <div class="col-md-6 col-xs-12 pro-obj">
                <h2>Objectifs professionnels</h2>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 col-xs-12 perso-obj">
                <h2>Objectifs personnels</h2>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>
                <div class="obj">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nemo voluptatibus esse neque, officia veritatis et est suscipit aut voluptate dolore nesciunt dolores recusandae libero quis maiores quam beatae eos. Qui quisquam dolor, quis aspernatur optio fugiat cupiditate quos commodi!</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once('views/templates/footer.php');
