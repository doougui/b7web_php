var ingredientes = ['Chocolate', 'Fermento', 'Açucar', 'Ovos'];

console.log(ingredientes[1]); //Item da posição 1
console.log(ingredientes.length); //Tamanho do Array
console.log(ingredientes.indexOf('Chocolate')); //Posição do item Chocolate (se não achar, o valor é -1)
console.log(ingredientes.join(', ')); //O que vai ser adicionado entre os itens do Array
console.log(ingredientes.shift()); //Remove o primeiro item do Array
console.log(ingredientes.unshift('Bombom')); //Adiciona no primeiro item do Array
console.log(ingredientes.pop()); //Remove o último item do Array
console.log(ingredientes.push('Morango')); //Adiciona um item ao Array
console.log(ingredientes.splice(2, 1)); //Remove um item do Array
console.log(ingredientes); //Mostra o Array