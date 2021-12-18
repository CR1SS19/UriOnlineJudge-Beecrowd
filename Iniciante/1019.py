valor = int(input())

h = valor // 60 // 60
m = valor // 60 % 60
s = valor % 60

print(f'{h}:{m}:{s}')
