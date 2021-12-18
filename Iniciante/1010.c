#include <stdio.h>

int main() {

  int A, B, C, D;
  double X, Y;

  scanf("%d %d %lf %d %d %lf", &A, &B, &X, &C, &D, &Y);
  printf("VALOR A PAGAR: R$ %.2f\n", B*X + D*Y);

  return 0;
}
