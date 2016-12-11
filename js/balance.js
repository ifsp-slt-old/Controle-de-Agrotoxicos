/*------------
@_EduardoPedroso
@_PedroPaes
*/
const showEntry = () => { //Mostra relatorio de entrada
  let entry = document.getElementById('entry');
  if(entry.style.display === "none"){
    entry.style.display = '';
  } else {
    entry.style.display = 'none';
  }
  true;
}


let showDropoff = () => { //Mostra relatorio de saida 
  let dropoff = document.getElementById('dropoff');
  if(dropoff.style.display === "none"){
    dropoff.style.display = '';
  } else {
    dropoff.style.display = 'none';
  }
  true;

}
