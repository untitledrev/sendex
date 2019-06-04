var sendex = function (config) {
    config = config || {};
    sendex.superclass.constructor.call(this, config);
};
Ext.extend(sendex, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('sendex', sendex);

sendex = new sendex();