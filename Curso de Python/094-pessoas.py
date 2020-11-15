pessoa = dict()
pessoas = list()
soma = media = 0

while True:
    pessoa.clear()
    pessoa['nome'] = input("Nome: ")
    pessoa['idade'] = int(input("Idade: "))
    soma += pessoa['idade']
    while True:
        pessoa['sexo'] = input("Sexo [M/F]: ").upper()[0]
        if pessoa['sexo'] in "MmFf":
            break
        print("Erro, por favor, digite apenas M ou F.")
    
    pessoas.append(pessoa.copy())

    while True:
        resp = input("Quer continuar? [S/N]: ").upper()[0]
        if resp in "SsNn":
            break
        print("Erro, Responda apenas com S ou N.")
    
    if resp == 'N':
        break

print("-="*30)
print(f"Ao todos temos {len(pessoas)} pessoas.")
media = soma/len(pessoas)
print(f"A média das idades é {media:5.2f}")

print("As mulheres cadastradas foram ", end="")
for p in pessoas:
    if(p['sexo'] in 'Ff'):
        print(f"{p['nome']} " ,end='')

print("\nPessoas que estão acima da média de idade:")
for p in pessoas:
    if(p['idade'] > media):
        for k, v in p.items():
            print(f"{k} => {v}; ", end="")

print("\n\n<<Encerrando>>")