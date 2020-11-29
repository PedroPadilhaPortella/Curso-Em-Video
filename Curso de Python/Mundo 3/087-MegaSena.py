from random import randint


def sortear(i):
    cont = 0
    lista = list()
    while True:
        x = randint(1, 60)
        if(x not in lista):
            lista.append(x)
            cont += 1
        if(cont >= 6):
            break
    lista.sort()
    print(f"Jogo {i}: {lista}")

print("-"*20, "MegaSena", "-"*30)
n = int(input("Quantos jogos você quer que eu sorteie? "))
for i in range(1, n + 1):
    sortear(i)
print("-"*30, "\nBoa Sorte!")