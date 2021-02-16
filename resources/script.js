$(document).ready(function () {
    const pagesCount = $('<div></div>').css({"font-size": "0.75em"});
    const jobsCount = $('<div></div>').css({"font-size": "0.75em"});
    const infoEl = $('<div></div>')
        .css({"margin": "0 0.6em 0 1.2em"})
        .append(pagesCount)
        .append(jobsCount)
    ;

    setInterval(function () {
        mw.loader.using('mediawiki.api', function () {
            (new mw.Api()).get({
                action: 'query',
                meta: 'siteinfo',
                siprop: 'statistics'
            }).done(function (data) {
                const stats = data.query.statistics;
                pagesCount.text('Seiten: ' + stats.pages);
                jobsCount.text('Jobs: ' + stats.jobs);

                $('#p-navigation').before(infoEl)
            });
        })
    }, 1000);

    /*
    var params = {
            action: "compare",
            format: "json",
            fromtitle: "263",
            totitle: "1926"
        },
        api = new mw.Api();

    api.get(params).done(function (data) {
        console.log(data);
        const compareRes = data.compare;
        const foo = $('<div>');
        foo.html(compareRes['*']);
        //$('#firstHeading').before(foo);

        const text = compareRes['*'];

        params = {
            action: 'parse',
            text: text,
            format: 'json'
        };
        api = new mw.Api();

        api.get(params).done(data => {
            const foo = $('<div>');
            foo.html(data.parse.text['*']);
            //$('#firstHeading').before(foo);
        });
    });
    */
});