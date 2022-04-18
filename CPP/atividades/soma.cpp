#include <iostream>
#include <iomanip>
#include <string>
#include <climits>

using namespace std;

int main() {

    int numero;
    int soma = 0;

    cout << "Digite o primeiro numero: " << endl;
    cin >> numero;
 
    while(numero != 0){

        soma = numero + soma;
        cout<< "Digite o outro numero: " << endl;
        cin >> numero;
    }

    cout << "A soma dos valores sao: " << soma;
}