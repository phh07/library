let btnShowPass = document.getElementById('btn-eye')
btnShowPass.addEventListener('click', function() {
    let inputPass = document.getElementById('password')

    if(inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')
        btnShowPass.classList.replace('bi-eye' , 'bi-eye-slash')
    }else {
        inputPass.setAttribute('type', 'password')
        btnShowPass.classList.replace('bi-eye-slash' , 'bi-eye')
    }
})

