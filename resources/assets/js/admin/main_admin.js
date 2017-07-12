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

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/admin/',
			name: 'index',
			component: IndexPage
		}
	]
});

const AdminWrap = new Vue({
	router,
	components: {
		MenuLeft
	}
});

$(function () {
	AdminWrap.$mount('#wrap');
});