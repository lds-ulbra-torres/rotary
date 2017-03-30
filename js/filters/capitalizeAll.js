module.exports = function (value) {
   
   return value
   			.split(" ")
   			.map(function(e){
   				e = e.substring(0,1).toUpperCase()+e.substring(1);
   				return e;
   			})
   			.join(" ");
}