#include <stdio.h>
#include <math.h>

int main()
{

    float X1, Y1, X2, Y2;

    scanf("%f %f %f %f", &X1, &Y1, &X2, &Y2);
    printf("%.4f\n", sqrt(pow((X2 - X1), 2) + pow((Y2 - Y1), 2)));

    return 0;
}