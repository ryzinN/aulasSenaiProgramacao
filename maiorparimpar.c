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

    printf("Digite um numero inteiro: ");
    scanf("%d", &n1);
    printf("Digite outro numero inteiro: ");
    scanf("%d", &n2);

    if(n1 > n2){
        printf("O primeiro numero e maior que o segundo numero");
    if(n1 % 2 == 0){
        printf(" e par!");
    }else { 
        printf(" e impar!");
    }
}
     if(n2 > n1){
        printf("O segundo numero e maior que o primeiro numero");
    
    if(n2 % 2 == 0){
        printf(" e par!");
    }else { 
        printf(" e impar!");
        }
    }
}