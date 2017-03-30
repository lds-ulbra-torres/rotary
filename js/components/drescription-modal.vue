<style>
	.description-modal{
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		z-index: 200;
		background: rgba(0,0,0,0.8);
		color: white;
		font-family: rotaryFont;
		padding: 200px;


	}
	.description-modal>*{
		text-align: center;
	}
	#btn-close{
		position: absolute;
		right: 40px;
		top:40px;
	}
	#btn-close:active{
		color:red;
	}
</style>

<template>
	<div class="description-modal">
		<i id="btn-close" @click="close" class="fa fa-times fa-4x" aria-hidden="true"></i>
		<h1>{{item.item_name}}</h1>
		<p>{{item.item_description}}</p>
			
	</div>
</template>

<script>
	module.exports = {
		props:["item"],
		methods:{
			close:function() {
				this.$dispatch("closeModal");
			}
		}
	}
</script>