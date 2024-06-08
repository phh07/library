function mostrarSenha() {
    let inputPass = document.getElementById('password')
    let btnShowPass = document.getElementById('btn-eye')

    if(inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi bi-eye', 'bi bi-eye-slash')
    }else {
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi bi-eye-slash', 'bi bi-eye')
    }
}