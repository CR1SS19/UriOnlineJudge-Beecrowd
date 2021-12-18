S = float(input())

if(S <= 2000.00):
    print('Isento')
elif(S >= 2000.01 and S <= 3000.00):
    IR = (S - 2000.00) * 0.08
    print(f'R$ {IR:.2f}')
elif(S >= 3000.01 and S <= 4500.00):
    IR = ((S - 3000.00) * 0.18) + 80.00
    print(f'R$ {IR:.2f}')
elif(S > 4500.00):
    IR = ((S - 4500.00) * 0.28) + 350.00
    print(f'R$ {IR:.2f}')
