soma = numeros = n = 0
while(True):
    n = int(input('Digite um numero [999 para sair]: '))
    if(n == 999):
        break
    soma += n
    numeros += 1

print("Voce digitou {} numeros".format(numeros))
print("A soma deles foi {}".format(soma))