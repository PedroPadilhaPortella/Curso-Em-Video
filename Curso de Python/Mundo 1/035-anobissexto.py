from datetime import date

ano = int(input('Insira um ano para saber se ele é bissexot: '))

if(ano == 0):
    ano = date.today().year

if(ano % 4 == 0 and ano % 100 != 0 or ano % 400 == 0):
    validacao = 'é bissexto!'
else:
    validacao = 'não é bissexto!'

print("O ano de {} {}".format(ano, validacao))