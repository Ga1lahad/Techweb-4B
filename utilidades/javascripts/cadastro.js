//Determina todas as constantes dos componentes HTML
const form = document.getElementById('form');
const enviar = document.getElementById('enviar');
const nome = document.getElementById('nome');
const email = document.getElementById('email');
const telefone = document.getElementById('telefone');
const cep = document.getElementById('cep');
const cpf = document.getElementById('cpf');
const senha = document.getElementById('senha');
const repetir = document.getElementById('repetir');

//Funções que sao ativadas para cada campo necessario.
function nomeFill() {
    console.log(nome.value);
}
function emailFill() {
    console.log(email.value);
}
function telefoneFill() {
    console.log(telefone.value);
}
function cepFill() {
    console.log(cep.value);
}
function cpfFill() {
    console.log(cpf.value);
}
function senhaFill() {
    console.log(senha.value);
}