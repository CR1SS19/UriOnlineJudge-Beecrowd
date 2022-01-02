#include <stdio.h>

int main(){

    int i, n;
    float x;

    n = 0;

    for(i = 1; i <= 6; i++){
    scanf("%f", &x);
        if(x > 0){
            n++;
        }
    }
    printf("%d valores positivos\n", n);

    return 0;
}