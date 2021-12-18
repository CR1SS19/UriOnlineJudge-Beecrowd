#include <stdio.h>

int main(){

  int N, H;
  float V;

  scanf("%d %d %f", &N, &H, &V);
  printf("NUMBER = %d\nSALARY = U$ %.2f\n", N, H * V);

  return 0;
}
