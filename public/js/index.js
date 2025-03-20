
console.log("OK")
const textRes = document.getElementById("res");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");



function login(){
    console.log(passwordInput.value)
    console.log(usernameInput.value)

    axios.post('/login', {
        username: usernameInput.value,
        password: passwordInput.value
      })
    .then(function (response) {
        // manejar respuesta exitosa
        console.log(response);
        if(response.status == 200){
            window.location.href =  window.location.origin;
        }
    })
    .catch(function (error) {
        // manejar error
        console.log(error);
    })

}

function logout(){
    axios.get('/logout')
    .then(function (response) {
        // manejar respuesta exitosa
        console.log(response);
        if(response.status == 200){
            window.location.href =  window.location.origin + "/login";
        }
    })
    .catch(function (error) {
        // manejar error
        console.log(error);
    })

}
