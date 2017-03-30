<style type="text/css">
	.category-wrapper{
		width: 100%;
		height: 100%;
	}
	#panel{
		z-index: 10;
		position: absolute;
	}
	#slider{
		z-index: 40;
		position: absolute;
	}
	button{

		position: absolute;
		bottom: 10px;
	}
	.back-button{
		font-family:rotaryFont; 
		color: white;
		text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
		font-size: 30px;
		z-index: 160;
		position: fixed;
    	left: 200px;
    	bottom: 10px;
    	margin:40px 0;
	}
	.back-button:active{
		color: #DDD;
    	left: 203px;
    	bottom: 8px;
	}
	.back-button.animated{
		
    	animation-duration: .5s;
    	animation-delay: 1s;
	}
	.category-title{
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		font-weight:bold;
		-webkit-margin-before: 0.3em; 
		-webkit-margin-after: 0.2em;
		background-image: -webkit-linear-gradient(#FFD05C 45%, #AA6000 75%);
		text-transform: uppercase;
		font-family: rotaryFont;
		text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    	position: fixed;
    	left: 0;
    	right: 0;
    	top:30px;
    	text-align: center;

	}
</style>


<template>
	<div class="category-wrapper">
		
		<h1 class="category-title" transition="expand">{{item.category_name}}</h1>
		
		<panel id="panel" 
			   v-if="showCards" 
			   class="animated" 
			   :itens="itens" 
			   transition="zoom">
		   
		</panel>
		
		<slider id="slider"  
				v-if="current!=null" 
				v-show="showSlider" 
				class="animated" 
				:itens="itens" 
				:current="current" 
				transition="fade">

			
		</slider>



		
	</div>
</template>


<script type="text/javascript">
	var Panel = require('./panel.vue') 
	var Slider = require('./slider.vue') 
	var Card = require("./card.vue")

	module.exports = {
		components:{
			panel:Panel,
			slider:Slider,
			card:Card
		},
		props:["item"],
		data: function() {
			return {
				itens : [],
				showCards: true,
				currentObject: null,
				current: null
			}
		},
		computed:{

			showSlider: {
				get: function(){
					return !this.showCards;
				},
				set:function(value) {
					this.showCards=!value;
				}
			}
		},
		events:{
			'selected-user':function(item) {
				this.current = item;
				this.showSlider = true;
			},
			'back-to-category':function() {
				this.showCards = true;
			}
			
		},
		created: function () {
			this.itens = this.item.itens;
		}
		
	}
</script>