#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
    int numero;

     printf("Digite um numero: ");
     scanf( "%d", &numero);
     
    for(int multiplicador = 1; multiplicador <= 10; multiplicador++){
      
        printf("%d x %d : %d\n",numero, multiplicador, numero * multiplicador);
    }
}