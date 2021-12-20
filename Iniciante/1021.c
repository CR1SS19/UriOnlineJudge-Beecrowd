#include <stdio.h>

int main()
{

    double valor;
    int n, m, x, y;

    scanf("%lf", &valor);

    m = valor * 100;
    n = (int)valor;

    printf("NOTAS:\n");
    printf("%d nota(s) de R$ 100.00\n", n / 100);
    x = n % 100;
    printf("%d nota(s) de R$ 50.00\n", x / 50);
    x = x % 50;
    printf("%d nota(s) de R$ 20.00\n", x / 20);
    x = x % 20;
    printf("%d nota(s) de R$ 10.00\n", x / 10);
    x = x % 10;
    printf("%d nota(s) de R$ 5.00\n", x / 5);
    x = x % 5;
    printf("%d nota(s) de R$ 2.00\n", x / 2);
    x = x % 2;

    printf("MOEDAS:\n");
    printf("%d moeda(s) de R$ 1.00\n", x);
    y = m % 100;
    printf("%d moeda(s) de R$ 0.50\n", y / 50);
    y = y % 50;
    printf("%d moeda(s) de R$ 0.25\n", y / 25);
    y = y % 25;
    printf("%d moeda(s) de R$ 0.10\n", y / 10);
    y = y % 10;
    printf("%d moeda(s) de R$ 0.05\n", y / 5);
    y = y % 5;
    printf("%d moeda(s) de R$ 0.01\n", y);

    return 0;
}