<style type="text/css">
	#category-panel{
		z-index: 50;
		position: absolute;
	}
	#category{
		z-index: 70;
		position: absolute;
	}
	#btn2{
		position: fixed;
		right: 6px;
		z-index: 170;
	}
	#btn3{
		position: fixed;
		right: 0px;
		bottom: 0px;
		z-index: 170;
	}
	#logo-bottom{
    	position: fixed;
    	right: 200px;
    	bottom: -10px;
    	margin:40px 0;
    	height: 70px;
    	animation-duration: .1s;
    	animation-delay: 1s;

	}
	.fade-in-leave{
		animation-duration: .1s;
    	animation-delay: 0s;		
	}
</style>


<template>
	<div class="full-screen" v-if="ready">
		<categorypanel id="category-panel" class="animated" v-if="showPanel" :itens="itens" transition="zoom"></categorypanel>
		<category id="category" class="animated" v-if="!showPanel" :item="currCategory" transition="zoom" ></category>

		<img id="logo-bottom" v-if="!showPanel" transition="expand" src="resources/images/logo_horizontal.png" alt="">
	</div>
</template>


<script type="text/javascript">
	var Category = require('./category.vue') 
	var CategoryPanel = require("./categoryPanel.vue")

	module.exports = {
		components:{
			category : Category,
			categorypanel : CategoryPanel
		},
		data: function() {
			return {
				itens : [],
				ready : false,
				showPanel: true,
				currCategory: null,
				isrendered:true,
				current: null
			}
		},
		computed:{

		},
		methods : {
			back:function() {
				this.showPanel=true;
			}
		},
		events:{
			"selected-category":function (item) {
				this.currCategory = item;
				this.showPanel = false;
			},
			"back-to-categories":function() {
				this.showPanel = true;
			}
		},
		created : function(){
	       this.$http.get("admin/index.php/getDataRotary")
	        .then(function(resp){     
	        	this.itens = resp.data;
	        	this.ready = true;
	        });

		}
	}
</script>