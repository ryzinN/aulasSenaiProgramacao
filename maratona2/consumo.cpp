#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);
    float distancia, combustivel, consumo;

    cout << "Distancia percorrida: ";
    cin >> distancia;
    cout << "Combustivel gasto: ";
    cin >> combustivel;
    
    consumo = distancia / combustivel;
    
    cout << "Consumo medio e = " << consumo << " litros por KM";
}