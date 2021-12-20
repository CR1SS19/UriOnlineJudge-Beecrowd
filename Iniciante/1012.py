A, B, C = input().split()

tri = (float(A) * float(C)) / 2
cir = 3.14159 * float(C)**2
tra = ((float(A) + float(B)) * float(C)) / 2
qua = float(B)**2
ret = float(A) * float(B)

print(f'TRIANGULO: {tri:.3f}\nCIRCULO: {cir:.3f}\nTRAPEZIO: {tra:.3f}\nQUADRADO: {qua:.3f}\nRETANGULO: {ret:.3f}')
