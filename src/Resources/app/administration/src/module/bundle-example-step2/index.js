/*
// import deDE from './snippet/de-DE.json';
// import enGB from './snippet/en-GB.json';
//
// const {Module} = Shopware;
// Module.register('swag-bundle', {
//     type: 'plugin',
//     name: 'bundle',
//     title: 'swag-bundle.general.mainMenuItemGeneral',
//     description: 'swag-bundle.general.descriptionTextModule',
//     color: '#ff3d58',
//     icon: 'default-shopping-paper-bag-product',
//
//     snippets: {
//         'de-DE': deDE,
//         'en-GB': enGB
//     },
//     routes:
//         {
//             a:{component:'b'}
//         },
//
//     navigation: [{
//         label: 'swag-bundle.general.mainMenuItemGeneral',
//         color: '#ff3d58',
//         path: 'swag.bundle.index',
//         icon: 'default-shopping-paper-bag-product',
//         position: 100
//     }]
// // });


import enGB from './snippet/en-GB.json';
import deDE from './snippet/de-DE.json';

const { Module } = Shopware;
console.log('Index Plugin Loaded ✅');

Module.register('swag-bundle', {
    type: 'plugin',
    name: 'swag-bundle',
    title: 'swag-bundle.general.mainMenuItemGeneral',
    description: 'swag-bundle.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-shopping-paper-bag-product',


    snippets: {
        'en-GB': enGB,
        'de-DE': deDE
    },

    routes: {
        index: {
            component: 'swag-bundle-index',
            path: 'index',
            meta: {
                parentPath: 'sw.catalogue.index', // Or 'sw.settings.index' if you prefer
            }
        }
    },




    navigation: [{
        label: 'swag-bundle.general.mainMenuItemGeneral',
        path: 'swag.bundle.index',
        icon: 'default-shopping-paper-bag-product',
        position: 100,
    }]



});
*/
// src/module/swag-bundle/index.js

// custom/plugins/BundleExampleStep2/src/Resources/app/administration/src/module/swag-bundle/index.js
// src/Resources/app/administration/src/module/swag-bundle/index.js



// src/Resources/app/administration/src/module/swag-bundle/index.js
// index.js