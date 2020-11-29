import moeda

preco = float(input("Digite um preco: R$ "))

print("A metade de {} é {}".format(moeda.moeda(preco), moeda.metade(preco, True)))
print("O dobro de {} é {}".format(moeda.moeda(preco), moeda.dobro(preco, True)))
print("Aumentando o preco em 10%, temos o total de {}".format(moeda.aumentar(preco, 10, True)))
print("Diminuindo o preco em 50%, temos o total de {}".format(moeda.diminuir(preco, 50, True)))

