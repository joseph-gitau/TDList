// TDList
// document ready
$(document).ready(function () {
    // .main-profile on click load show profile
    const profile = $('.main-profile');
    const subprofile = $('.sub-profile');
    profile.on('click', function (e) {
        subprofile.toggle();
    });
    // onclick of outside the profile div hide the profile div
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.main-profile').length) {
            subprofile.fadeOut();
        }
    });


    // #tasks on click load data for task using ajax
    const task = $('#tasks_old');
    const content = $('#main-content');
    task.on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: 'http://localhost/projectexe/TDList/reg_exe.php?tasks=tasks',
            method: 'GET',
            success: function (data) {
                // clear the content div
                content.empty();
                // append the data to the content div
                content.append(data);
            },
            error: function (err) {
                console.log(err);
            }
        });
    });
    // show sub-tasks on click
    const mtask = $(".tasks");
    mtask.on('click', function (e) {
        $('.sub-task').toggle();
        // remove class chevron-right and add chevron-down
        $(this).find('i').toggleClass('fa-chevron-right fa-chevron-down');
    });
    // #add-task on click load data for task using ajax
    const addTaskCategory = $('.add-task-category');
    addTaskCategory.on('click', function (e) {
        // show the add task category form
        $('.add-task-category-form').show();
        // add active class to the add task category button
        $(this).addClass('active');
    });
});
