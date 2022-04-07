#include<stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    float c, f;

    printf("\nDigite a temperatura em CELSIUS: ");
    scanf("%f", &c);

    float formula = c * 1.8 + 32;

    printf("A temperatura em FAHRENHEIT e: %.2f", formula);
}