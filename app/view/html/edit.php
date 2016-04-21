<?php include 'includes/header.php'?>

<body>
    <div class="container">
        <!-- Header -->
        <div class="row">
            <div class="col-md-6">
                <h3>Edit Website</h3>
            </div>
            <div class="col-md-6 text-right">
                <a type="button" class="btn btn-danger" href="/login/logout">Logout</a>
            </div>
        </div>

        <div class="spacer-medium"></div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home Page</a></li>
            <li role="presentation"><a href="#2nd" aria-controls="2nd" role="tab" data-toggle="tab">2nd Page</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home page -->
            <div role="tabpanel" class="tab-pane fade in active" id="home">
                <form method="post" style="margin-top: 20px;">
                    <h4>Description</h4>
                    <textarea class="form-control" name="description"><?php echo $vars['mainPage']->getDescription(); ?></textarea>
                    <input type="hidden" name="id" value="<?php echo $vars['mainPage']->getId(); ?>">
                    <br>
                    <span class="success">
                        <?php if (isset($vars['success'])) echo $vars['success']; ?>
                    </span>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

            <!-- 2nd page -->
            <div role="tabpanel" class="tab-pane fade" id="2nd">....</div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'?>