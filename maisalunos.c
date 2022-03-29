#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int aluno;
    int aluna;

    printf("Aluno <a>: \n\n");
    printf("Digite a quantidade de alunos: ");
    scanf("%d", &aluno);
    printf("Digite a quantidade de alunas: ");
    scanf("%d", &aluna);
    printf("\n\n");

    if(aluno > aluna){
        printf("Existem mais alunos que alunas.\n\n");
    }else{
        printf("Existem mais alunas que alunos.\n\n");
    }
}

    