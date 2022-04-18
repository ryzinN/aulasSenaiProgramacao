#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int numero;
    int soma = 0;

    printf("Digite o primeiro numero: ");
    scanf("%d", &numero);

    while(numero != 0){

         soma = numero + soma; 
         printf("Digite o outro numero: ");
         scanf("%d", &numero);
    }

    printf("A somas dos valores e: %d",soma);
}