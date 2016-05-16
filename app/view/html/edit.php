<?php include 'includes/header.php'?>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'.editorSmall',
        height: 100,
        plugins: "code"
    });
    tinymce.init({
        selector:'.editorMedium',
        height: 300,
        plugins: "code"
    });
    tinymce.init({
        selector:'.editorLarge',
        height: 500,
        plugins: "code"
    });
</script>

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

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home Page</a></li>
            <?php foreach($vars['basicPages'] as $basicPage): ?>
                <li role="presentation"><a href="#<?php echo $basicPage->getTag(); ?>" role="tab" data-toggle="tab"><?php echo $basicPage->getTitle(); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home page -->
            <div role="tabpanel" class="tab-pane fade in active" id="home">
                <form method="post" style="margin-top: 20px;">
                    <input type="hidden" name="id" value="<?php echo $vars['mainPage']->getId(); ?>">
                    <h4>Description</h4>
                    <textarea class="editorSmall" name="description"><?php echo $vars['mainPage']->getDescription(); ?></textarea>
                    <br>
                    <h4>Mission Statement</h4>
                    <textarea class="editorSmall" name="missionStatement"><?php echo $vars['mainPage']->getMissionStatement(); ?></textarea>
                    <br>
                    <span class="success"><?php if (isset($vars['success'])) echo $vars['success']; ?></span>
                    <br>
                    <button type="submit" name="form" value="mainPage" class="btn btn-primary">Update</button>
                </form>
            </div>

            <!-- Basic pages -->
            <?php foreach($vars['basicPages'] as $basicPage): ?>
                <div role="tabpanel" class="tab-pane fade" id="<?php echo $basicPage->getTag(); ?>">
                    <form method="post" style="margin-top: 20px;">
                        <input type="hidden" name="id" value="<?php echo $basicPage->getId(); ?>">
                        <h4><?php echo $basicPage->getTitle(); ?></h4>
                        <textarea class="editorLarge" name="text"><?php echo $basicPage->getText(); ?></textarea>
                        <br>
                        <span class="success"><?php if (isset($vars['success'])) echo $vars['success']; ?></span>
                        <br>
                        <button type="submit" name="form" value="basicPage" class="btn btn-primary">Update</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'?>