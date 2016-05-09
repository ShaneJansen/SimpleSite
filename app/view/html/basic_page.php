<?php include 'includes/header.php'?>

<body>
<div class="container text-center">
    <div class="spacer-medium"></div>
    <h2 class="text-muted"><?php echo $vars['basicPage']->getTitle(); ?></h2>
    <div class="spacer-medium"></div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-left">
            <p><?php echo $vars['basicPage']->getText(); ?></p>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
</body>

<?php include 'includes/footer.php'?>