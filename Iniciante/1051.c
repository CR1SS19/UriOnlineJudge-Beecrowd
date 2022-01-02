#include <stdio.h>

int main(){

    float s, ir;

    scanf("%f", &s);

    if(s <= 2000.00){
        printf("Isento\n");
    }else if(s >= 2000.01 && s <= 3000.00){
        ir = (s - 2000.00) * 0.08;
        printf("R$ %.2f\n", ir);
    }else if(s >= 3000.01 && s <= 4500.00){
        ir = ((s - 3000.00) * 0.18) + 80.00;
        printf("R$ %.2f\n", ir);
    }else if(s > 4500.00){
        ir = ((s - 4500.00) * 0.28) + 350.00;
        printf("R$ %.2f\n", ir);
    }

    return 0;
}