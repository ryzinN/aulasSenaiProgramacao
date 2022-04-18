#include <iostream>
#include <iomanip>
#include <string>

using namespace std;

int main() {
    int a;
    float nota, notamaior= 0, notamenor = 10;
    double soma = 0;

     cout << "De quantos numeros voce quer saber a media: ";
     cin >> a;

     for (int i = 1; i <= a; i++) {
        cout<<"digite um dos numeros: \n";
        cin >>nota;
        soma = soma + nota;
        
        if(nota > notamaior){
            notamaior = nota;

        }
        if (nota < notamenor){
            notamenor = nota;
        }
     }
    
    double media =soma /a;
    cout<< "A soma das notas: " << soma << endl;
    cout<< "A media das notas: "<< media << endl;
    cout<< "Menor nota:  "<< notamaior << endl;
    cout<< "Maior nota:  "<< notamenor << endl;

}

