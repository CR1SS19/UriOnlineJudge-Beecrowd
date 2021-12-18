A, B, C = input().split()
D, E, F = input().split()

valor1 = int(B) * float(C)
valor2 = int(E) * float(F)

total = float(valor1) + float(valor2)

print('VALOR A PAGAR: R$ {:.2f}'.format(total))
