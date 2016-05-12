<?php include 'includes/header.php'?>

<script>
    $(function() {
        $('.carousel').carousel({
            interval: 4000,
            pause: "none"
        });
    });
</script>

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

    <div class="container-fluid text-center">
        <div class="row" style="">
            <div class="spacer-medium"></div>
            <h1 class="text-muted">Kentucky Academic Advising Association</h1>
            <div class="spacer-medium"></div>

            <div class="row">
                <a href="/vision-and-mission" style="color: inherit;">
                    <div class="col-sm-4">
                        <i style="font-size: 5em;" class="material-icons">remove_red_eye</i>
                        <h3 class="text-muted" style="margin-top: 0;">Vision and Mission</h3>
                    </div>
                </a>
                <a href="/events-and-programs" style="color: inherit;">
                    <div class="col-sm-4">
                        <i style="font-size: 5em;" class="material-icons">event</i>
                        <h3 class="text-muted" style="margin-top: 0;">Events & Programs</h3>
                    </div>
                </a>
                <a href="/contact" style="color: inherit;">
                    <div class="col-sm-4">
                        <i style="font-size: 5em;" class="material-icons">email</i>
                        <h3 class="text-muted" style="margin-top: 0;">Contact</h3>
                    </div>
                </a>
            </div>
            <div class="spacer-medium"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <img class="img-responsive" src="/images/kacada.png" style="margin: 0 auto;">
                </div>
                <div class="col-sm-6 text-left" style="margin-top: 20px;">
                    <p class="lead"><?php echo $vars['mainPage']->getDescription(); ?></p>
                </div>
            </div>
        </div>

        <div class="spacer-medium"></div>

        <div class="container">
            <h2 class="text-muted">Mission Statement</h2>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 text-left" style="">
                    <p class="lead"><?php echo $vars['mainPage']->getMissionStatement(); ?></p>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <div class="spacer-medium"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="https://www.nacada.ksu.edu" target="_blank">
                        <img class="img-responsive" src="/images/nacada.png" style="margin: 0 auto;">
                    </a>
                </div>
                <div class="col-sm-6 text-left">
                    <p>KACADA is an allied organization of NACADA: The Global Community for Academic Advising, and fully supports the mission, vision and goals of our national organization.</p>
                </div>
            </div>
        </div>

        <div class="spacer-medium"></div>
    </div>
</body>

<?php include 'includes/footer.php'?>