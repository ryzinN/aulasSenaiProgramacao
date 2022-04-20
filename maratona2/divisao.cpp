#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);
    int n;
    float x ,y ,divisao;

    cout << "Quantas casos voce vai digitar? ";
    cin >> n;

    for(int i = 0; i < n; i++){

        cout << "Entre com o numerador: ";
        cin >> x;
        cout << "Entre com o denominador: ";
        cin >> y;

        if(y == 0){
            cout << "DIVISAO IMPOSSIVEL";
        }else{
            divisao = x / y;
        }
        cout << "DIVISAO = " << divisao;
    }
}