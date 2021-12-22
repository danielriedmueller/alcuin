$('#pageId').click(function(e) {
    var text = $(e.currentTarget).text();
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text);
    } else {
        if (window.clipboardData) { // Internet Explorer
            window.clipboardData.setData("Text", text);
        } else {
            unsafeWindow.netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
            const clipboardHelper = Components.classes["@mozilla.org/widget/clipboardhelper;1"].getService(Components.interfaces.nsIClipboardHelper);
            clipboardHelper.copyString(text);
        }
    }
});
$(document).on("keydown", "form#pfForm :input:not(textarea)", function(event) {
    return event.key != "Enter";
});
window.onbeforeunload = null;
