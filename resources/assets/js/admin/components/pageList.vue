<template>
	<div>
		<h1>{{title}}</h1>
		<preloader :show="showLoader"></preloader>
	</div>
</template>
<script>
	export default {
		data(){
			return {
				title: 'Страницы',
			}
		},
		created(){
			console.info(this.$rest.defaults);
			this.$rest.get('/sections/heads').then(res => {
				console.info(res.data);
			});
		}
	}
</script>