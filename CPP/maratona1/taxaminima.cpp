#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);

    float vb1 = 1.80;
    float vb2 = 2.30;
    int esc;
    float km;
    float taxam = 3.50;

    cout << "ATENCAO: Taxa minima do taxi: R$" << taxam << endl;
    cout << "Digite o numero da bandeira <1 ou 2>: ";
    cin >> esc;

    if(esc == 1){
        cout << "Digite o valor da kilometragem rodada: ";
        cin >> km;

        if(km > 1){
        float resultado = (vb1 * km);
        cout << "O valor da corrida e: R$" << resultado;
        }

        if(km < taxam){
        cout << "O valor da corrida e: R$" << taxam;
        }
    }

     if(esc == 2){
        cout << "Digite o valor da kilometragem rodada: ";
        cin >> km;

        if(km > 1){
        float resultado1 = (vb2 * km);
        cout << "O valor da corrida e: R$" << resultado1;
        }
        if(km < taxam){
        cout << "O valor da corrida e:R$" << taxam;
        }
    }
}