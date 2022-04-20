#include <bits/stdc++.h>

using namespace std;

int main(){

    float salario, porcentagem, aumento, novosalario;

    cout << "Digite o salario da pessoa: ";
    cin >> salario;

       if (salario <= 1000.0){
      porcentagem = 20;
            }
        else{

            if (salario <= 3000.0){
            porcentagem = 15;

            }
        else{
            if (salario <= 8000.0){
                porcentagem = 10;
                }
        else{
                porcentagem = 5;
            }
        }
    }
   
   aumento = salario * porcentagem / 100;
   novosalario = salario + aumento;

   cout << "Novo salario = R$ " << novosalario << endl;
   cout << "Aumento = R$ " << aumento << endl;
   cout << "Porcentagem = " << porcentagem << "%" << endl;

}

