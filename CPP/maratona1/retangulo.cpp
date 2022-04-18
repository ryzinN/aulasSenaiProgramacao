#include <bits/stdc++.h>
using namespace std;
int main(){

    cout << fixed << setprecision(2);

    int base1, alt1, base2, alt2;

    cout << "Digite a base do primeiro retangulo em cm: ";
    cin >> base1;
    cout << "Digite a altura do primeiro retangulo em cm: ";
    cin >> alt1;
    cout << "Digite a base do segundo retangulo em cm: ";
    cin >> base2;
    cout << "Digite a altura do segundo retangulo em cm: ";
    cin >> alt2;

    float area1 = base1 * alt1;
    float area2 = base2 * alt2;

    cout << "A area do primeiro retangulo e: " << area1 << "cm" << endl;;
    cout << "A area do segundo retangulo e: " << area2 << "cm" << endl;

    if(area1 > area2){
        cout << "A area1 e maior que area 2!";
    }else{
        cout << "A area2 e maior que a area 1!";
    }
}
