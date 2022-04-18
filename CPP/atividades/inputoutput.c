#include <stdio.h>


int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");


    char nome[20];
    float salario;
    int idade;
    char sexo[5];

    char nome1[20];
    float salario1;
    int idade1;
    char sexo1[5];

    printf("Nome da primeira pessoa: ");
    scanf("%s", &nome);
    printf("Salario da primeira pessoa: ");
    scanf("%f", &salario);
    printf("Digite a idade da primeira pessoa: ");
    scanf("%d", &idade);
    printf("Digite o sexo (F/M) da primeira pessoa: ");
    scanf("%s", &sexo);

    printf("Nome da segunda pessoa: ");
    scanf("%s", &nome1);
    printf("Salario da segunda pessoa: ");
    scanf("%f", &salario1);
    printf("Digite a idade da segunda pessoa: ");
    scanf("%d", &idade1);
    printf("Digite o sexo (F/M) da segunda pessoa: ");
    scanf("%s", &sexo1);


    printf("\n****** RELATORIO DOS DADOS ******\n\n");
    printf("Nome1: %s\n", nome);
    printf("Salario1: %.2f\n", salario);
    printf("Idade: %d\n", idade);
    printf("Sexo1: %s\n\n", sexo);

    printf("Nome2: %s\n", nome1);
    printf("Salario2: %.2f\n", salario1);
    printf("Idade2 %d\n", idade1);
    printf("Sexo2: %s\n", sexo1);


}