
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//
// Vue.component('example', require('./components/Example.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

Vue.component('custom-radio', {
  template: `
  <div class="custom-input-container">
    <div v-for="item in items"
      @click="update(item)"
      class="item"
      :class=" highlight: selectedItem === item }"
    {{ item }}
    </div>
  </div>
  `,
  props: {
    value: {
      required: true
    },
    items: {
      type: Array,
      required: true
    }
  },
  data() {
    return {
      selectedItem: ''
    };
  },
  methods: {
    update(value) {
      this.selectedItem = value;
      //emit an input event
      this.$emit('input', value);
    }
  }
});

new Vue({
  el: '#app',
  data() {
    return {
      numbers: [1,2,3],
      selectedNumber: ''
    }
  }
})

// $(document).ready(function(){
//   $('.radioholder').each(function(){
//     $this
//   })
// }
