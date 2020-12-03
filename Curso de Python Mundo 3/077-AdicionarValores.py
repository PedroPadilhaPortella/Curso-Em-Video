array = list()
while(True):
    n = int(input("Digite um valor: "))
    if(n in array):
        print("Valor Duplicado!")
    else:
        array.append(n)
        print('Valor adicionado com sucesso!')
    teste = input("Quer continuar [s/n]: ").lower()
    if(teste == "n"):
        break
array.sort()
print(f"Os valores digitados foram ", end="")
for i in array:
    print(f"{i} ", end=" ")