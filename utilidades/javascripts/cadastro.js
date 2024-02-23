const form = document.getElementById("form");
const enviar = document.getElementById("enviar");
const nome = document.getElementById("nome");
const email = document.getElementById("email");
const telefone = document.getElementById("telefone");
const cep = document.getElementById("cep");
const cpf = document.getElementById("cpf");

form.addEventListener(onsubmit, preencher());

function preencher() {
    console.log(nome.getAttribute.value);
}