/**
 * Created by dremin_s on 13.07.2017.
 */
/** @var o React */
/** @var o ReactDOM */
/** @var o is */
/** @var o $ */
"use strict";
import Preloader from 'Preloader.vue';
import Alerts from 'vue2-simplert';

let Ajax;
if(window.axios === undefined){
	Ajax = require('axios');
} else {
	Ajax = window.axios;
}
export default {
	install(Vue, options){

		let ajaxOption = Ajax.defaults;

		ajaxOption.validateStatus = function (status) {
			if(status >= 400) {
				
			}

			return status;
		};

		if(options.hasOwnProperty('rest')){
			ajaxOption = Object.assign({}, options.rest);
		}

		if(!ajaxOption.transformResponse instanceof Array || ajaxOption.transformResponse === undefined)
			ajaxOption.transformResponse = [];

		Vue.prototype.$rest = Ajax.create(ajaxOption);

		Vue.mixin({
			data(){
				return{
					showLoader: false
				}
			},
			methods: {
				startLoad(){
					this.showLoader = true;
				},
				stopLoad(){
					this.showLoader = false;
				}
			},
			components: {
				Preloader,
				Alerts
			}
		})
	}
}