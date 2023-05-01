const senha = document.getElementById('senha');
const eye = document.getElementById('eye');
const body = document.getElementById('body');

eye.onclick = () => {
  if (senha.type === 'password') {
    senha.type = 'text'
  }
  else {
    senha.type = 'password'
  }
}