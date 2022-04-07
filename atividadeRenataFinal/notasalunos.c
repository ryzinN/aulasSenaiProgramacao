#include<stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    float nota, maior, menor, soma = 0.0;
    int i;

    printf("Digite a 1.a nota de: ");
    scanf("%f", &nota);

    maior = nota;
    menor = nota;

    for(i = 1; i < 10; i++){
    
        printf("Digite a %d.a nota: ",i+1);
        scanf("%f", &nota);

        soma = soma + nota;

        if(nota > maior)
        maior = nota;

        else if(nota < menor)
        menor = nota;
    }
        printf("\nA soma dos notas e: %.1f", soma);
        printf("\nA media das notas e: %.1f", soma /10);
        printf("\nO maior nota entrado e: %.1f", maior);
        printf("\nO menor nota entrado e: %.1f", menor); 
}