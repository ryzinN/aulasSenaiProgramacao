#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int idadePedro;
    int idadeJoana;
    int idadeIsmael;

    printf("Digite a idade de Pedro: ");
    scanf("%d", &idadePedro);
    printf("Digite a idade de Joana: ");
    scanf("%d", &idadeJoana);
    printf("Digite a idade de Ismael: ");
    scanf("%d", &idadeIsmael);

    if(idadePedro > idadeJoana && idadePedro > idadeIsmael){
        printf("Pedro e mais velho.");
    }
    else if(idadeJoana > idadeIsmael && idadeJoana > idadePedro){
        printf("Joana e mais velha");
    }else{
        printf("Ismael e mais velho");
    }
}