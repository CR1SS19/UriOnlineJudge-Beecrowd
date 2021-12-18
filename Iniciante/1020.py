idade = int(input())

a = idade // 365
m = idade % 365 // 30
d = idade % 365 % 30 

print(f'{a} ano(s)\n' + f'{m} mes(es)\n' + f'{d} dia(s)')
