#include <stdio.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h>
#include "forca.h"
#define TAMANHOPALAVRA 20
#define TEMPO 1

char palavrasecreta[TAMANHOPALAVRA];
char chutes[26];
int chutesdados = 0;

void loading() {

     system("cls");
     printf("\n\n\n\n\t\t\t      [_____]\n");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [_____] \n");                      
     printf("\n\t\t\t       Loading...");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [#____] \n");
     printf("\n\t\t\t       Loading...");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [##___] \n");
     printf("\n\t\t\t       Loading...");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [###__] \n");
     printf("\n\t\t\t       Loading...");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [####_] \n");
     printf("\n\t\t\t       Loading...");
     sleep(1);
     system("cls");
     printf("\n\n\n\n\t\t\t      [#####] \n");
     printf("\n\t\t\t       Complete.");
     sleep(1);
     system("cls");
     }

int ganhou(){
    for(int i = 0; i < strlen(palavrasecreta); i++){
        if(!jachutou(palavrasecreta[i])){
            return 0;
        }
    }
    return 1;
}

void abertura(){
    printf("/************************/\n");
    printf("/* Jogo de Forca */\n");
    printf("/************************/\n\n");
}

void chuta(){
    char chute;
    printf("Qual a letra? ");
    scanf(" %c", &chute);

    chutes[chutesdados] = chute;
    (chutesdados)++; 
} 

int jachutou (char letra){
    int achou = 0;
    for(int j = 0; j < chutesdados; j++){
            if(chutes[j] == letra){
                achou = 1;
                break;
        }
    }
                return achou;
} 
int letraexiste(char letra){

    for(int j = 0; j < strlen(palavrasecreta); j++){
        if(letra == palavrasecreta[j]){
            return 1;
        }
    }
    return 0;

}
int chuteserrados(){
    int erros = 0;
    for(int i = 0; i < chutesdados; i++){
        if(!letraexiste(chutes[i])){
         erros++;
        }
    }
            return erros;
}
int enforcou(){
    return chuteserrados() >= 5;
}

void desenhaforca(){
    int erros = chuteserrados();

    printf("  _______       \n");
    printf(" |/      |      \n");
    printf(" |      %c%c%c  \n", (erros>=1?'(':' '), (erros>=1?'_':' '), (erros>=1?')':' '));
    printf(" |      %c%c%c  \n", (erros>=3?'\\':' '), (erros>=2?'|':' '), (erros>=3?'/': ' '));
    printf(" |       %c     \n", (erros>=2?'|':' '));
    printf(" |      %c %c   \n", (erros>=4?'/':' '), (erros>=4?'\\':' '));
    printf(" |              \n");
    printf("_|___           \n");
    printf("\n\n");

    printf("Voce ja deu %d chutes\n", chutesdados);
        
    for(int i = 0; i < strlen(palavrasecreta); i++){
            int achou = 0;
        
      if(jachutou(palavrasecreta[i])){
          printf("%c ", palavrasecreta[i]);
     
      } else {
          printf("_ ");
        }
      }
          printf("\n");
}

void escolhepalavra(){
      FILE* f;
      f = fopen("palavras.txt", "r");
      if (f == 0){
          printf("Banco de dados não disponível\n\n");
          exit(1);
      }
      int qtddepalavras;
      fscanf(f, "%d", &qtddepalavras);
      srand(time(0));
      int randomico = rand() % qtddepalavras;
      for(int i =0; i <= randomico; i++){
          fscanf(f, "%s", palavrasecreta);
      }
      fclose(f);
}

void adicionapalavra(){

    char quer;

    printf("Voce deseja adicionar uma nova palavra no jogo (S/N)?");
    scanf(" %c", &quer);

    if(quer != 'S', 's'){
        char novapalavra[20];

        printf("Digite a nova palavra em letras maiusculas: ");
        scanf("%s", novapalavra);

        FILE* f ;
        f = fopen("palavras.txt", "r+");
        if(f == 0){
            printf("Banco de dados de palavras nao dispoveis\n\n");
            exit(1);
        }
        int qtd;
        fscanf(f, "%d",  &qtd);
        qtd++;
        fseek(f,0, SEEK_SET);
        fprintf(f, "%d", qtd);
        fseek(f, 0, SEEK_END);
        fprintf(f, "\n%s",novapalavra );
        fclose(f);
    }
}

int main(){
    loading();
    abertura();
    escolhepalavra();

    do{
        desenhaforca();
        chuta();

    } while(!ganhou() && !enforcou());
        if(ganhou()) {
        printf("\nParabens, voce ganhou!\n\n");

        printf("       ___________      \n");
        printf("      '._==_==_=_.'     \n");
        printf("      .-\\:      /-.    \n");
        printf("     | (|:.     |) |    \n");
        printf("      '-|:.     |-'     \n");
        printf("        \\::.    /      \n");
        printf("         '::. .'        \n");
        printf("           ) (          \n");
        printf("         _.' '._        \n");
        printf("        '-------'       \n\n");

    } else {
        printf("\nPuxa, voce foi enforcado!\n");
        printf("A palavra era **%s**\n\n", palavrasecreta);

        printf("    _______________         \n");
        printf("   /               \\       \n"); 
        printf("  /                 \\      \n");
        printf("//                   \\/\\  \n");
        printf("\\|   XXXX     XXXX   | /   \n");
        printf(" |   XXXX     XXXX   |/     \n");
        printf(" |   XXX       XXX   |      \n");
        printf(" |                   |      \n");
        printf(" \\__      XXX      __/     \n");
        printf("   |\\     XXX     /|       \n");
        printf("   | |           | |        \n");
        printf("   | I I I I I I I |        \n");
        printf("   |  I I I I I I  |        \n");
        printf("   \\_             _/       \n");
        printf("     \\_         _/         \n");
        printf("       \\_______/           \n");
        }
    adicionapalavra();
}