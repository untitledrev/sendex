Ext.onReady(function () {
    sendex.config.connector_url = OfficeConfig.actionUrl;

    var grid = new sendex.panel.Home();
    grid.render('office-sendex-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});