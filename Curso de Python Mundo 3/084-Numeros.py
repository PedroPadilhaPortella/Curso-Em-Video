lista = [[], []]
valor = 0

for i in range(0, 7):
    valor = int(input(f"Valor {i}:"))
    if(valor % 2 == 0):
        lista[0].append(valor)
    else:
        lista[1].append(valor)

lista[0].sort()
lista[1].sort()

print("Pares:{}".format(lista[0]))
print("Impares:{}".format(lista[1]))