N1, N2, N3, N4 = input().split()

N1 = float(N1)
N2 = float(N2)
N3 = float(N3)
N4 = float(N4)

M = ((N1*2)+(N2*3)+(N3*4)+(N4*1)) / 10

print(f'Media: {M:.1f}')

if(M>=7.0):
    print('Aluno aprovado.')

if(M<5.0):
    print('Aluno reprovado.')

if(M>=5.0 and M<=6.9):
    print('Aluno em exame.')
    NE = float(input())
    print(f'Nota do exame: {NE:.1f}')
    MF = (M + NE) / 2
    
    if(MF>=5.0):
        print('Aluno aprovado.')
    else:
        print('Aluno reprovado.')
    print(f'Media final: {MF:.1f}')
