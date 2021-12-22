#include <stdio.h>

int main(){

    float n1, n2, n3, n4, m, ne, mf;

    scanf("%f %f %f %f", &n1, &n2, &n3, &n4);
    m = (n1*2 + n2*3 + n3*4 + n4*1)/10;

    printf("Media: %.1f\n", m);

    if(m>=7.0){
        printf("Aluno aprovado.\n");
    }
    if(m<5.0){
        printf("Aluno reprovado.\n");
    }
    if(m>=5.0 && m<=6.9){
        printf("Aluno em exame.\n");
        scanf("%f", &ne);
        printf("Nota do exame: %.1f\n", ne);
        mf = (m + ne) / 2;

        if(mf>=5.0){
            printf("Aluno aprovado.\n");
        }else{
            printf("Aluno reprovado.\n");
        }
        printf("Media final: %.1f\n", mf);
    }

    return 0;
}