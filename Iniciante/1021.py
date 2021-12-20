N = float(input())

cem = N // 100
x = N % 100
cinq = x // 50
x = x % 50
vinte = x // 20
x = x % 20
dez = x // 10
x = x % 10
cinco = x // 5
x = x % 5
dois = x // 2
x = x % 2
um = x

M = int(N*100)

y = M % 100
cinqcent = y // 50
y = y % 50
vintecent = y // 25
y = y % 25
dezcent = y // 10
y = y % 10
cincocent = y // 5
y = y % 5
umcent = y

print('NOTAS:')
print(f'{int(cem)} nota(s) de R$ 100.00')
print(f'{int(cinq)} nota(s) de R$ 50.00')
print(f'{int(vinte)} nota(s) de R$ 20.00')
print(f'{int(dez)} nota(s) de R$ 10.00')
print(f'{int(cinco)} nota(s) de R$ 5.00')
print(f'{int(dois)} nota(s) de R$ 2.00')
print('MOEDAS:')
print(f'{int(um)} moeda(s) de R$ 1.00')
print(f'{int(cinqcent)} moeda(s) de R$ 0.50')
print(f'{int(vintecent)} moeda(s) de R$ 0.25')
print(f'{int(dezcent)} moeda(s) de R$ 0.10')
print(f'{int(cincocent)} moeda(s) de R$ 0.05')
print(f'{int(umcent)} moeda(s) de R$ 0.01')
