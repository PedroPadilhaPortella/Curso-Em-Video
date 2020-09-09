from datetime import date

nome = input("Nome: ")
nascimento = int(input("Ano de nascimento:"))
atual = date.today().year
idade = atual - nascimento
categoria = 'none'

if(idade > 5 and idade <= 9):
    categoria = 'Mirim'
elif(idade > 9 and idade <= 14):
    categoria = 'Infantil'
elif(idade > 14 and idade <= 19):
    categoria = 'Junior'
elif(idade > 19 and idade <= 25):
    categoria = 'senior'
elif(idade > 25):
    categoria = 'master'
else:
    categoria = 'Inválida'

print("A categoria de {} é {}".format(nome, categoria))