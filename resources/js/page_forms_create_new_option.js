$(document).ready(function () {
    const selectEl = $("select[createnew]");
    if (selectEl.length > 0) {
        const category = selectEl.attr('createnew');
        const addBtn = $('<a>');
        addBtn
            .attr('href', `/index.php/Form:${category}`)
            .attr('target', `_blank`)
            .addClass('button')
            .text('Neu');
        selectEl.after(addBtn);
    }
});