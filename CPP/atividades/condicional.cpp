#include <iostream>

using namespace std;

int main(){
    
    int hora;
    int maior = false;

    while(maior == false){

        cout << "Digite uma hora: ";
        cin >> hora;

        if(hora < 12){
            cout << "Bom Dia Flor do Dia!" << endl;
        }

        else if(hora >= 12 && hora < 18){

            cout << "Boa Tarde!" << endl;    
        }

        else if(hora < 25){
            cout << "Boa Noite!" << endl;
        }

        else{
            cout << "Digite uma hora valida!";
            maior = true;
        }
    }             
}
