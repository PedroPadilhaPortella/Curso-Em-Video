import moeda

preco = float(input("Digite um preco: R$ "))

print("A metade de R${} é R${}".format(preco, moeda.metade(preco)))
print("O dobro de R${} é R${}".format(preco, moeda.dobro(preco)))
print("Aumentando o preco em 10%, temos o total de R${}".format(moeda.aumentar(preco, 10)))
print("Diminuindo o preco em 50%, temos o total de R${}".format(moeda.diminuir(preco, 50)))