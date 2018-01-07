$(document).ready(function () {
    $('#message').delay(3000).hide();
});

function editEvent(eventId) {
    $.ajax({
        dataType: 'json',
        url: '/editEventView/' + eventId,
        type: "POST",
        success: function (response) {
            template = response;
            console.log(response);
            $('#content').html(template.html);
        },
        error: function () {
            console.log('[events.js][editEvents] blad podczas ladowania widoku edycji wydarzenia');
        }
    });
}