#include <bits/stdc++.h>

using namespace std;

int main(){

    float glicose;

    cout << "Digite a media da glicose: ";
    cin >> glicose;

    if(glicose <= 100.0){
        cout << "Seu nivel de glicose esta NORMAL!";
    }else if(glicose <= 140.0){
        cout << "Seu nivel de glicose esta um pouco ELEVADO!";
    }else{
        cout << "Seu nivel de glicose esta classificado como DIABETES!!!";
    }
}