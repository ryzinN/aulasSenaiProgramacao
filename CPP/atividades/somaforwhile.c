#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int n = 0;
    int limite;
    int numero;
    int soma = 0;

    printf("Quantos numeros serao digitados: ");
    scanf("%d", &limite);

    while(n < limite){
         printf("Digite um numero: ");
         scanf("%d", &numero);
         soma = soma + numero;
         n++;
    }
    printf("A somas dos valores e: %d", soma);
}