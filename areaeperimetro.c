#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n");

    int lado;

    printf("Digite o lado do quadrado em cm: ");
    scanf("%d", &lado);
    printf("A area do quadrado e: %d\n", lado * lado);
    printf("O perimetro do quadrado e: %d\n", lado + lado + lado + lado);

}