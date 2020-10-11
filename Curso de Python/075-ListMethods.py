comidas = ['pizza', 'suco', 'cookie', 'pastel', 'chocolate']
comidas.append('Hotdog')
comidas.insert(2, 'sorvete')
print(comidas)
print(len(comidas))
comidas.pop()
comidas.pop(1)
del comidas[0]
comidas.remove('sorvete')

if('pizza' in comidas):
    comidas.remove('pizza')
else:
    print("Não tem pizza!")

print(comidas)

numeros = list(range(0, 20, 2))
print(numeros)
valores = [6, 3, 7, 2, 1, 9]
valores.sort()
valores.sort(reverse=True)
print(valores)
