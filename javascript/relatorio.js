function chamarData(){
  var data = new Date()
  var ano = data.getUTCFullYear();
  var mes = data.getMonth()+1;
  var dia = data.getUTCDate();
  document.getElementById('mes').value = `${dia}/${mes}/${ano}`;

}

var search = document.getElementById('pesquisar')

//Adicionando um evento para o elemento aramazenado em 'search', para quando a tecla 'Enter' for pressionada executar a função searchdata()
search.addEventListener("keydown", (event) => {
  if (event.key === "Enter") {
    searchData()
  }
})

//Função que passa para a url o que foi digitado no campo de pesquisa
function searchData() {
  window.location = `relatorio.php?search=${search.value}`
}

function searchData1() {
  window.location = `relatorio.php`
}

function searchData2() {
  window.location = `relatorio.php?search=Pago`
}

function searchData3() {
  window.location = `relatorio.php?search=Pendente`
}