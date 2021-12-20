A, B, C = input().split()

MAIOR = (int(A) + int(B) + abs(int(A) - int(B))) / 2
MAIOR = (MAIOR + int(C) + abs(MAIOR - int(C))) / 2

print(f'{int(MAIOR)} eh o maior')
