<style>
	.item.block{
		color:#1d4781;
		display: inline-flex;
		width:290px;
		background: #DDD;
		box-shadow: 14px 7px 31px -4px rgba(0,0,0,1);
		padding: 0;
		height: 150px;
	}
	.block:active {
		box-shadow: 14px 7px 31px -8px rgba(0,0,0,1);
		position: relative;
		right: -3px;
		bottom:-3px;
	}
	.item.more{
		padding: 5px;
		border: 0;
		background: #1d4781;
		color: #FFF;
		position: absolute;
		box-shadow: 14px 7px 31px -4px rgba(0,0,0,1);
		border-radius: 2px;
		right: -10px;
		bottom: 4px;
		font-size: 12pt;
		font-weight: bold;
	}
	.item.block{
		border-radius: 5px;
	}
	.item.info{
		position: relative;
		width: 130px;
		padding: 3%;
	}
	.item.avatar {
	    display: inline;
	    margin: 0 auto;
	    height: 150px;
	    width: 150px;
	    margin: auto;
	    border-radius: inherit;
	}

</style>

<template>
	<div class="item block" @click="call">
		<!-- <div class="avatar-wrapper">
		</div> -->
		<img class="item avatar" :src="'admin/imgs/'+item.item_image_path">
		
		<div class="item info">
			<h4>{{item.item_name | capitalizeAll}}</h4>
			<div class="item more" >Saiba mais <i class="fa fa-chevron-right" aria-hidden="true"></i></div>
		</div>
	</div>
</template>


<script>
	module.exports = {
		props : ["item"],
	    methods:{
			call: function(){
				this.$dispatch('selected-user',this.item);
			}
		},
		created: function(){
		}
	}
	
</script>