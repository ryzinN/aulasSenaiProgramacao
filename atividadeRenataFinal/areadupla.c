#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int area1;
    int base1;
    int area2;
    int base2;

    printf("Digite a base do primeiro retangulo em cm: ");
    scanf("%d", &area1);
    printf("Digite a altura do primeiro retangulo em cm: ");
    scanf("%d", &base1);
    printf("Digite a base do segundo retangulo em cm: ");
    scanf("%d", &area2);
    printf("Digite a altura do segundo retangulo em cm: ");
    scanf("%d", &base2);

    printf("\n\n");

    (float)area1;
    (float)base1;
    (float)area2;
    (float)base2;

    float resultado1 = area1 * base1;
    float resultado2 = area2 * base2;

    printf("A area do primeiro retangulo: %2.0f cm ", resultado1);
    printf("\n");
    printf("A area do segundo retangulo: %2.0f cm", resultado2);
    printf("\n\n");
    
    if(resultado1 > resultado2){
        printf("A area do primeiro retangulo e maior ");
    }
    if(resultado2 > resultado1){
         printf("A area do segundo retangulo e maior");
    }
    else if(resultado1 == resultado2){
        printf("A area dos dois retangulos sao iguais");
    }
}