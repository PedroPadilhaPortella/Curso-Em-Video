from random import randint
from time import sleep

def somarPares(array):
    """
    -> Faz a soma dos valores pares de um array numérico
    :param array: array de inteiros
    """
    pares = 0
    for i in array:
        if(i % 2 == 0):
            pares += i
    return pares

def sortear(n):
    """
    -> Gera uma lista com n inteiros aleatorios e retorna um array
    :param n: quantidade de valores aleatorios a serem gerados
    """
    lista = list()
    for i in range(0, n):
        a = randint(1, 10)
        lista.append(a)
    return lista


valores = sortear(7)
for i in valores:
    sleep(0.4)
    print(i, flush=True, end="  ")
print("\nA soma dos elementos pares é igual a {}".format(somarPares(valores)))

help(somarPares)
help(sortear)