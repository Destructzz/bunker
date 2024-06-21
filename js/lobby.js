document.addEventListener('DOMContentLoaded', (event) => {
    let username = localStorage.getItem('username');
    document.getElementById("name").innerHTML = username ? username : 'Guest';
});
