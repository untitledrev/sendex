sendex.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'sendex-panel-home',
            renderTo: 'sendex-panel-home-div'
        }]
    });
    sendex.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(sendex.page.Home, MODx.Component);
Ext.reg('sendex-page-home', sendex.page.Home);