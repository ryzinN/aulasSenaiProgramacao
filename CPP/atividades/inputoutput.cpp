#include <iostream>
#include <iomanip>
#include <string>

using namespace std;

int main(){

    float salario1, salario2;
    string nome1, nome2;
    int idade1, idade2;
    char sexo1, sexo2;

    cout << "Nome da primeira pessoa: ";
    cin >> nome1;
    cout << "Salario da primeira pessoa: ";
    cin >> salario1;
    cout << "Digite a idade da primeira pessoa: ";
    cin >> idade1;
    cout << "Digite o sexo (M/F) da primeira pessoa: " << endl;
    cin >> sexo1;

    cout << "Nome da segunda pessoa: ";
    cin >> nome2;
    cout << "Salario da segunda pessoa: ";
    cin >> salario2;
    cout << "Digite a idade da segunda pessoa: ";
    cin >> idade2;
    cout << "Digite o sexo (M/F) da segunda pessoa ";
    cin >> sexo2;

    cout  <<endl << endl;

    cout << "******** RELATORIO DE DADOS *******\n\n";

    cout << "Nome1: " << nome1 << endl;
    cout << "Salario: " << salario1 <<endl;
    cout << "Idade1: " << idade1 << endl;
    cout << "Sexo1: " << sexo1 << endl << endl;

    cout << "Nome2: " << nome2 << endl;
    cout << "Salario2: " << salario2 <<endl;
    cout << "Idade2: " << idade2 << endl;
    cout << "Sexo2: " << sexo2 << endl;

}