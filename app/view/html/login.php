<?php include 'includes/header.php'?>

<body>
    <div class="container">
        <div class="center-block" style="max-width: 200px;">
            <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

    <?php var_dump($vars) ?>
</body>

<?php include 'includes/footer.php'?>