import { InertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'

import { library } from '@fortawesome/fontawesome-svg-core'
import {faPencilAlt, faTimes} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faTimes, faPencilAlt);

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.use(InertiaApp)

const app = document.getElementById('app')

new Vue({
  render: h => h(InertiaApp, {
    props: {
      initialPage: JSON.parse(app.dataset.page),
      resolveComponent: name => import(`@/Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(app)
