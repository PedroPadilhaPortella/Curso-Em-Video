ficha = list()

while True:
    nome = input("Nome: ")
    nota1 = float(input("Nota1: "))
    nota2 = float(input("Nota1: "))
    media = (nota1 + nota2) / 2
    ficha.append([nome, [nota1, nota2], media])

    loop = input("Salvar Novo Aluno[s/n]? ")
    if(loop in "Nn"):
        break
print("-"*50)
print(f'N°    Nome:        Média:\n{"-"*30}')

for i, a in enumerate(ficha):
    print(f'{i:<4}{a[0]:<10}{a[2]:>8.1f}')
    # print(f"{i}     {a[0]}      {a[2]}")

while True:
    opc = int(input("\n mostrar notas de qual aluno? [digite 999 para sair]: "))
    if opc == 999:
        print("Finalizando....")
        break
    if opc <= len(ficha) -1:
        print(f"As notas de {ficha[opc][0]} são {ficha[opc][1]}")