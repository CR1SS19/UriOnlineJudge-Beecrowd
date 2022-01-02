#include <stdio.h>

int main(){

    float s, per;

    scanf("%f", &s);

    if(s >= 0 && s <= 400.00){
        per = (15 * s) / 100;
        printf("Novo salario: %.2f\nReajuste ganho: %.2f\nEm percentual: 15 %%\n", s+per, per);
    }else if(s >= 400.01 && s <= 800.00){
        per = (12 * s) / 100;
        printf("Novo salario: %.2f\nReajuste ganho: %.2f\nEm percentual: 12 %%\n", s+per, per);
    }else if(s >= 800.01 && s <= 1200.00){
        per = (10 * s) / 100;
        printf("Novo salario: %.2f\nReajuste ganho: %.2f\nEm percentual: 10 %%\n", s+per, per);
    }else if(s >= 1200.01 && s <= 2000.00){
        per = (7 * s) / 100;
        printf("Novo salario: %.2f\nReajuste ganho: %.2f\nEm percentual: 7 %%\n", s+per, per);
    }else if(s > 2000.00){
        per = (4 * s) / 100;
        printf("Novo salario: %.2f\nReajuste ganho: %.2f\nEm percentual: 4 %%\n", s+per, per);
    }

    return 0;
}