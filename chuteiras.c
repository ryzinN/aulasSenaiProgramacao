#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int adidas;
    int nike;
    int puma;

    printf("Digite a quantidade de chuteiras da ADIDAS: ");
    scanf("%d", &adidas);
    printf("Digite a quantidade de chuteiras da NIKE: ");
    scanf("%d", &nike);
    printf("Digite a quantidade de chuteiras da PUMA: ");
    scanf("%d", &puma);

    printf("\n\n");

    printf("Existem %d chuteiras da ADIDAS\n", adidas);
    printf("Existem %d chuteiras da NIKE\n", nike);
    printf("Existem %d chuteiras da PUMA\n", puma);
}