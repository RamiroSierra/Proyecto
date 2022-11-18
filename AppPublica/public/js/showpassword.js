const pass_field = document.querySelector(".pass-key");
const showBtn = document.querySelector(".show");
showBtn.addEventListener("click",function () {
    if (pass_field.type === "password") {
        pass_field.type = "text";
        showBtn.textContent = "OCULTAR";
        shotBtn.style.color = "#ff0000";
    } else {
        pass_field.type = "password";
        showBtn.textContent = "MOSTRAR";
        showBtn.style.color = "#222";
    }
});