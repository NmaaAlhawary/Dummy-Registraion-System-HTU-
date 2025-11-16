<?php include('header.php');?>
<title>Home</title>
</head>

<body>
    <?php include('layout/navigation.php'); ?>
    <div class="container">
        <main class="main">
            <h1 id="" class="pageTitle"> Dummy Registeration Portal</h1>
            <section class="mainContent">
                <div class="card-deck">
                    <div class="card col-4">
                        <a href="StudentPreferences.php" class="card-link">
                            <div class="card-body hoveredText">
                                <h5 class="card-title"><strong>My Preferences</strong></h5>
                                <p class="card-text">Browse your selected courses and schedulres preferences</p>
                            </div>
                        </a>
                    </div>
                    <div class="card col-4">
                        <a href="CoursesList.php" class="card-link">
                            <div class="card-body hoveredText">
                                <h5 class="card-title"><strong>Courses List</strong></h5>
                                <p class="card-text">Browse the available courses to choose the prefered ones in the
                                    next semester</p>
                            </div>
                        </a>
                    </div>
            </section>
        </main>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>