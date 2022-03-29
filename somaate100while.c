#include <stdio.h>

int main(){

    int numerolimite = 100;
    int numeroprimeiro = 0;
    int somanumero = 0;

    printf("Soma dos numeros de 1 a 100!\n");

    while(numeroprimeiro <= numerolimite){
        numeroprimeiro++;
        somanumero = somanumero + numeroprimeiro;
        printf("%d\n", somanumero);

    }
}