#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

void tamojunto(int potencia1, int potencia2){
    int resultado = 1;
    for(int i = 0; i < potencia2; i++){
        resultado = resultado * potencia1;
}
    printf("O resultado e %d\n", resultado);
}
int main(){

int potencia1;
int potencia2;
printf("Digite o numero: ");
scanf("%d", &potencia1);
printf("Elevado a: ");
scanf("%d", &potencia2);

tamojunto(potencia1, potencia2);
    
}