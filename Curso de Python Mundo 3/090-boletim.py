ficha = {}

ficha['nome'] = input('Nome: ')
ficha['nota'] = float(input('Média: '))
if(ficha['nota'] >= 6.0):
    ficha['situacao'] = 'Aprovado'
else:
    ficha['situacao'] = 'Reprovado'

print(f"Nome do Aluno: {ficha['nome']}\nMédia: {ficha['nota']}\nSituação: {ficha['situacao']}")