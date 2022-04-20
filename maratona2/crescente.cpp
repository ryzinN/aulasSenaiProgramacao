#include <bits/stdc++.h>

using namespace std;

int main(){

    float x,y;

    cout << "Digite dois numerosa abaixo" << endl;
    cout << "Primeiro numero: " << endl;
    cin >> x;
    cout << "Segundo numero: " << endl;
    cin >> y;
    
    while(x +- y){
        if(x < y){
            cout << "CRESCENTE!";
        }else{
            cout << "DECRESCENTE!";
        }
    
    cout << endl << "Digite outros dois numeros:" << endl;
    cout << "Primeiro numero: " << endl;
    cin >> x;
    cout << "Segundo numero: " << endl;
    cin >> y;
    }
}