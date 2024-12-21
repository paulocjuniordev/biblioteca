
//Geração de Número de registro automático

(function() {
    const inputCadastro = document.getElementById('n_cadastro');
    let lastNumber = localStorage.getItem('lastCadastro') || 0;
    lastNumber = (parseInt(lastNumber) + 1) % 10000000000000; // Limite de 9999999999999
    inputCadastro.value = lastNumber;
    localStorage.setItem('lastCadastro', lastNumber);
})();

