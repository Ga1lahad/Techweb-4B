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
const fazedor = new Object;

form.addEventListener("submit", (coletor) => {
    fazedor.nome = nome.value;
    fazedor.email = email.value;
    fazedor.telefone = telefone.value;
    fazedor.cep = cep.value;
    fazedor.cpf = cpf.value;
    fazedor.senha = senha.value;
    console.log("Coleta rodou");
    console.log(fazedor);
    coletor.preventDefault;
});



//Funções que sao ativadas para cada campo necessario.
function nomeFill() {
}
function emailFill() {
}
function telefoneFill() {
}
function cepFill() {
}
function cpfFill() {
}
function senhaFill() {
}