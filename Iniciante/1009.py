nome = input()
salario = input()
vendas = input()
bonus = (15 * float(vendas)) / 100
total = float(salario) + float(bonus)

print('TOTAL = R$ {:.2f}'.format(total))
