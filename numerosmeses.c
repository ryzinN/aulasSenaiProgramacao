#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int valor;
    int janeiro = 1;
    int fevereiro = 2;
    int marco = 3;
    int abril = 4;
    int maio = 5;
    int junho = 6;
    int julho = 7;
    int agosto = 8;
    int setembro = 9;
    int outubro = 10;
    int novembro = 11;
    int dezembro = 12;
    
    printf("Digite um numero inteiro de 1 a 12 correspondente ao mes desejado: ");
    scanf("%d", &valor);

    if(valor == janeiro){
        printf("O numero correspondente ao mes de Janeiro.");
    }
    
    if(valor == fevereiro){
        printf("O numero correspondente ao mes de Fevereiro.");
    }
    if(valor == marco){
        printf("O numero correspondente ao mes de Marco.");
    }
    if(valor == abril){
        printf("O numero correspondente ao mes de Abril.");
    }
    if(valor == maio){
        printf("O numero correspondente ao mes de Maio.");
    }
    if(valor == junho){
        printf("O numero correspondente ao mes de Junho.");
    }
    if(valor == julho){
        printf("O numero correspondente ao mes de Julho.");
    }
    if(valor == agosto){
        printf("O numero correspondente ao mes de Agosto.");
    }
    if(valor == setembro){
        printf("O numero correspondente ao mes de Setembro.");
    }
    if(valor == outubro){
        printf("O numero correspondente ao mes de Outubro.");
    }
    if(valor == novembro){
        printf("O numero correspondente ao mes de Novembro.");
    }
    if(valor == dezembro){
        printf("O numero correspondente ao mes de Dezembro.");
    }
    if(valor > 12){
        printf("O numero nao corresponde a nenhum mes do ano");
    }
}