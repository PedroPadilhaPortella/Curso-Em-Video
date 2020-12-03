total = 0
soma = 0
for i in range(1, 500):
    if(i % 3 == 0 and i % 2 != 0):
        total += 1 
        soma += i

print("Soma dos {} numeros impares multiplos de 3 é {}".format(total, soma))