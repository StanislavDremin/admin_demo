/**
 * Created by dremin_s on 12.07.2017.
 */
/** @var o React */
/** @var o ReactDOM */
/** @var o is */
/** @var o $ */
"use strict";
require('../bootstrap');

import MenuLeft from './components/MenuLeft.vue';
import IndexPage from './components/index.vue';
import PageList from './components/pageList.vue';
import Rest from 'Rest';

Vue.use(Rest, {
	rest: {
		baseURL: '/admin/rest',
	}
});

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/admin/',
			name: 'index',
			component: IndexPage
		},
		{
			path: '/admin/pages/:code?',
			components:{
				pages: PageList
			}
		}
	]
});

const AdminWrap = new Vue({
	router,
	components: {
		MenuLeft,
		PageList
	}
});

$(function () {
	AdminWrap.$mount('#wrap');
});