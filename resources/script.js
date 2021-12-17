window.onbeforeunload = null;
$(document).on("keydown", "form#pfForm :input:not(textarea)", function(event) {
    return event.key != "Enter";
});
