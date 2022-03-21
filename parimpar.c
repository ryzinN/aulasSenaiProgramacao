#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int par;

    printf("Digite um numero inteiro: \n");
    scanf("%d", &par);
    int impar = par + 1;
    if(par != impar){
        printf("O numero %d e par!", par);
    }else{
        printf("O numero %d e impar!", impar);
    }

}