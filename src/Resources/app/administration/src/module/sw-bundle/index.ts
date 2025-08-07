//
// declare const Shopware: any;
// import './page/sw-bundle-index';
// import enGB from './snippet/en-GB.json';
//
// Shopware.Module.register('sw-bundle', {
//     type: 'core',
//     name: 'sw-bundle',
//     title: 'sw-bundle.general.mainMenuItemGeneral',
//     description: 'sw-bundle.general.descriptionTextModule',
//     color: '#ff3d58',
//     icon: 'default-object-bundle',
//     routePrefixPath: 'sw.bundle',
//     routes: {
//         index: {
//             component: 'sw-bundle-index',
//             path: 'index'
//         }
//     },
//     navigation: [{
//         id: 'sw-bundle',
//         label: 'sw-bundle.general.mainMenuItemGeneral',
//         color: '#ff3d58',
//         icon: 'default-object-bundle',
//         path: 'sw.bundle.index',
//         parent: 'sw-content',
//         position: 100
//     }]
// });
//
// Shopware.Locale.extend('en-GB', enGB);
declare const Shopware: any;
import './page/sw-bundle-index';
import enGB from './snippet/en-GB.json';

Shopware.Locale.extend('en-GB', enGB);

Shopware.Module.register('sw-bundle', {
    type: 'core',
    name: 'sw-bundle',
    title: 'sw-bundle.general.mainMenuItemGeneral',
    description: 'sw-bundle.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-object-bundle', // You can use any icon here
    routePrefixPath: 'sw.bundle',
    routes: {
        index: {
            component: 'sw-bundle-index',
            path: 'index'
        }
    },
    navigation: [
        {
            id: 'sw-bundle',
            label: 'sw-bundle.general.mainMenuItemGeneral',
            color: '#ff3d58',
            icon: 'regular-shopping-bag',
            path: 'sw.bundle.index',
            // ⛔ Removed parent!
            position: 80,
            privilege: null
        }
    ]
});
