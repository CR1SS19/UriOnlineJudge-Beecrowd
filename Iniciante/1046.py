I, F = input().split()

I = int(I)
F = int(F)

if(I == F):
    print('O JOGO DUROU 24 HORA(S)')
elif(I > F):
    print(f'O JOGO DUROU {(24-I)+F} HORA(S)')
else:
    print(f'O JOGO DUROU {F-I} HORA(S)')
