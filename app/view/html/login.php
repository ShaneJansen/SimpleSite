<?php include 'includes/header.php'?>

<body>
    <div class="container">
        <div style="margin: 50px 0 0 0;">
            <div class="center-block" style="max-width: 300px;">
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <span class="error">
                        <?php if (isset($vars['error'])) echo $vars['error']; ?>
                    </span>
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'?>