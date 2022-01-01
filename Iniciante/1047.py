hi, mi, hf, mf = list(map(int, input().split()))

duracao = ((hf*60)+mf)-((hi*60)+mi)
if(duracao <= 0):
    duracao += 24*60
    
print(f'O JOGO DUROU {duracao//60} HORA(S) E {duracao%60} MINUTO(S)')