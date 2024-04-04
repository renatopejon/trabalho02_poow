function cpfMask(value) {
    return value
        .replace(/\D/g, '') // Substitui qualquer caracter que não seja número por nada
        .replace(/(\d{3})(\d)/, '$1.$2') // Coloca um ponto entre o terceiro e o quarto dígitos
        .replace(/(\d{3})(\d)/, '$1.$2') // Coloca um ponto entre o terceiro e o quarto dígitos, novamente, para o segundo bloco de números
        .replace(/(\d{3})(\d{1,2})/, '$1-$2') // Coloca um hífen entre o terceiro e o quarto dígitos
        .replace(/(-\d{2})\d+?$/, '$1'); // Captura 2 números após o hífen e não deixa ser digitado mais nada
}

document.getElementById('cpf').addEventListener('input', function(e) {
    e.target.value = cpfMask(e.target.value);
});