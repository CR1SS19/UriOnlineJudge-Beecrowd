#include <stdio.h>

int main()
{

    int N, X;

    scanf("%d", &N);
    printf("%d\n", N);
    printf("%d nota(s) de R$ 100,00\n", N / 100);
    X = N % 100;
    printf("%d nota(s) de R$ 50,00\n", X / 50);
    X = X % 50;
    printf("%d nota(s) de R$ 20,00\n", X / 20);
    X = X % 20;
    printf("%d nota(s) de R$ 10,00\n", X / 10);
    X = X % 10;
    printf("%d nota(s) de R$ 5,00\n", X / 5);
    X = X % 5;
    printf("%d nota(s) de R$ 2,00\n", X / 2);
    X = X % 2;
    printf("%d nota(s) de R$ 1,00\n", X / 1);

    return 0;
}