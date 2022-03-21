#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){

    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n");

    int suspeitos;
    int confirmados;
    int mortes;

    printf("Preencha com as seguintes informações sobre a Dengue em Votuporanga: \n");
    printf("Casos Suspeitos: \n");
    scanf("%d", &suspeitos);
    printf("Casos Confirmados: \n");
    scanf("%d", &confirmados);
    printf("Quantidades de Mortes: \n");
    scanf("%d", &mortes);

    printf("Informacoes sobre a Dengue em Votuporanga: \n");
    printf("    Casos Suspeitos: %d\n", suspeitos);
    printf("    Casos Confirmados: %d\n", confirmados);
    printf("    Quantidades de Mortes %d\n", mortes);

    int total = suspeitos + confirmados + mortes;
    printf("    Total de Casos: %d\n", total);

}