// import template from './sw-bundle-index.vue';
// declare const Shopware: any;
//
// Shopware.Component.register('sw-bundle-index', {
//     template,
//
//     metaInfo() {
//         return {
//             title: this.$tc('sw-bundle.general.mainMenuItemGeneral')
//         };
//     },
//
//     data() {
//         return {};
//     },
//
//     created() {
//         console.log('sw-bundle-index component created');
//     }
// });
import component from './sw-bundle-index.vue';
declare const Shopware: any;
Shopware.Component.register('sw-bundle-index', component);
