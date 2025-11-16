<?php
    include('header.php');
?>

<body>
    <?php include('layout/loginHeader.html'); ?>
    <div class="container">
        <div class="row justify-content-center align-items-center h-100 my-4">
            <div class="col-12 col-lg-7 col-xl-5">
                <div class="card shadow-2-strong card-registration border-2" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-2 pb-2 mb-md-5 pageTitle">Login</h3>
                        <div id="errorMessage" class="alert alert-danger" role="alert" style="display: none;">
                            Invalid Student ID or password.
                        </div>
                        <form method="post" id="loginForm">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="StudentID">Student ID</label>
                                <input type="text" id="StudentID" name="StudentID" class="form-control">
                            </div>

                            <div id="passwordLogIn" class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <a class="btn btn-primary btn-block mb-4" href="Home.php">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
<script>
</script>

</html>