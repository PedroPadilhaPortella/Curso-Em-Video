nota1 = int(input("Qual sua primeira nota?"))
nota2 = int(input("Qual sua segunda nota?"))
trabalho = int(input("Qual a nota do trabalho?"))

media = ((nota1 * 4) + (nota2 * 4) + (trabalho * 2)) / 10

print("Sua média é {}".format(media), end = '>>>>>')

if(media >= 6):
    print('Aprovado')
elif(media < 6 and media >= 5):
    print('Recuperacao')
else:
    print("Reprovado")