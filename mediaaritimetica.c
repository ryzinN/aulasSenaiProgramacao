#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n\n");

    int quantidade;
    int n;
    double soma = 0.0;

    printf("Digite quantos numeros voce deseja calcular a media: ");
    scanf("%d", &quantidade);

    for(int i = 0; i < quantidade; i++){

        printf("Digite um numero: ");
        scanf("%d", &n);
         soma = soma + n;
    }
     
    double resultado = soma / quantidade;
    printf("A media dos numeros fornecidos e: %.1f", resultado);

}