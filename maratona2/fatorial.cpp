#include <bits/stdc++.h>

using namespace std;

int main(){

int n, fat;

    cout << "Digite o valor de N: ";
    cin >> n;

    fat = 1;

    for(int i = 1; i <= n; i++){

        fat = fat * i;
    }

    cout << "FATORIAL = " << fat;

}