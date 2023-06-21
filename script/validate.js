/*function validate(item){
    item.setCustomValidity('');
    item.checkValidity();

    if  (item == senha2){
        if(item.value == senha.value)item.setCustomValidity('');
            else item.setCustomValidity('As senhas digitadas não são iguais!');
    }
}*/


const form = document.getElementById("form");
const submit = document.getElementById("submit");
const nomeUser = document.getElementById("nomeUser");
const dataNasc = document.getElementById("dataNasc");
const pesoIni = document.getElementById("pesoIni");
const altura = document.getElementById("altura");
const homem = document.getElementById("homem");
const mulher = document.getElementById("mulher");
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const senha2 = document.getElementById("senha2");

submit.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();
});

function checkInputs() {
    const senhaValue = senha.value;
    const senha2Value = senha2.value;


  if (senhaValue === "") {
    setErrorFor(senha,"A senha é obrigatória.");
  } else if (senhaValue.length < 7) {
    setErrorFor(senha,"A senha precisa ter no mínimo 7 caracteres.");
  } else {
    setSuccessFor(senha);
  }

  if(senha2Value === '') {
		setErrorFor(senha2, 'A senha de confirmação é obrigatória.');
	} else if(senhaValue !== senha2Value) {
		setErrorFor(senha2, 'As senhas não se coincidem.');
	} else{
		setSuccessFor(senha2);
	}

  const topLogin = form.querySelectorAll(".top-login");

  const formIsValid = [...topLogin].every((topLogin) => {
    return topLogin.className === "topLogin success";
  });

  if (formIsValid) {
    console.log("O formulário está 100% válido!");
  }
}

function setErrorFor(input, message) {
  const topLogin = input.parentElement;
  const small = topLogin.querySelector("small");
  // Adiciona a classe de erro
  topLogin.className = "top-login error";
  // Adiciona a mensagem de erro
  small.innerText = message;
}

function setSuccessFor(input) {
  const topLogin = input.parentElement;

  // Adicionar a classe de sucesso
  topLogin.className = "top-login success";
}


