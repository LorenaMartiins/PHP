function mascara(o, f){
  v_obj = o;
  v_fun = f;
  setTimeout("execmascara()", 1);
}

function execmascara(){
  v_obj.value = v_fun(v_obj.value);
}

function telefone(v){
  v = v.replace(/\D/g, "");
  v = v.replace(/^(\d\d)(\d)/g, "($1) $2");
  v = v.replace(/(\d{5})(\d)/, "$1-$2");
  return v;
}

function cpf(v){
  v = v.replace(/\D/g, "");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d)/, "$1.$2");
  v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
  return v;
}