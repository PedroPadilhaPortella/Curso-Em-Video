def area(l, c):
    return l * c


l = float(input("Calcular a area de um terreno\nLargura do terreno: "))
c = float(input("Comprimento do terreno: "))

a = area(l, c)
print("A area de um terreno com largura de {} m e comprimento de {} m é de {:.2f} m2".format(l, c ,a))