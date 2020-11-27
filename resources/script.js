$(document).ready(function(){

    const pagesCount = $('<div></div>').css({"font-size": "0.75em"});
    const jobsCount = $('<div></div>').css({"font-size": "0.75em"});
    const infoEl = $('<div></div>')
        .css({"margin": "0 0.6em 0 1.2em"})
        .append(pagesCount)
        .append(jobsCount)
    ;

    setInterval(function () {
        mw.loader.using( 'mediawiki.api', function () {
            (new mw.Api()).get( {
                action: 'query',
                meta: 'siteinfo',
                siprop: 'statistics'
            }).done( function ( data ) {
                const stats = data.query.statistics;
                pagesCount.text('Seiten: ' + stats.pages);
                jobsCount.text('Jobs: ' + stats.jobs);

                $('#p-navigation').before(infoEl)
            });
        })
    }, 1000);
});