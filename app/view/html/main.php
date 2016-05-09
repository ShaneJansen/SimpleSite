<?php include 'includes/header.php'?>

<body>
    <!-- Slide Show -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
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

    <div class="container text-center">
        <div class="spacer-medium"></div>
        <h1 class="text-muted">Kentucky Academic Advising Association</h1>
        <div class="spacer-medium"></div>

        <div class="row">
            <div class="col-sm-6 text-center">
                <img class="img-responsive" src="/images/kacada.png" style="margin: 0 auto;">
            </div>
            <div class="col-sm-6 text-left" style="margin-top: 20px;">
                <p class="lead"><?php echo $vars['mainPage']->getDescription(); ?></p>
            </div>
        </div>

        <div class="spacer-medium"></div>
        <h2 class="text-muted">Mission Statement</h2>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 text-left" style="">
                <p class="lead"><?php echo $vars['mainPage']->getMissionStatement(); ?></p>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="spacer-medium"></div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <ul class="list-inline">
                    <li>
                        <a href="https://www.nacada.ksu.edu" target="_blank">
                            <img class="img-responsive" src="/images/nacada.png" style="margin: 0 auto;">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/Kacada-442849522558947" target="_blank">
                            <img class="img-responsive" src="/images/facebook.png" style="margin: 0 auto;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="spacer-medium"></div>
    </div>
</body>

<?php include 'includes/footer.php'?>