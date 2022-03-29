#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int n1;

    printf("Digite um numero inteiro positivo: ");
    scanf("%d", &n1);
    printf("\n");
    printf("Os numeros impares menores que %d sao: \n", n1);

    for(int i = 0; i < n1; i++){

        if( i % 2 == 1){

        printf("%d\n", i );

        }
    }
}