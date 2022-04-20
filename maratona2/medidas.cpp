#include <bits/stdc++.h>

using namespace std;

int main(){

cout << fixed << setprecision(2);

    float a,b,c, areaqua, areatri,areatra;

    cout << "Digite a medida A: ";
    cin >> a;
    cout << "Digite a medida B: ";
    cin >> b;
    cout << "Digite a medida C: ";
    cin >> c;

    areaqua = a * a;
    areatri = (a * b) / 2;
    areatra = (a = b) / 2 * c;

    cout << "QUADRADO = " << areaqua << endl; 
    cout << "TRIANGULO = " << areatri << endl;
    cout << "TRAPEZIO = " << areatra << endl;
}