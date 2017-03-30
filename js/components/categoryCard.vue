<style>
	.category.block{
		display: inline-flex;
		color:#1d4781;
		box-shadow: 14px 7px 31px -4px rgba(0,0,0,1);
		padding: 0;
		height: 150px;
	}
	.category.card-wrapper{
		position: relative;
		padding-left:50px; 
		width: 413px;
		
	}

	.category.card-wrapper:active{
		position: relative;
		right: -3px;
		bottom:-3px;
	}
	.category.block{
		width: 390px;
		border-radius: 6px;
		position: relative;
	}
	.category-image-wrapper {
	    width: 100px;
	    height: 100px;
	    position: absolute;
	    left: 0px;
	    bottom: 25px;
	    overflow: hidden;
	    border-radius: 50%;
	    z-index: 50;
	    background:linear-gradient(#CDCBCB,#FFF);
	}
	.category-img {
	    display: inline;
	    margin: 0 auto;
	    height: auto;
	    width: 100%;
	    margin: auto;
	}
	.category.info{
		width: 260px !important;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left:20%;
    	background:linear-gradient(#FFF, #CDCBCB);
    	font-family: rotaryFont;
    	text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    	border-top-left-radius: 5px;
    	border-bottom-left-radius: 5px;
	}
	.category-more{
		background: #1d4781;
		color: white; 	
		padding: 50px 10px;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
	}
	.marca_cat{
		height: 100%;
		opacity: 0.06;
		position: absolute;
		left: 0;
	}

</style>

<template>
	<div class="category card-wrapper">
		<div class="category-image-wrapper">
			<img class="category-img" :src="'admin/imgs/'+item.category_icon_path">
		</div>
		<div class="category block" @click="call">
			<img src="resources/images/marca_cat.png" class="marca_cat">

			<div class="category info">
				<h2>{{item.category_name}}</h2>
			</div>
			<div class="category-more" >
				<i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</template>


<script>
	module.exports = {
		props : ["item"],
	    methods:{
			call: function(){
				this.$dispatch('selected-category',this.item);
			}
		}
	}
	
</script>