$(document).ready(function () {
    var selectEl = $("select[createnew]");
    selectEl.each(function(index, el) {
        var category = $(el).attr('createnew');
        var addBtn = $('<a>');
        addBtn
            .attr('href', `/index.php/Form:${category}`)
            .attr('target', `_blank`)
            .addClass('button')
            .text('Neu');
        $(el).after(addBtn);
    })
});