#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int n1;
    int n2;

    printf("Voce devera digitar dois numeros inteiros diferentes: \n\n");
    printf("Digite o primeiro numero: ");
    scanf("%d", &n1);
    printf("Digite o segundo numero: ");
    scanf("%d", &n2);

    int diferenca = n1 - n2;
    int diferenca2 = n2 - n1;

    if( n1 > n2){
        printf("A diferenca do maior pelor menor numero e: %d ", diferenca);
    }
     if( n2 > n1){
        printf("A diferenca do maior pelor menor numero e: %d ", diferenca2);
    }
    if( n1 == n2){
        printf("Estes numeros sao iguais, digite um valor diferente!");
    }
    
}