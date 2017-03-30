module.exports = function () {
   	meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
	semana = ["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"];
	
	hoje = new Date();
	dia = hoje.getDate();
	dias = hoje.getDay();
	mes = hoje.getMonth();
	ano = hoje.getYear();
	
	if (navigator.appName == "Netscape") ano = ano + 1900;
	diaext = semana[dias] + ", " + dia + " de " + meses[mes] + " de " + ano;
	return diaext;
	
   
}