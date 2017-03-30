var Vue = require('vue')
var App = require('./components/app.vue');
var resource = require('vue-resource');
var capitalizeAll = require('./filters/capitalizeAll.js');
require('./../resources/swiper.min.js');

Vue.use(resource);
Vue.transition('zoom', {
	            enterClass: 'zoomIn',
			    leaveClass: 'zoomOut'
			});
Vue.transition('fade', {
	            enterClass: 'fadeIn',
			    leaveClass: 'fadeOut'
			});
Vue.transition('slideRight', {
	            enterClass: 'slideInRight',
			    leaveClass: 'slideOutRight'
			});
Vue.transition('fade-in', {
	            enterClass: 'fadeIn',
	            leaveClass: 'fadeOut'
			});

var vm = new Vue({
  el: 'body',
  components: {
    app: App
  }
});

Vue.filter('capitalizeAll', capitalizeAll);
