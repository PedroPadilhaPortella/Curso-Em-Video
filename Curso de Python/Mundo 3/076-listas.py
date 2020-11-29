valores = list()
maior = menor = 0
for i in range(0, 5):
    valores.append(int(input(f"Valor {i}: ")))
    if(i == 0):
        maior = menor = valores[i]
    else:
        if(valores[i] > maior):
            maior = valores[i]
        if(valores[i] < menor):
            menor = valores[i]
print(valores)
print(f"O maior valor foi {maior}")
print(f"O menor valor foi {menor}")