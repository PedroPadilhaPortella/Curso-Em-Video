lista = []

while True:
    lista.append(int(input("Adicionar novo valor: ")))
    teste = input("Quer continuar? [s/n] ")
    if(teste in 'nN'):
        break

print(lista)

pares = []
impares = []
for i, n in enumerate(lista):
    if(n % 2 == 0):
        pares.append(n)
    else:
        impares.append(n)

print(f"Pares: {pares}")
print(f"Pares: {impares}")
