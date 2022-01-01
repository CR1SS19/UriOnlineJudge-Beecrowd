#include <stdio.h>

int main(){

    int hi, mi, hf, mf, duracao;

    scanf("%d %d %d %d", &hi, &mi, &hf, &mf);

    duracao = ((hf*60)+mf)-((hi*60)+mi);

    if(duracao <= 0){
        duracao += 24*60;
    }

    printf("O JOGO DUROU %d HORA(S) E %d MINUTO(S)\n", duracao/60, duracao%60);

    return 0;
}