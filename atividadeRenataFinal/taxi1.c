#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int b1 = 1;
    int b2 = 2;
    int esc;

    printf("Digite o numero da bandeira <1 ou 2>: ");
    scanf("%d", &esc);

    if(esc == b1){
        float vb1 = 1.80;
        int km;
        printf("Digite o valor da kilometragem rodada: ");
        scanf("%d", &km);
       float resultado1 = km * vb1;
        printf("O valor da corrida e: R$%.2f", resultado1);
    }

     if(esc == b2){
        float vb2 = 2.30;
        int km1;
        printf("Digite o valor da kilometragem rodada: ");
        scanf("%d", &km1);
        float resultado2 = km1 * vb2;
        printf("O valor da corrida e: R$%.2f", resultado2);
    }
}