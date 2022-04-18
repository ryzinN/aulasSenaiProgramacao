#include <iostream>

using namespace std;

int main(){

    int n = 0;
    int numero;
    int limite;
    int soma = 0;

    cout << "Quantos numeros serao digitados: ";
    cin >> limite;

    while(n < limite){

        cout << "Digite um numero: ";
        cin >> numero;
        soma = soma + numero;
        n++;
    }
    cout << "A soma dos numeros sao: " << soma;
}