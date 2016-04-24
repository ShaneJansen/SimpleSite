<?php include 'includes/header.php'?>

<script>
    $(document).delegate('.tabbed', 'keydown', function(e) {
        var keyCode = e.keyCode || e.which;

        if (keyCode == 9) {
            e.preventDefault();
            var start = $(this).get(0).selectionStart;
            var end = $(this).get(0).selectionEnd;

            // Set textarea value to: text before caret + tab + text after caret
            $(this).val($(this).val().substring(0, start)
                + "\t"
                + $(this).val().substring(end));

            // Put caret at right position again
            $(this).get(0).selectionStart =
                $(this).get(0).selectionEnd = start + 1;
        }
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

        <div class="spacer-medium"></div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home Page</a></li>
            <li role="presentation"><a href="#policies" aria-controls="policies" role="tab" data-toggle="tab">By-Laws & Policies</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home page -->
            <div role="tabpanel" class="tab-pane fade in active" id="home">
                <form method="post" style="margin-top: 20px;">
                    <input type="hidden" name="id" value="<?php echo $vars['mainPage']->getId(); ?>">
                    <h4>Description</h4>
                    <textarea class="form-control tabbed" name="description" rows="5"><?php echo $vars['mainPage']->getDescription(); ?></textarea>
                    <br>
                    <h4>Mission Statement</h4>
                    <textarea class="form-control tabbed" name="missionStatement" rows="5"><?php echo $vars['mainPage']->getMissionStatement(); ?></textarea>
                    <br>
                    <span class="success"><?php if (isset($vars['success'])) echo $vars['success']; ?></span>
                    <br>
                    <button type="submit" name="form" value="mainPage" class="btn btn-primary">Update</button>
                </form>
            </div>

            <!-- 2nd page -->
            <div role="tabpanel" class="tab-pane fade" id="policies">
                <form method="post" style="margin-top: 20px;">
                    <input type="hidden" name="id" value="<?php echo $vars['policiesPage']->getId(); ?>">
                    <h4>By-Laws & Policies</h4>
                    <textarea class="form-control tabbed" name="policies" rows="15"><?php echo $vars['policiesPage']->getPolicies(); ?></textarea>
                    <br>
                    <span class="success"><?php if (isset($vars['success'])) echo $vars['success']; ?></span>
                    <br>
                    <button type="submit" name="form" value="policiesPage" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include 'includes/footer.php'?>