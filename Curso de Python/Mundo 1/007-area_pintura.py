altura = float(input("Qual a altura da parede?"))
largura = float(input("Qual a largura da parede?"))
area = altura * largura
totalTinta = area / 2
print("Serão necessários {} litros de tinta para pintar a parede de {}m2".format(totalTinta, area))