$('#pageId').click(function(e) {
    console.log(e);
    console.log($(e.currentTarget).text());
    navigator.clipboard.writeText($(e.currentTarget).text());
});
$(document).on("keydown", "form#pfForm :input:not(textarea)", function(event) {
    return event.key != "Enter";
});
window.onbeforeunload = null;
