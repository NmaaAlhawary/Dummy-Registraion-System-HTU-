<?php include('header.php');
include('components/Modals.php');?>
<title>Student Schedule Preferences List</title>
</head>

<body>
    <?php include('layout/navigation.php'); ?>
    <div class="container">
        <div class="row flex-wrap min-vh-100">
            <div class="col py-3 mx-4">
                <div class="d-flex align-items-center justify-content-between">
                    <h2 class="pageTitle">Student Schedule Preferences</h2>
                    <a id="addUserButton" class="btn btn-primary" href="CoursesList.php" id="addUser" role="button">Add
                        new
                        Schedule preference</a>
                </div>
                <table id="usersTable" class="table table-sm table-striped">
                    <thead class="text-nowrap">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">
                                <div class="row">
                                    <div class="col col-md-4">Day</div>
                                    <div class="col col-md-8">Time</div>
                                </div>
                            </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="'.$row['id'].'">
                            <th scope="row">1.</th>
                            <td>Maths For Computing</td>
                            <td>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        S T
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                        <div>10:30 - 12:30</div>
                                        <div>12:30 - 14:30</div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        M W
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                        <div>10:30 - 12:30</div>
                                        <div>12:30 - 14:30</div>
                                    </div>
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#CourseAddition"><i title="edit"
                                        id="edituser" class="fa-lg fa-solid fa-pen fa-1x"></i></a><a data-toggle="modal"
                                    data-target="#CourseDeletion"><i class="fa-lg fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                        <tr id="'.$row['id'].'">
                            <th scope="row">2.</th>
                            <td>Programming</td>
                            <td>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        S T
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        M W
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                        <div>10:30 - 12:30</div>
                                    </div>
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#CourseAddition"><i title="edit"
                                        id="edituser" class="fa-lg fa-solid fa-pen fa-1x"></i></a><a data-toggle="modal"
                                    data-target="#CourseDeletion"><i class="fa-lg fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                        <tr id="'.$row['id'].'">
                            <th scope="row">3.</th>
                            <td>Fundamentals of Computing</td>
                            <td>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        S T
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                    </div>
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#CourseAddition"><i title="edit"
                                        id="edituser" class="fa-lg fa-solid fa-pen fa-1x"></i></a><a data-toggle="modal"
                                    data-target="#CourseDeletion"><i class="fa-lg fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                        <tr id="'.$row['id'].'">
                            <th scope="row">4.</th>
                            <td>Data Analytics</td>
                            <td>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        S T
                                    </div>
                                    <div class="col col-md-8">
                                        <div>12:30 - 14:30</div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        M W
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                    </div>
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#CourseAddition"><i title="edit"
                                        id="edituser" class="fa-lg fa-solid fa-pen fa-1x"></i></a><a data-toggle="modal"
                                    data-target="#CourseDeletion"><i class="fa-lg fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                        <tr id="'.$row['id'].'">
                            <th scope="row">5.</th>
                            <td>Website Design And Development</td>
                            <td>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        S T
                                    </div>
                                    <div class="col col-md-8">
                                        <div>12:30 - 14:30</div>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col col-md-4">
                                        M W
                                    </div>
                                    <div class="col col-md-8">
                                        <div>8:30 - 10:30</div>
                                        <div>10:30 - 12:30</div>
                                        <div>12:30 - 14:30</div>
                                    </div>
                                </div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#CourseAddition"><i title="edit"
                                        id="edituser" class="fa-lg fa-solid fa-pen fa-1x"></i></a><a data-toggle="modal"
                                    data-target="#CourseDeletion"><i class="fa-lg fa-solid fa-circle-minus"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" style="color:#00303d;" href="">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" style="color:#00303d;" href="">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <?php include('components/toast.html'); ?>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>