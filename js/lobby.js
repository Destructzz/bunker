document.addEventListener('DOMContentLoaded', (event) => {
    let username = localStorage.getItem('username');
    document.getElementById("name").innerHTML = username ? `<h2>${username}</h2>` : '<h2>Guest</h2>';
});
