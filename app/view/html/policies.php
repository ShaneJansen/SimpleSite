<?php include 'includes/header.php'?>

<body>
<div class="container text-center">
    <div class="spacer-medium"></div>
    <h2 class="text-muted">By-Laws & Policies</h2>
    <div class="spacer-medium"></div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-left" style="">
            <p><?php echo $vars['policiesPage']->getPolicies(); ?></p>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
</body>

<?php include 'includes/footer.php'?>