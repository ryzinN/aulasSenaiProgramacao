#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    int n1;
    int n2;
    int n3;
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    printf("Digite tres numeros diferentes: \n\n");

    printf("Digite o primeiro numero: ");
    scanf("%d", &n1);

    printf("Digite o segundo numero: ");
    scanf("%d", &n2);

    printf("Digite o terceiro numero: ");
    scanf("%d", &n3);
    printf("\n");

     if (n1 > n3) {
        int cre = n3;
        n3 = n1;
        n1 = cre;
    }
    if (n1 > n2) {
        int cre = n2;
        n2 = n1;
        n1 = cre;
    }
    if (n2 > n3) {
        int cre = n3;
        n3 = n2;
        n2 = cre;
    }
     printf("Na ordem crescente os numero sao: %d, %d, %d", n1,n2,n3);
}
   