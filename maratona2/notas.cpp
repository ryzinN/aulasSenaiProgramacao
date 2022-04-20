#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(1);

    float nota1, nota2, notafinal;

    cout << "Digite a primeira nota: ";
    cin >> nota1;
    cout << "Digite a segunda nota: ";
    cin >> nota2;

    notafinal = nota1 + nota2;

    cout << "NOTA FINAL = " << notafinal;
    cout << endl;

    if(notafinal < 60.0){
        cout << "REPROVADO";
    }
}