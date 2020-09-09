# map

def dobro(x):
    return x * 2

valor = [5, 7, -1, 0, 4]

dobrado = map(dobro, valor)
dobrado = list(dobrado)

print(dobrado)