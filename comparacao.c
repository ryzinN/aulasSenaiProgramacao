#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int pedrin;
    int joana;

    printf("ATENCAO: as idades nao pode ser iguais! \n");
    printf("Digite a idade de Pedro: \n");
    scanf("%d", &pedrin);
    printf("Digite a idade de Joana: \n");
    scanf("%d", &joana);

    if(joana > pedrin){
        printf("Joana e mais velha.");
        }

    if(joana < pedrin){
        printf(" Pedro e mais velho.");
    }else{
        printf("Pedro e Joana tem a mesma idade.");
    }
 }
