#include <stdio.h>

int main(){

  double X;

  scanf("%lf", &X);
  printf("VOLUME = %.3f\n", (4.0/3.0) * 3.14159 * X*X*X);

  return 0;
}
