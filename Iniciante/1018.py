V = int(input())

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

um = rest6 // 1

print(f'{V}')
print(f'{cem} nota(s) de R$ 100,00')
print(f'{cinq} nota(s) de R$ 50,00')
print(f'{vinte} nota(s) de R$ 20,00')
print(f'{dez} nota(s) de R$ 10,00')
print(f'{cinco} nota(s) de R$ 5,00')
print(f'{dois} nota(s) de R$ 2,00')
print(f'{um} nota(s) de R$ 1,00')
