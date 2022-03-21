#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n");

    int numero1;
    int numero2;

    printf("Digite dois numeros diferentes de zero: \n");
    printf("Numero 1: ");
    scanf("%d", &numero1);
    printf("Numero 2: ");
    scanf("%d", &numero2);
    
    double media = (numero1 + numero2) / 2.0; 

    printf("A soma %d + %d = %d\n",numero1, numero2, numero1 + numero2);
    printf("A subtracao %d - %d = %d\n",numero1, numero2, numero1 - numero2);
    printf("O produto %d x %d = %d\n",numero1, numero2, numero1 * numero2);
    printf("A divisao %d : %d = %d\n",numero1, numero2,numero1 / numero2 );
    printf("A media entre %d e %d = %.2f",numero1, numero2, media);

}