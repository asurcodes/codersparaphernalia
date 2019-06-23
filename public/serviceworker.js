importScripts('https://cdn.ampproject.org/sw/amp-sw.js');
AMP_SW.init({
    assetCachingOptions: [{
    regexp: /\.(png|jpg|woff2|woff|css|js)/,
    cachingStrategy: 'NETWORK_FIRST',
  }],
  offlinePageOptions: {
    url: '/offline',
    assets: [],
  },
  linkPrefetchOptions: {}
});
