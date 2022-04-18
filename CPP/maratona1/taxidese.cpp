#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);

    float vb1 = 1.80;
    float vb2 = 2.30;
    int esc;
    float km;
    float taxam = 3.50;
    int desc;
    

    cout <<"ATENCAO: Taxa minima do taxi: R$"<< taxam << endl;
    cout <<"Digite o numero da bandeira <1 ou 2>: " << endl;
    cin >>esc;
    cout <<"O taxi oferece desconto de 30% ? <1 - SIM ou 2 - NAO>: " << endl;
    cin >> desc;

    if(esc == 1 && desc == 1){
        cout <<"Digite o valor da kilometragem rodada: ";
        cin >> km;

        if(km > 1){
        float resultado = (vb1 * km);
        float con = (resultado * 30) / 100;
        cout <<"O valor da corrida e: R$" << resultado - con;
        }

        if(km < 1){
            cout <<"O valor da corrida e: R$" << taxam;
        }
    }

     if(esc == 2 && desc == 1){
        cout << "Digite o valor da kilometragem rodada: ";
        cin >> km;

        if(km > 1){
        float resultado1 = (vb2 * km);
        float con = (resultado1 * 30) / 100;
        cout << "O valor da corrida e: R$" << resultado1 - con;
        }
        if(km < 1){
            cout <<"O valor da corrida e: " << taxam;
        }
    }
    if(esc == 1 && desc == 2){
        cout << "Digite o valor da kilometragem rodada: ";
        cin >> km;

        if(km > 1){
        float resultado = (vb1 * km);
        float con = (resultado * 30) / 100;
        cout <<"O valor da corrida e: R$" << resultado;
        }

        if(km < 1){
            cout <<"O valor da corrida e: " << taxam;
        }
    }

     if(esc == 2 && desc == 2){
        cout << "Digite o valor da kilometragem rodada: ";
        cin >>km;

        if(km > 1){
        float resultado1 = (vb2 * km);
        float con = (resultado1 * 30) / 100;
        cout <<"O valor da corrida e: R$" << resultado1;
        }
        if(km < 1){
            cout <<"O valor da corrida e: " << taxam;
        }
    }
}

