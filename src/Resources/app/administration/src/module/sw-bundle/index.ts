/*
// No extra services or stores registered yet — minimal

// Register components if you want, here we skip for now
// Shopware.Component.register('sw-bundle-list', () => import('./page/sw-bundle-list'));

// Register module:

declare const Shopware: any;
import enGB from './snippet/en-GB.json';
Shopware.Locale.extend('en-GB', enGB);

Shopware.Module.register('sw-bundle', {
    type: 'plugin',
    name: 'sw-bundle',
    title: 'sw-bundle.general.mainMenuItemGeneral',
    description: 'Module for managing product bundles',
    color: '#ff3d58',
    icon: 'regular-box',  // Pick any icon you like
    favicon: 'icon-module-content.png', // optional

    // No entity yet; you can add if you have one
    entity: null,

    routes: {
        // Minimal route - optional, can be empty if you want no routing yet
        index: {
            component: 'sw-bundle-list',  // You can omit this if no component yet
            path: 'index',
            meta: {
                privilege: null, // or some privilege if you want
            },
        },
    },

    navigation: [
        {
            id: 'sw-content', // optional, add parent if you want nested menu
            label: 'global.sw-admin-menu.navigation.mainMenuItemContent',
            color: '#ff3d58',
            icon: 'regular-box',
            position: 50,
        },
        {
            id: 'sw-bundle',
            label: 'sw-bundle.general.mainMenuItemGeneral',
            color: '#ff3d58',
            path: 'sw.bundle.index',
            icon: 'regular-box',
            position: 10,
            parent: 'sw-content',
            privilege: null,
        },
    ],
});
*/

declare const Shopware: any;
import './page/sw-bundle-index';
import enGB from './snippet/en-GB.json';

Shopware.Module.register('sw-bundle', {
    type: 'core',
    name: 'sw-bundle',
    title: 'sw-bundle.general.mainMenuItemGeneral',
    description: 'sw-bundle.general.descriptionTextModule',
    color: '#ff3d58',
    icon: 'default-object-bundle',
    routePrefixPath: 'sw.bundle',
    routes: {
        index: {
            component: 'sw-bundle-index',
            path: 'index'
        }
    },
    navigation: [{
        id: 'sw-bundle',
        label: 'sw-bundle.general.mainMenuItemGeneral',
        color: '#ff3d58',
        icon: 'default-object-bundle',
        path: 'sw.bundle.index',
        parent: 'sw-content',
        position: 100
    }]
});

Shopware.Locale.extend('en-GB', enGB);
