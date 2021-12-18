A, B, C = input().split()

tri = (float(A) * float(C)) / 2
cir = 3.14159 * float(C)**2
tra = ((float(A) + float(B)) * float(C)) / 2
qua = float(B)**2
ret = float(A) * float(B)

print('TRIANGULO: {:.3f}'.format(tri) + '\nCIRCULO: {:.3f}'.format(cir) + '\nTRAPEZIO: {:.3f}'.format(tra) + '\nQUADRADO: {:.3f}'.format(qua) + '\nRETANGULO: {:.3f}'.format(ret))
