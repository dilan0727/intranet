const inputUsuario = document.formaRegistro.usuario;
const inputPassword = document.formaRegistro.password;

function validarFormulario(e) {
  validarUsuario(e);
  validarPassword(e);
  inputUsuario.addEventListener('input',validarUsuario(e));
  inputPassword.addEventListener('input',validarPassword(e));
}



// Validar Usuario
function validarUsuario(e) {
  let errorUsuario = document.querySelector(".forma__error--usuario");
  let msgUsuario;
  
  if (inputUsuario.value.trim() == "") {
    msgUsuario = "Por favor llenar este campo";
    e.preventDefault();
  } else if (inputUsuario.value.length < 8) {
    msgUsuario = "Requiere minimo 8 caracteres";  
    e.preventDefault();
  }  
  errorUsuario.textContent = msgUsuario;
}

// Validar Password
function validarPassword(e) {
  let errorPassword = document.querySelector(".forma__error--password");
  
  let msgPassword;
  
  if (inputPassword.value.trim() == "") {
    msgPassword = "Por favor llenar este campo";
    e.preventDefault();
  } else if (inputPassword.value.length < 8) {
    msgPassword = "Requiere minimo 8 caracteres";  
    e.preventDefault();
  }
  errorPassword.textContent = msgPassword;
}



// Mostrar y Ocultar Password
ver = true;
function mostrarPwd() {
  let inputPassword = document.querySelector(".input__password");
  let ojoAbierto = document.querySelector(".fa-eye");
  let ojoCerrado = document.querySelector(".fa-eye-slash");

  if (ver) {
    inputPassword.type = "text";
    ojoAbierto.style.visibility = "hidden";
    ojoCerrado.style.visibility = "visible";
    ver = false;
  } else {
    inputPassword.type = "password";
    ojoAbierto.style.visibility = "visible";
    ojoCerrado.style.visibility = "hidden";
    ver = true;
  }

}
