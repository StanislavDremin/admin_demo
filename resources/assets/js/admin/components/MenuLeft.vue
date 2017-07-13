<template>
	<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		<div class="menu_section active">
			<h3>Контент</h3>
			<ul class="nav side-menu">
				<li class="active">
					<a @click.prevent="openSubMenu">
						<i class="fa fa-home"></i> Структура <span class="fa fa-chevron-down"></span>
					</a>
					<ul class="nav child_menu">
						<router-link tag="li" to="/admin/pages" active-class="current-page">
							<a>Страницы</a>
						</router-link>
					</ul>
				</li>
				<li>
					<a @click.prevent="openSubMenu" class="open_submenu"><i class="fa fa-edit"></i>
						Forms <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="form.html">General Form</a></li>
						<li><a href="form_advanced.html">Advanced Components</a></li>
						<li><a href="form_validation.html">Form Validation</a></li>
						<li><a href="form_wizards.html">Form Wizard</a></li>
						<li><a href="form_upload.html">Form Upload</a></li>
						<li><a href="form_buttons.html">Form Buttons</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="menu_section">
			<h3>Live On</h3>
			<ul class="nav side-menu">
				<li>
					<a @click.prevent="openSubMenu" class="open_submenu"><i class="fa fa-bug"></i>
						Additional Pages <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="e_commerce.html">E-commerce</a></li>
						<li><a href="projects.html">Projects</a></li>
						<li><a href="project_detail.html">Project Detail</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li><a href="profile.html">Profile</a></li>
					</ul>
				</li>
				<li>
					<a @click.prevent="openSubMenu" class="open_submenu"><i class="fa fa-windows"></i>
						Extras <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="page_403.html">403 Error</a></li>
						<li><a href="page_404.html">404 Error</a></li>
						<li><a href="page_500.html">500 Error</a></li>
						<li><a href="plain_page.html">Plain Page</a></li>
						<li><a href="login.html">Login Page</a></li>
						<li><a href="pricing_tables.html">Pricing Tables</a></li>
					</ul>
				</li>
				<li>
					<a @click.prevent="openSubMenu" class="open_submenu"><i class="fa fa-sitemap"></i>
						Multilevel Menu <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu">
						<li><a href="#level1_1">Level One</a>
						</li>
						<li><a>Level One<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li class="sub_menu"><a href="level2.html">Level Two</a>
								</li>
								<li><a href="#level2_1">Level Two</a>
								</li>
								<li><a href="#level2_2">Level Two</a>
								</li>
							</ul>
						</li>
						<li><a href="#level1_2">Level One</a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0)">
						<i class="fa fa-laptop"></i>
						Landing Page <span class="label label-success pull-right">Coming Soon</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</template>
<script>
	export default {
		mounted(){
		},

		methods: {
			openSubMenu(ev){
				const $item = $(ev.currentTarget).parent();
				const $subMenu = $item.find('> .child_menu');
				if ($subMenu.length > 0) {
					if ($item.hasClass('active')) {
						$subMenu.slideUp(200, function () {
							$item.removeClass('active');
						});
					} else {
						$subMenu.slideDown(200, function () {
							$item.addClass('active');
						});
					}
				}
			}
		}
	}
</script>
<style>
	.sidebar_left .nav {
		padding-left: 0;
		margin-bottom: 0;
		list-style: none;
		margin-top: 10px;
	}
	
	.nav.side-menu > li.active, .nav.side-menu > li.current-page {
		border-right: 5px solid #1ABB9C;
	}
	
	.nav.side-menu > li {
		position: relative;
		display: block;
		cursor: pointer;
	}
	
	.side-menu > li.active > a, .side-menu > li > a:hover {
		text-shadow: rgba(0, 0, 0, .25) 0 -1px 0;
		background: linear-gradient(#334556, #2C4257), #2A3F54;
		box-shadow: rgba(0, 0, 0, .25) 0 1px 0, inset rgba(255, 255, 255, .16) 0 1px 0;
	}
	
	.side-menu a span.fa {
		text-align: right;
		margin-right: 4px;
		float: right;
		margin-top: 5px;
		font-size: 10px;
		min-width: inherit;
		color: #C4CFDA;
		width: 26px;
		opacity: .99;
		display: inline-block;
		font-style: normal;
		font-weight: 400;
	}
	
	.child_menu {
		display: none
	}
	
	.nav.child_menu > li > a, .nav.side-menu > li > a {
		color: #E7E7E7;
		font-weight: 500;
	}
	
	.nav.side-menu > li > a {
		margin-bottom: 6px;
	}
	
	.nav > li > a {
		padding: 13px 15px 12px;
	}
	
	.nav > li > a {
		position: relative;
		display: block;
	}
	
	.child_menu li {
		padding-left: 36px;
	}
	
	.child_menu > li > a {
		color: #fff;
		font-size: 12px;
		padding: 9px;
		font-weight: 500;
		text-decoration: none !important;
	}
	
	.side-menu > li .child_menu li:before {
		background: #425668;
		bottom: auto;
		content: "";
		height: 8px;
		left: 23px;
		margin-top: 15px;
		position: absolute;
		right: auto;
		width: 8px;
		z-index: 1;
		border-radius: 50%;
	}
	
	.side-menu > li > .child_menu > li:after {
		border-left: 1px solid #425668;
		bottom: 0;
		content: "";
		left: 27px;
		position: absolute;
		top: 45px;
	}
	
	li.current-page, .child_menu li:hover {
		background: rgba(255, 255, 255, .05);
	}
	
	.menu_section {
		margin-bottom: 35px;
	}
	
	.menu_section h3 {
		padding-left: 15px;
		color: #fff;
		text-transform: uppercase;
		letter-spacing: .5px;
		font-weight: 700;
		font-size: 11px;
		margin-bottom: 0;
		margin-top: 0;
		text-shadow: 1px 1px #000;
	}
	
	.menu_section .active .child_menu {
		display: block;
	}
</style>