#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(1);

    char nome1[40], nome2[40];
    int idade1, idade2;
    float media;

    cout << "Dados da primeira pessoa:" << endl;
    cout << "Nome: ";
    cin >> nome1;
    cout << "Idade: ";
    cin >> idade1;
    cout << endl ;
    cout << "Dados da segunda pessoa:" << endl;
    cout << "Nome: ";
    cin >> nome2;
    cout << "Idade: ";
    cin >> idade2;
    cout << endl;

    media = (idade1 + idade2) / 2;

    cout << "A idade media de " << nome1 << " e " << nome2 << " e de: " << media << "anos";


}