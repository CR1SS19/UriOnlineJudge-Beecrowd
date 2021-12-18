V = input().split()
V = list(map(float,V))

A, B, C = sorted(V)[::-1]

con = True

if(A >= B+C):
    print('NAO FORMA TRIANGULO')
    con = False

if(A**2 == (B**2) + (C**2) and con):
    print('TRIANGULO RETANGULO')
if(A**2 > (B**2) + (C**2) and con):
    print('TRIANGULO OBTUSANGULO')
if(A**2 < (B**2) + (C**2) and con):
    print('TRIANGULO ACUTANGULO')
if(A == B and B == C and con):
    print('TRIANGULO EQUILATERO')
if((A == B or B == C) and not (A == B and B == C) and con):
    print('TRIANGULO ISOSCELES')
