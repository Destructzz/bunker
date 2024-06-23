document.addEventListener('DOMContentLoaded', (event) => {
    let username = localStorage.getItem('username');
    let input = document.getElementById("user-text");
    let contain = document.getElementById("user-contain");
    let button = document.getElementById("user-button");

    contain.innerHTML = "";

    document.getElementById("name").innerHTML = username ? `<h2>${username}</h2>` : '<h2>Guest</h2>';

    const ws = new WebSocket('ws://127.0.0.1:8080');

    ws.onopen = function(e) {
        console.log("WebSocket connection established");
    };

    ws.onerror = function(error) {
        console.error("WebSocket error: ", error);
    };

    ws.onclose = function(e) {
        console.log("WebSocket connection closed");
    };

    button.addEventListener('click', function(event){
        contain.innerHTML += `${username}: ${input.value}<br>`;
        let data = {
            name: username,
            text: input.value
        };
        ws.send(JSON.stringify(data));
        input.value = "";
    });

    ws.onmessage = function(response) {
        let data = JSON.parse(response.data);
        if(username !== data.name){
            contain.innerHTML += `${data.name}: ${data.text}<br>`;
        }
    };
});
