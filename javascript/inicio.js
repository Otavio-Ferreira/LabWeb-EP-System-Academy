let count = 1
document.getElementById('radio1').select = true
setInterval(function () {
  nextImage();
}, 5000)

function nextImage() {
  count++
  if (count > 3) {
    count = 1
  }
  document.getElementById('radio' + count).checked = true
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
  window.location = `index.php?search=${search.value}`
}