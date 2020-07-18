<?php require_once('views/templates/header.php'); ?>

<body>
    <main>
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="">
                <input class="" name="formconnect" type="submit" value="Envoyer" />
            </div>
        </form>
    </main>
</body>
<?php require_once('views/templates/footer.php');
