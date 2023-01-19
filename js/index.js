// TDList
// document ready
$(document).ready(function () {
    // #tasks on click load data for task using ajax
    const task = $('#tasks');
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
});