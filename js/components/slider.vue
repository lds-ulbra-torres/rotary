<style>
	.swiper-container{
		width: 100vw;
		height: 100vh;
	}
	.swiper-wrapper{
		margin-top: 160px;
		height: 560px;
	}
	.slide{
		width: auto !important;
		border-radius: 5px;
		box-shadow: 14px 7px 31px -4px rgba(0,0,0,1);
	}
	.slide-image{
		height: 100%;
		width: auto;
	}
	.content{
		font-size: 10pt;
	}
	.title{
		width: 100%;
		text-align: center;
	}
	.description{
		padding:0 10px;
		overflow-y: scroll;
		position: static;
		bottom: 0;
		left: 0;
		right: 0;
		height: 90px;
		background: rgba(0,0,0,0.7);
		z-index: 170;	
	}
 	.item-name{
 		position: absolute;
 		left: 0;
 		right: 0;
 		bottom: 0;
 		padding: 0;
 		padding: 5px 15px;
 		font-family: rotaryFont;
 		font-size: 24px;
 		color: #000; 		
    	background:linear-gradient(#FFF, #CDCBCB); 
    	text-shadow: 2px 2px 6px rgba(0,0,0,0.4);

 	}
 	.item-button{
 		position: absolute;
 		right: -20px;
 		top: 20px;
 		width: 140px;
 		padding: 5px 15px;
 		font-family: rotaryFont;
 		font-size: 24px;
 		color: #FFF; 		
    	background: #1d4781;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		box-shadow: 14px 7px 31px -4px rgba(0,0,0,1);
 	}
 	.item-button:active{
 		background: #153E78;
 		right: -22px;
 		top:23px;
 		box-shadow: 14px 7px 15px -2px rgba(0,0,0,1);

 	}

</style>

<template>
	
		
	    <div class="swiper-container">
	    	<h1 class="animated help-message" v-if="showLabel" transition="fade" >Para mais detalhes, clique em "Saiba mais".</h1>
	    	<div class="swiper-wrapper">
	    		<div class="slide swiper-slide" v-for="item in itens">
					<img class="slide-image" :src="'admin/imgs/'+item.item_image_path">   
					<div class="item-button" @click="description(item)" v-if="item.item_description.trim()!=''">
						Saiba mais
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
					<div class="item-name">{{item.item_name}}</div>      
	    		</div>
	       	</div>
	       	<!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
   			<span class="back-button" @click="back"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</span>

   			<modal v-if="modalItem!=null" class="animated" v-show="showModal" :item="modalItem" transition="fade"></modal>
	    </div>
	


</template>

<script>	
	var descriptionModal = require("./drescription-modal.vue");

	module.exports = {
		components:{
			modal:descriptionModal
		},
		props:['itens','current'],
		data: function(){
			return{
				swiper:null,
				showLabel:false,
				modalItem:null,
				showModal:false
			}	
		},
		attached: function() {
			this.$nextTick(function() {
				self = this;
				this.swiper = new Swiper('.swiper-container', {
				        initialSlide: self.itens.indexOf(self.current),
				        slidesPerView: 'auto',
				        spaceBetween: 200,
				        touchEventsTarget:'wrapper',
				        centeredSlides:true,
				        nextButton: '.swiper-button-next',
				        prevButton: '.swiper-button-prev'
				    });
			});
			this.showLabel = true;
			
		},
		events:{
			closeModal:function() {
				this.showModal = false;
			}
		},
		methods:{
			back:function() {
				this.$dispatch("back-to-category");
			},
			description:function(item) {
				console.log(item);
				this.modalItem = item;
				this.showModal = true;
			}
		},
		watch:{
			"current":function(val) {
				this.$nextTick(function() {
					this.swiper.slideTo(this.itens.indexOf(val));
				})
			}
		}
	}
</script>