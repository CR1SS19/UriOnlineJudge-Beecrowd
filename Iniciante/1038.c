#include <stdio.h>

int main(){

    int c, q;
    float v;

    scanf("%d %d", &c, &q);

    if(c==1){
        v = q * 4.00;
        printf("Total: R$ %.2f\n", v);
    }else if(c==2){
        v = q * 4.50;
        printf("Total: R$ %.2f\n", v);
    }else if(c==3){
        v = q * 5.00;
        printf("Total: R$ %.2f\n", v);
    }else if(c==4){
        v = q * 2.00;
        printf("Total: R$ %.2f\n", v);
    }else if(c==5){
        v = q * 1.50;
        printf("Total: R$ %.2f\n", v);
    }

    return 0;
}