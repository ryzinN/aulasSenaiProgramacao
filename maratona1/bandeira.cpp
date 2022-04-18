#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);
    
    int b1 = 1;
    int b2 = 2;
    int esc;

    cout<< "Digite o numero da bandeira <1 ou 2>: ";
    cin >> esc;

    if(esc == b1){
        float vb1 = 1.80;
        int km;
        cout<< "Digite o valor da kilometragem rodada: ";
        cin >> km;
        float resultado1 = km * vb1;
        cout <<"O valor da corrida e: R$ " << resultado1;
    }

     if(esc == b2){
        float vb2 = 2.30;
        int km1;
        cout << "Digite o valor da kilometragem rodada: ";
        cin >> km1;
        float resultado2 = km1 * vb2;
        cout << "O valor da corrida e: R$" << resultado2;
    }
}