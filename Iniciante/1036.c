#include <stdio.h>
#include <math.h>

int main(){

    double a, b, c, delta;

    scanf("%lf %lf %lf", &a, &b, &c);
    
    delta = pow(b, 2) -4.0*a*c;

    if(delta < 0 || a == 0){
        printf("Impossivel calcular\n");
    }else{
        printf("R1 = %.5f\nR2 = %.5f\n", (-b + sqrt(delta)) / (2.0 * a), (-b - sqrt(delta)) / (2.0 * a));
    }

    return 0;
}