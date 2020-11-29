distancia = int(input("Qual a distancia em kms da viagem?"))

preco = distancia * 0.5 if distancia <= 200 else distancia * 0.45

print("A viagem de {} kms vai custar {} reais".format(distancia, preco))
print('Boa Viagem!!')
