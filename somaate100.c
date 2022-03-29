#include <stdio.h>

int main(){

int numeroprimeiro = 0;
int soma = 0;

for(int numeros = 1; numeros <= 100  ; numeros++){
    soma = soma + numeros;
}
printf("%d\n", soma);

//MESMA COISA PORÉM NO WHILE

while(numeroprimeiro <= 100){
 soma = soma + numeroprimeiro;
 printf("%d\n", soma);
 numeroprimeiro++;
    }
} 