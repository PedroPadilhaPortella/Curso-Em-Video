lista = list()

for i in range(0, 5):
    n = int(input("Digite um valor: "))
    if(i == 0 or n > lista[-1]):
        lista.append(n)
        print("Adicionado ao final da lista")
    else:
        posicao = 0
        while(posicao < len(lista)):
            if(n <= lista[posicao]):
                lista.insert(posicao, n)
                print("Adicionado na posição {}".format(posicao))
                break
            posicao += 1
print(lista)
