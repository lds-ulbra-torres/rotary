<style>
	
	.panel{
		margin: 100px 0;
		padding-top: 70px;
		padding-left: 50px;
	}
	#logo-panel{
		width: auto;
		height: 150px;
		vertical-align: middle;
	}
	.help-message{
		font-family: rotaryFont;
		color:#FFF;
    	text-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    	position: fixed;
    	right: 200px;
    	top:80px;
    	animation-duration: .5s;
    	animation-delay: 1s;
    	font-size: 25px;

	}
	#date{

		font-family: rotaryFont;
		color:#FFF;
    	text-shadow: 4px 4px 6px rgba(0,0,0,0.4);
    	position: fixed;
    	right: 200px;
    	bottom: 30px;
    	margin:40px 0;
    	animation-duration: .5s;
    	animation-delay: 1s;

	}
</style>



<template>	

	<div class="full-screen">
		
	
		<h1 class="animated help-message" v-if="showLabel" transition="fade" >Para navegar selecione uma das categorias abaixo</h1>
		<div class="category panel scrollable">
			<div class="row" v-for="(index, row) in rows">
				<div class="cell" v-if="index==0">
					<img id="logo-panel"  src="resources/images/logo.png" alt="">
				</div>
				<div class="cell" v-if="index>0"></div>
				<div class="cell" v-for="item in row" >
					<categorycard :item="item" >
					</categorycard>
				</div>
			</div>
		</div>
		<h2 id="date" class="animated" v-if="showLabel" transition="fade" >{{dateString}}</h2>
	</div>
</template>



<script>
	var CategoryCard = require('./categoryCard.vue')
	var date = require('../helpers/dateStringPT.js')
	module.exports = {

		components:{
			"categorycard":CategoryCard
		},
		props:{itens: Array},
		data:function() {
			return {
				rows : [],
				numRows: 3,
				showLabel: false,
				dateString: date()
			}	
		} ,
		created: function(){
	        
        	var array = [];
        	var rows = this.numRows;
        	for (var i = 0; i < rows; i++) {
        		array[i] = [];
        	}
            this.itens.forEach(function(element, index, srcArray) {
            	currentRow = index%rows;
            	array[currentRow].push(element); 
            })
            this.rows = array;
	    },
	    attached:function () {
	    	this.showLabel = true;
	    },
	    detached:function () {
	    	this.showLabel = true;
	    }
	}

</script>