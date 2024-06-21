const entrybutton = document.getElementById("entry-button");
const inputnick = document.getElementById("inputnick");
let errormsg = document.getElementById("entry-erorr-msg");

let username;

entrybutton.addEventListener('click', function(event){
    if(inputnick.value.length < 3 || inputnick.value.length > 22){
        errormsg.innerHTML = "некоректный никнейм";
    }
    else{
        username = inputnick.value;
        window.location.href = 'lobby.php';
    }
});

