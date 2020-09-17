olderName = ''
older = 0
sumAges = 0
youngWomen = 0
for pessoa in range(1, 5):
    print(f"-----{pessoa} PESSOA-----")
    nome = input(f"Nome da Pessoa {pessoa}: ")
    idade = int(input(f"Idade da Pessoa {pessoa}: "))
    sexo = input(f"Sexo da Pessoa {pessoa} [M/F]: ").strip().upper()
    sumAges += idade
    if(idade > older and sexo == 'M'):
        older = idade
        olderName = nome
    if(sexo == 'F' and idade <= 20):
        youngWomen += 1
avgAges = sumAges / 4
print("Mais Velho: {}, com {} anos".format(olderName, older))
print("Media das Idades: {}".format(avgAges))
print("Quantidade de mulheres com menos de 20 anos: {}".format(youngWomen))