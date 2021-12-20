A, B, C = input().split()
D, E, F = input().split()

valor1 = int(B) * float(C)
valor2 = int(E) * float(F)

total = float(valor1) + float(valor2)

print(f'VALOR A PAGAR: R$ {total:.2f}')
