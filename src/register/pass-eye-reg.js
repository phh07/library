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
} )

let btnShowPassConfirm = document.getElementById('btn-eye-confirm')
btnShowPassConfirm.addEventListener('click', function() {
    let inputPassConfirm = document.getElementById('password-confirm')
    let btnShowPassConfirm = document.getElementById('btn-eye-confirm')

    if(inputPassConfirm.type === 'password') {
        inputPassConfirm.setAttribute('type', 'text')
        btnShowPassConfirm.classList.replace('bi-eye' , 'bi-eye-slash')
    }else {
        inputPassConfirm.setAttribute('type', 'password')
        btnShowPassConfirm.classList.replace('bi-eye-slash' , 'bi-eye')
    }
})
