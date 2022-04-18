#include <stdio.h>
#include <string.h>

    void limpar_entrada (){
        char c;
        while ((c = getchar ()) != '\n' && c != EOF){
        }
    }

    void ler_texto (char *buffer, int lenght){
        fgets(buffer, lenght, stdin);
        strtok(buffer, "\n");
    }

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    char nome[50];
    float salario;
    int idade;
    char sexo[10];

    char nome1[50];
    float salario1;
    int idade1;
    char sexo1[10];

    printf("Nome da primeira pessoa: ");
    ler_texto (nome, 50);
    printf("Salario da primeira pessoa: ");
    scanf("%f", &salario);
    printf("Digite a idade da primeira pessoa: ");
    scanf("%d", &idade);
    printf("Digite o sexo (F/M) da primeira pessoa: ");
    limpar_entrada ();
    ler_texto (sexo, 10);

    printf("\n\n");
    
    printf("Nome da segunda pessoa: ");
    ler_texto (nome1, 50);
    printf("Salario da segunda pessoa: ");
    scanf("%f", &salario1);
    printf("Digite a idade da segunda pessoa: ");
    scanf("%d", &idade1);
    printf("Digite o sexo (F/M) da segunda pessoa: ");
    limpar_entrada ();
    ler_texto (sexo1, 10);

    printf("\n****** RELATORIO DOS DADOS ******\n\n");
    printf("Nome1: %s\n", nome);
    printf("Salario1: %.2f\n", salario);
    printf("Idade: %d\n", idade);
    printf("Sexo1: %s\n\n", sexo);

    printf("Nome2: %s\n", nome1);
    printf("Salario2: %.2f\n", salario1);
    printf("Idade2 %d\n", idade1);
    printf("Sexo2: %s\n", sexo1);

    return 0;

}
