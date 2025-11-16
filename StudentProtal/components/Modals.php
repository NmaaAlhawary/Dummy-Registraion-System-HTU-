<div class="modal fade" id="CourseAddition" tabindex="-1" role="dialog" aria-labelledby="preferenceEdit"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Course Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row my-1 ">
                    <div class="col-4"><button type="button" class="btn btn-primary popover-test" data-toggle="modal"
                            data-target="#dayAdd">Add a day</button></div>
                </div>
                <hr>
                <h5>The course chosen days</h5>
                <table id="CourseSchedule" class="table table-sm table-striped">
                    <thead class="text-nowrap">
                        <tr>
                            <th scope="col">
                                Day
                            </th>
                            <th scope="col">
                                Time
                            </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="'.$row['id'].'">
                            <td>
                                Satarday Tuesday
                            </td>
                            <td>
                                <div>8:30 - 10:30</div>
                                <div>10:30 - 12:30</div>
                                <div>12:30 - 14:30</div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#dayAdd"><i title="edit" id="edituser"
                                        class="fa-lg fa-solid fa-pen fa-1x"></i></a><i
                                    class="fa-lg fa-solid fa-circle-minus"></i></td>
                        </tr>
                        <tr id="'.$row['id'].'">
                            <td>
                                Sunday Wednesday
                            </td>
                            <td>
                                <div>10:30 - 12:30</div>
                            </td>
                            <td><a href="" data-toggle="modal" data-target="#dayAdd"><i title="edit" id="edituser"
                                        class="fa-lg fa-solid fa-pen fa-1x"></i></a><i
                                    class="fa-lg fa-solid fa-circle-minus"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button id="AddCourseSaveChanges" type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="CourseAdditionToast()">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dayAdd" tabindex="-1" role="dialog" aria-labelledby="dayAddLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dayAddLabel">Add a day</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Day</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="1">Satarday - Tuesday</option>
                            <option value="2">Sunday - Wednesday</option>
                            <option value="3">Monday - Thursday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Time Rages:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Morning">
                            <label class="form-check-label" for="Morning">
                                Morning (08:30 - 12:30)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Noon">
                            <label class="form-check-label" for="Noon">
                                Noon (12:30 - 16:30)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="Evening">
                            <label class="form-check-label" for="Evening">
                                Evening (16:30 - 20:30)
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="showHiddenTable()">Add
                    day</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="CourseDeletion" tabindex="-1" role="dialog" aria-labelledby="CourseDeletionLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CourseDeletionLabel">Course deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this course?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal"
                    onclick="CourseDeletionToast()">Confirm delete</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var editPreferenceButtons = document.querySelectorAll('.btn-primary[data-target="#CourseAddition"]');
    editPreferenceButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var selectedFlag = JSON.parse(this.getAttribute('data-selected'));
            updateModalContent(selectedFlag);
        });
    });

    function updateModalContent(selectedFlag) {
        var daysTable = document.getElementById('CourseSchedule');
        var addDayButton = document.querySelector('#dayAdd button');

        if (selectedFlag) {
            daysTable.style.display = 'block';
            addDayButton.style.display = 'block';
        } else {
            daysTable.style.display = 'none';
            addDayButton.style.display = 'none';
        }

    }
});

function showHiddenTable() {
    var daysTable = document.getElementById('CourseSchedule');
    daysTable.style.display = 'block';
}
</script>