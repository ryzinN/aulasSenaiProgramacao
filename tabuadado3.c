#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>

int main(){
    
    printf("Escola Senai \n");
    printf("Euclides Facchini Votuporanga\n");
    printf("Alison Keiji Kubota\n");

    int numero = 3;

    for(int i = 1; i <= 10; i++){

    printf("%d x %d : %d\n",numero, i, numero * i);

    }
}