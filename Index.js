document.addEventListener('DOMContentLoaded', () => {

    var quadrados = document.querySelectorAll('[data-name="campo_jogo"]');
  
    quadrados.forEach(element => {
        element.addEventListener('click', (event) => {
            console.log('Clicou no quadrado:', event.target);
     });
    });
  


function controleDeJogo() {
   var JogadorAtual = 0;

   if(gameON){
      
   }

}

function vezDeQuem() {
  
    if (JogadorAtual == 0) {
        JogadorAtual = 1;
    } else {
        JogadorAtual = 2;
    }
}

});
