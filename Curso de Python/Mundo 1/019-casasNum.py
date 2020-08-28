num = int(input('Digite um número: '))
u = num // 1 % 10
d = num // 10 % 10
c = num // 100 % 10
m = num // 1000 % 10
print('Analisando o numero {}...'.format(num))
print('Unidade {}'.format(u))
print('Dezena {}'.format(d))
print('Centena {}'.format(c))
print('Milhar {}'.format(m))

valor = str(input('Digite um número de quatro digitos:'))
if len(valor) < 4:
    print('A sua unidade é: {}'.format(valor[3]))
    print('A sua dezena é: {}'.format(valor[2]))
    print('A sua centena é: {}'.format(valor[1]))
    print('E seu milhar é: {}'.format(valor[0]))
else:
    print("O valor não tem 4 digitos")
