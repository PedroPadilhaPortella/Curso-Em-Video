soma = numeros = n = 0
n = int(input('Digite um numero [999 para sair]: '))
while(n != 999):
    soma += n
    numeros += 1
    n = int(input('Digite um numero [999 para sair]: '))

print("Voce digitou {} numeros".format(numeros))
print("A soma deles foi {}".format(soma))