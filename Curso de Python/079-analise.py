lista = []

while True:
    lista.append(int(input("Adicionar novo valor: ")))
    teste = input("Quer continuar? [s/n] ")[0]
    if(teste == 'n'):
        break
lista.sort(reverse=True)
print(f"\nVocê digitou {len(lista)} elementos")
print(f"Lista Decrescente: {lista}")
if 5 in lista:
    print("5 está na lista")
else:
    print("5 não está na lista")