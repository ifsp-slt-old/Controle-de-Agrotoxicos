/*------------
@_EduardoPedroso
*/

//Seleciona os inputs da tela
var dataNfEntrada = document.querySelector('input[name="dataNfEntrada"]');
var dataEntrada = document.querySelector('input[name="dataEntrada"]');
var dataFabEntrada = document.querySelector('input[name="dataFabEntrada"]');
var dataValEntrada = document.querySelector('input[name="dataValEntrada"]');


//Coloca mascara nos inputs selecionados
VMasker(dataNfEntrada).maskPattern("99-99-9999");
VMasker(dataEntrada).maskPattern("99-99-9999");
VMasker(dataFabEntrada).maskPattern("99-99-9999");
VMasker(dataValEntrada).maskPattern("99-99-9999");