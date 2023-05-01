function plano(valor){
  var plan
  if(valor == 1){
    plan = 'Plano-Mensal'
    window.location = `cadastraradm.php?search=${plan}`
  }
  else if(valor == 2){
    plan = 'Plano-Trimestral'
    window.location = `cadastraradm.php?search=${plan}`
  }
  else{
    plan = 'Plano-Anual'
    window.location = `cadastraradm.php?search=${plan}`
  }
}