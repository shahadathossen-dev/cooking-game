/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueToastr2 from 'vue-toastr-2';
import 'vue-toastr-2/dist/vue-toastr-2.min.css';

window.toastr = require('toastr')
// use plugin

// Vue.use(VueToastr2)


import Vuetify from 'vuetify';
import { extend, ValidationObserver, ValidationProvider } from 'vee-validate';
import * as rules from 'vee-validate/dist/rules';
import 'vuetify/dist/vuetify.min.css';
window.Vuetify = Vuetify;
window.Vue = require('vue');

Vue.use(Vuetify); 
Vue.use(VueToastr2, {
  defaultTimeout: 3000,
  defaultProgressBar: true,
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('default-layout', require('./components/App.vue'));
  
Vue.component('validation-observer', ValidationObserver);
Vue.component('validation-provider', ValidationProvider);

// const isUnique = (email) => {
//   return axios.post('/api/validate/email', { email })
//     .then((response) => {
//       // Notice that we return an object containing both a valid property and a data property.
//       return {
//         valid: response.data.valid,
//         data: {
//           message: response.data.message
//         }
//       };
//     })
//     .catch(({response}) => {
//       return {
//         valid:  false,
//         data: {
//           message: response.status === 422 ? response.data.errors.email[0] : 'Sorry, something went wrong!'
//         },
//       };
//     });
// };

// The messages getter may also accept a third parameter that includes the data we returned earlier.
// extend('unique', {
//   validate: isUnique,
//   getMessage: (field, params, data) => {
//     return data.message;
//   }
// });

extend('unique', (email) => {
  return new Promise(resolve => { 
    axios.post('/validate/email', { email })
      // .then(({data}) => resolve( data ?? 'Email already taken'));
      .then(({data}) => resolve(data.valid))
      .catch(({response}) =>
        resolve({
          valid:  false,
          data: {
            message: response.status === 422 ? response.data.errors.email[0] : 'Sorry, something went wrong!'
          }
        })
      );
  });
});

Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule]);
});

// Form Components
Vue.component('text-input', require('./components/forms/TextInput.vue').default);
Vue.component('input-text', require('./components/forms/InputText.vue').default);
Vue.component('input-text-area', require('./components/forms/InputTextArea.vue').default);
Vue.component('input-email', require('./components/forms/InputEmail.vue').default);
Vue.component('input-checkbox', require('./components/forms/InputCheckbox.vue').default);
Vue.component('input-password', require('./components/forms/InputPassword.vue').default);
Vue.component('input-date-time', require('./components/forms/InputDateTime.vue').default);
Vue.component('contact-details', require('./components/ContactDetails.vue').default);

// Vue.component('input-text', require('./components/forms/InputText.vue').default);
// import { BText, BEmail, BCheckbox } from './components/forms/';
// Vue.component('b-text', BText);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


// const app = new Vue({
//     el: '#app',
//     vuetify: new Vuetify(),
//     // render: h => h(App),
// });
