<?php include('header.php');
include('components/Modals.php');?>
<title>Courses List</title>
</head>

<body>
    <?php include('layout/navigation.php'); ?>
    <div class="container">
        <section class="courses">
            <div class="container mt-4">
                <h2 id="" class="mt-4">Courses List</h2>
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-primary btn-block" href="StudentPreferences.php" role="button">Show My
                            Schedule
                            Preferences</a>
                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card-deck" id="courseCardsContainer">
                    <!--  dynamically generated cards here -->
                </div>
            </div>
        </section>
        <?php include('components/toast.html'); ?>
    </div>

    <?php include('footer.php'); ?>
    <script>
    var courseDataArray = [{
            name: 'Database Design & Development',
            selected: true
        },
        {
            name: 'Maths For Computing',
            selected: false
        },
        {
            name: 'Website Design And Development',
            selected: true
        },
        {
            name: 'Data Analytics',
            selected: true
        },
        {
            name: 'Software Development Lifecycles',
            selected: false
        },
        {
            name: 'Computer Systems Architecture',
            selected: true
        },
        {
            name: 'Networking',
            selected: true
        },
        {
            name: 'Fundamentals of Computing',
            selected: false
        },
        {
            name: 'Security',
            selected: false
        },
        {
            name: 'Fundamentals of Computing',
            selected: false
        },
        {
            name: 'Managing a Successful Computing Project',
            selected: false
        },
        {
            name: 'Advanced Programming',
            selected: false
        },
        {
            name: 'Business Intelligence',
            selected: false
        },
        {
            name: 'Network Security',
            selected: false
        },
        {
            name: 'Application Development',
            selected: false
        },
        {
            name: 'Systems Programming',
            selected: false
        },
        {
            name: 'Advanced Computer Architecture',
            selected: false
        },
        {
            name: 'Electronic Commerce',
            selected: false
        },
        {
            name: 'Compiler Design',
            selected: false
        },
        {
            name: 'Operating Systems',
            selected: false
        },
        {
            name: 'Database Programming',
            selected: false
        },
        {
            name: 'Advanced Software Engineering',
            selected: false
        }
    ];

    // Function to generate cards based on courseDataArray
    function generateCourseCards() {
        var container = document.getElementById('courseCardsContainer');
        container.innerHTML = '';

        courseDataArray.forEach(function(course) {
            var cardHtml = `
            <div class="col-md-4">
                <div class="card border-secondary mb-4">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <i class="bi ${course.selected ? 'bi-check-circle-fill' : 'bi-check-circle'}"></i>
                            ${course.selected ? '<a class="link-primary" role="button" data-toggle="modal" data-target="#CourseDeletion">Delete</a>' : ''}
                        </div>
                    </div>
                    <div class="card-body text-secondary">
                        <p class="card-text" style="font-size:18px;">${course.name}</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#CourseAddition"
                            data-selected="${course.selected}">
                            ${course.selected ? 'Edit preference' : 'Select Course'}
                        </button>

                    </div>
                </div>
            </div>`;

            container.innerHTML += cardHtml;
        });
    }

    // Call the function to generate course cards
    generateCourseCards();
    </script>
</body>

</html>