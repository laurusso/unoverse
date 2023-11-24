const inputElementNome = document.getElementById("editableInputNome");
const editIconNome = document.getElementById("editIconNome");
const inputElementSobrenome = document.getElementById("editableInputSobrenome");
const editIconSobrenome = document.getElementById("editIconSobrenome");

const editIconEscola = document.getElementById("editIconEscola");

const inputElementEscola = document.getElementById("editableInputEscola");
const checkIconEscola = document.getElementById("checkIconEscola");
const selectEscola = document.getElementById("select");

const inputElementEmail = document.getElementById("editableInputEmail");
const editIconEmail = document.getElementById("editIconEmail");
const inputElementSenha = document.getElementById("editableInputSenha");
const editIconSenha = document.getElementById("editIconSenha");
const checkIconId = document.getElementById("checkIconId");
var mql = window.matchMedia('(max-width: 768px)');
function toggleEditMode(inputElement, editIcon, checkIcon, inputType) {
    
    const editIconElement = document.getElementById(editIcon);
    const checkIconElement = document.getElementById(checkIcon);

    if (inputElement.readOnly) {
        inputElement.readOnly = false;
        inputElement.style.backgroundColor = "#B8CAD9";
        inputElement.style.color = "red";
        editIconElement.style.display = "none";
        checkIconElement.style.display = "block";
        inputElement.style.display = "none";
        if (inputType === "escola") {
            selectEscola.style.display = "block";
            inputElement.style.display = "none";
        }
    } else {
        inputElement.readOnly = true;
        inputElement.style.backgroundColor = "#1789FC";
        inputElement.style.color = "#FFF";
        editIconElement.style.display = "inline";
        checkIconElement.style.display = "none";
        inputElement.style.display = "block";
        if (inputType === "escola") {
            selectEscola.style.display = "none";
            inputElement.style.display = "block";
        }
    }
}


editIconNome.addEventListener("click", () => {
    toggleEditMode(inputElementNome, editIconNome, checkIconNome, "nome");
});

editIconSobrenome.addEventListener("click", () => {
    toggleEditMode(inputElementSobrenome, editIconSobrenome, checkIconSobrenome, "sobrenome");
});

editIconEscola.addEventListener("click", () => {
    toggleEditMode(inputElementEscola, editIconEscola, checkIconEscola, "escola");
});

editIconEmail.addEventListener("click", () => {
    toggleEditMode(inputElementNome, editIconNome, checkIconNome, "email");
});

editIconSenha.addEventListener("click", () => {
    toggleEditMode(inputElementNome, editIconNome, checkIconNome, "senha");
});

 