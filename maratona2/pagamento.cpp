#include <bits/stdc++.h>

using namespace std;

int main(){

    cout << fixed << setprecision(2);

    char nome[40];
    float valorHora, pagamento;
    int horasTrabalhadas;

    cout << "Nome: ";
    cin >> nome;
    cout << "Valor por hora: ";
    cin >> valorHora;
    cout << "Horas Trabalhadas: ";
    cin >> horasTrabalhadas;

    pagamento = valorHora * horasTrabalhadas;

    cout << "O pagamento para " << nome << " deve ser R$" << pagamento ;
}