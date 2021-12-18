S = float(input())

if(S >= 0 and S <= 400.00):
    PR = (15 * S) / 100
    print(f'Novo salario: {S+PR:.2f}\nReajuste ganho: {PR:.2f}\nEm percentual: 15 %')
elif(S >= 400.01 and S <= 800.00):
    PR = (12 * S) / 100
    print(f'Novo salario: {S+PR:.2f}\nReajuste ganho: {PR:.2f}\nEm percentual: 12 %')
elif(S >= 800.01 and S <= 1200.00):
    PR = (10 * S) / 100
    print(f'Novo salario: {S+PR:.2f}\nReajuste ganho: {PR:.2f}\nEm percentual: 10 %')
elif(S >= 1200.01 and S <= 2000.00):
    PR = (7 * S) / 100
    print(f'Novo salario: {S+PR:.2f}\nReajuste ganho: {PR:.2f}\nEm percentual: 7 %')
elif(S > 2000.00):
    PR = (4 * S) / 100
    print(f'Novo salario: {S+PR:.2f}\nReajuste ganho: {PR:.2f}\nEm percentual: 4 %')
