<header>
    <nav class = "navbar navbar-expand-lg navbar-dark bg-light">
        <a class = "navbar-brand" href = "#">ICT600 Assignment</a>
        
        <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent"
                aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
            <?php $active = basename ($_SERVER ['PHP_SELF']); ?>
            <ul class = "navbar-nav">
                <li class = "nav-item"><a class = "nav-link <?php echo ($active == 'index.php') ? 'active' : ''; ?>" href = "../php/index.php">My Profile</a></li>
                <li class = "nav-item"><a class = "nav-link <?php echo ($active == 'formCreate.php') ? 'active' : ''; ?>" href = "../php/formCreate.php">Apply Form</a></li>
                <li class = "nav-item"><a class = "nav-link <?php echo ($active == 'formRead.php') ? 'active' : ''; ?>" href = "../php/formRead.php">View Form</a></li>
            </ul>
            <ul class = "navbar-nav ml-auto">
                <li class = "nav-item"><a class = "nav-link <?php echo ($active == 'sessionDestroy.php') ? 'active' : ''; ?>" href = "../php/sessionDestroy.php">Clear Session</a></li>
            </ul>
        </div>
    </nav>
</header>