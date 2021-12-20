X1, Y1 = input().split()
X2, Y2 = input().split()

dis = ((float(X2) - float(X1))**2 + (float(Y2) - float(Y1))**2)**0.5

print(f'{dis:.4f}')
