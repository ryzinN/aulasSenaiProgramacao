#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

void abertura (int multiplicador){
    //aqui não enxergamos a variavel multiplicador
    printf("Tabuada do: \n");
    printf("Quero imprimir o multiplicador aqui, mas não consigo...");
}

int main(){
    
    int multiplicador = 2;
    //passar um inteiro diretamente
    abertura(multiplicador);

    for(int i = 0; i < 10; i++){
        int resultado = multiplicador * 1;
        printf("%d %d %d", i, multiplicador, resultado);
    }
} 