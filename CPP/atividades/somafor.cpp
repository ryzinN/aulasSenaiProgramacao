#include <iostream>

using namespace std;

int main(){
    int numero;
    int limite;
    int soma = 0;

    cout << "Quantos numeros serao digitados: ";
    cin >> limite;


    for(int i = 0; i < limite; i++){

        cout << "Digite um numero: ";
        cin >> numero;
        soma = soma + numero;
    }
    cout << "A soma dos valores e: " << soma;
}