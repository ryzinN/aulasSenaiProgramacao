#include <stdio.h>
#include <string.h>


int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    char nome[50];

    int idade = 20;
    float salario = 5800.50;
    float altura = 1.63;
    char genero = 'F';
    strcpy(nome,  "Maria Silva" );

    printf("IDADE = %d\n", idade);
    printf("SALARIO = %.2f\n", salario);
    printf("ALTURA = %.2f\n", altura);
    printf("GENERO = %c\n", genero);
    printf("NOME = %s\n", nome);

    return 0;
    
    }