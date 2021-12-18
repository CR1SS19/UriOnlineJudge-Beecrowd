C, Q = input().split()

C = int(C)
Q = int(Q)

if(C==1):
    V = Q * 4.00
    print(f'Total: R$ {V:.2f}')
elif(C==2):
    V = Q * 4.50
    print(f'Total: R$ {V:.2f}')
elif(C==3):
    V = Q * 5.00
    print(f'Total: R$ {V:.2f}')
elif(C==4):
    V = Q * 2.00
    print(f'Total: R$ {V:.2f}')
elif(C==5):
    V = Q * 1.50
    print(f'Total: R$ {V:.2f}')
