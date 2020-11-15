from datetime import datetime


dados = dict()
dados['nome'] = input('Nome: ')
nasc = int(input('Ano Nascimento: '))
dados['idade'] = datetime.now().year - nasc
dados['ctps'] = int(input("Carteira de Trabalho [0 = não tem]: "))

if(dados['ctps'] != 0):
    dados['contratação'] = int(input('Ano de Contratação: '))
    dados['salario'] = float(input('Salário Atual: '))
    dados['aposentadoria'] = dados['idade'] + ((dados['contratação'] + 35) - datetime.now().year)

for k, v in dados.items():
    print(f'{k} tem o valor {v}')