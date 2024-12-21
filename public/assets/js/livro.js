(function() {
    const inputRegistro = document.getElementById('registro');
    let lastNumber = localStorage.getItem('lastRegistro') || 0;
    lastNumber = (parseInt(lastNumber) + 1) % 10000000000000;
    inputRegistro.value = lastNumber;
    localStorage.setItem('lastRegistro', lastNumber);
})();
