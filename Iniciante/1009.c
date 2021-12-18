#include <stdio.h>

int main(){

  char nome[20];
  double A, B;

  scanf("%s %lf %lf", &nome, &A, &B);
  printf("TOTAL = R$ %.2f\n", (0.15 * B) + A);

  return 0;
}
