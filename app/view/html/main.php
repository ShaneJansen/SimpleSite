<?php include 'includes/header.php'?>

<body>
    <!-- Slide Show -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
            <li data-target="#carousel" data-slide-to="5"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="margin: 0 auto;">
            <div class="item active"><img src="/images/school_nku.png" class="center-block"></div>
            <div class="item"><img src="/images/school_eku.png" class="center-block"></div>
            <div class="item"><img src="/images/school_midway.png" class="center-block"></div>
            <div class="item"><img src="/images/school_bluegrass.png" class="center-block"></div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="spacer-medium"></div>

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/images/kacada.png">
            </div>
            <div class="col-md-6 text-center">
                <?php echo $vars['description']; ?>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'?>