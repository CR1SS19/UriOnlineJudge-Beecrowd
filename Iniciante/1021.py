V  = float(input())

cem = V // 100
rest1 = V % 100

cinq = rest1 // 50
rest2 = rest1 % 50

vinte = rest2 // 20
rest3 = rest2 % 20

dez = rest3 // 10
rest4 = rest3 % 10

cinco = rest4 // 5
rest5 = rest4 % 5

dois = rest5 // 2
rest6 = rest5 % 2

#comentado as poha das moedas 

um = rest6 // 1
rest7 = rest6 % 1

cinqcent = (rest7*100) // 50
rest8 = (rest7*100) % 50

vintecent = rest8 // 25
rest9 = rest8 % 25

dezcent = rest9 // 10
rest10 = rest9 % 10

cincocent = rest10 // 5
rest11 = rest10 % 5

umcent = rest11 // 1

print('NOTAS:')
print(f'{cem:.0f} nota(s) de R$ 100.00')
print(f'{cinq:.0f} nota(s) de R$ 50.00')
print(f'{vinte:.0f} nota(s) de R$ 20.00')
print(f'{dez:.0f} nota(s) de R$ 10.00')
print(f'{cinco:.0f} nota(s) de R$ 5.00')
print(f'{dois:.0f} nota(s) de R$ 2.00')
print('MOEDAS:')
print(f'{um:.0f} moeda(s) de R$ 1.00')
print(f'{cinqcent:.0f} moeda(s) de R$ 0.50')
print(f'{vintecent:.0f} moeda(s) de R$ 0.25')
print(f'{dezcent:.0f} moeda(s) de R$ 0.10')
print(f'{cincocent:.0f} moeda(s) de R$ 0.05')
print(f'{umcent:.0f} moeda(s) de R$ 0.01')
