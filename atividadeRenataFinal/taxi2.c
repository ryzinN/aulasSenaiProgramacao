#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    float vb1 = 1.80;
    float vb2 = 2.30;
    int esc;
    float km;
    float taxam = 3.50;

    printf("ATENCAO: Taxa minima do taxi: R$ %.2f\n", taxam);
    printf("Digite o numero da bandeira <1 ou 2>: ");
    scanf("%d", &esc);

    if(esc == 1){
        printf("Digite o valor da kilometragem rodada: ");
        scanf("%f", &km);

        if(km > 1){
        float resultado = (vb1 * km);
        printf("O valor da corrida e: R$%.2f", resultado);
        }

        if(km < 1){
            printf("O valor da corrida e: %.2f", taxam);
        }
    }

     if(esc == 2){
        printf("Digite o valor da kilometragem rodada: ");
        scanf("%f", &km);

        if(km > 1){
        float resultado1 = (vb2 * km);
        printf("O valor da corrida e: R$%.2f", resultado1);
        }
        if(km < 1){
            printf("O valor da corrida e: %.2f", taxam);
        }
    }
}