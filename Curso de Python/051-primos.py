cont = 0
num = int(input("Digite um Número: "))

for c in range(1, num + 1):
    if(num % c == 0):
        print('\033[33m', end='')
        cont += 1
    else:
        print('\033[31m', end='')
    print(c, end=' ')
print('\n\033[34mO número {} foi dividido {} vezes\033[m'.format(num, cont))
if cont == 2:
        print('E por isso ele é PRIMO!')
else:
        print('E por isso ele NÃO É PRIMO')