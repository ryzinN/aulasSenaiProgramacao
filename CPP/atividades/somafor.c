#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int numero;
    int limite;
    int soma = 0;


    printf("Quantos numeros serao digitados: ");
    scanf("%d", &limite);

    for(int i = 0; i < limite; i++ ){
         printf("Digite um numero: ");
         scanf("%d", &numero);
        soma = soma + numero;
    }
    printf("A somas dos valores e: %d", soma);
}