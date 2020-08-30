# reduce
from functools import reduce

lista = [1, 4, 6, 2, 9]

def soma(x, y):
    return x + y

soma  = reduce(soma, lista)

print(soma)