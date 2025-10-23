const form = document.querySelector('#gameForm');

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    var formData = new FormData(form);
    console.log(formData.get("NomeJogador"));
});