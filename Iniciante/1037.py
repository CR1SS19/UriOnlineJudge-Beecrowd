V = float(input())

if(V>=0 and V<=25):
    print('Intervalo [0,25]')
elif(V>25 and V<=50):
    print('Intervalo (25,50]')
elif(V>50 and V<=75):
    print('Intervalo (50,75]')
elif(V>75 and V<=100):
    print('Intervalo (75,100]')
elif(V<=0 or V>100):
    print('Fora de intervalo')
