function validacao(){
  let nome = document.getElementById("i_nome");
  let email = document.getElementById("i_email");
  let tel = document.getElementById("i_tel");
  let cpf = document.getElementById("i_cpf");

  input_style(nome);
  input_style(email);
  input_style(tel);
  input_style(cpf);
}

function input_style(input){
  let sty_1 = "1px solid red";
  let sty_2 = "1px solid cornflowerblue";

  if(!input.checkedValidity()){
    return input.style.border = sty_1;
  }

  return input.style.border = sty_2;
}