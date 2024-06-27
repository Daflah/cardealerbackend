// Corrected code
const login = document.querySelector("#login-btn");
const regis = document.querySelector("#regis-btn");
const container = document.querySelector(".container");

regis.addEventListener("click", () => {
    container.classList.add("regis-mode")
})
login.addEventListener("click", () => {
    container.classList.remove("regis-mode")
})