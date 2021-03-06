//Obtener datos del DOM
const alertDanger = document.querySelector('#alert-danger');
const table = document.querySelector('#table');
const loader = document.querySelector('#loader');
const search = document.querySelector('#search');

//Para pintar el JS
let datStart, dateEnd, amount, anualAmount;

function loadData(){
  table.innerHTML =
    `<tr>
      <th>Fecha actual</th>
      <th>Fecha final</th>
      <th>Monto total</th>
      <th>Monto anual</th>
    </tr>`;

  loader.classList.add('active');
}

function formValidate(){
  if(datStart == ""){
    return false;
  } else if(dateEnd == ""){
    return false;
  }
  return true;
}


search.addEventListener('click', function (event){
  console.log("He sido puchado");
});
