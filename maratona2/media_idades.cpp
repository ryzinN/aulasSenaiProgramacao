#include <bits/stdc++.h>

using namespace std;

int main(){
    cout << fixed << setprecision(2);

    int idade, soma, cont;
    float media;

    soma = 0;
    cont = 0;

    cout << "Digite as idades: ";
    cin >> idade;

    while(idade >= 0){
        soma = soma + idade;
        cont = cont + 1;
        cin >> idade;
    }
    if (cont == 0){
        cout << "Impossivel Calcular";
    }else {
        media = soma / cont;
        cout << "MEDIA = " << media;
    }
}