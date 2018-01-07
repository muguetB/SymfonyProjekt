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

function askBeforeDelete(eventName, eventId) {
    var ask = confirm("Czy na pewno chcesz usunąć wydarzenie " + eventName + "?");
    if (ask) {
        window.location.href = '/deleteEvent/' + eventId;
    }
}

function gotoMainPage() {
    window.location.href = '/main';
}