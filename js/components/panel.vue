<style>
	
</style>



<template>	
	<div class="full-screen">
		
	
		<h1 class="animated help-message" v-if="showLabel" transition="fade" >Para mais detalhes, clique em um dos cards abaixo.</h1>
		<div class="panel scrollable">
			
			<div class="row" v-for="row in rows">
				<div class="cell" v-for="item in row" >
					<card :item="item" >
					</card>
				</div>
			</div>
		</div>
		
		<div v-if="showLabel" @click="back" class="animated back-button" transition="fade"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</div>
	</div>
</template>



<script>
	

	var Card = require('./card.vue')
	module.exports = {

		components:{
			card:Card
		},
		props:{itens: Array},
		data:function() {
			return {
				rows : [],
				numRows: 3,
				showLabel: false
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
	    methods:{
	    	back:function(argument) {
	    		this.$dispatch("back-to-categories");
	    	}
	    }
	}

</script>