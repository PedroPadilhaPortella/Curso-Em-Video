pessoa = {'nome': 'pedro', 'sexo': 'masculino', 'idade': 19, 'cidade': 'São Paulo'}
print(f"{pessoa['nome']} tem {pessoa['idade']} e mora em {pessoa['cidade']}.")

print(pessoa.keys(), pessoa.values(), pessoa.items())

for key, value in pessoa.items():
    print(f"O {key} é {value}")

del pessoa['sexo']
pessoa.popitem() #remove o ultimo
pessoa.pop('idade')
pessoa['peso'] = 76.5

print(pessoa)