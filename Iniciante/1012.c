#include <stdio.h>

int main(){

  double A, B, C;

  scanf("%lf %lf %lf", &A, &B, &C);
  printf("TRIANGULO: %.3f\nCIRCULO: %.3f\nTRAPEZIO: %.3f\nQUADRADO: %.3f\nRETANGULO: %.3f\n", (A*C)/2, 3.14159*(C*C), ((A+B)*C)/2, B*B, A*B);

  return 0;
}
