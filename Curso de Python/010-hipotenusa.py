co = float(input("Digite o vallor do Cateto Oposto:"))
ca = float(input("Digite o vallor do Cateto Adjacente:"))
hyp = ((co ** 2) + (ca ** 2)) ** (1/2)
print("A hipotenusa é {:.2f}".format(hyp))

from math import hypot
co = float(input('Comprimento do cateto oposto: '))
ca = float(input('Qual o comprimento do cateto adjacente: '))
h = hypot(co,ca)
print('A hipotenusa vai medir {:.2f}'.format(h))

import math
co = float(input('Comprimento do cateto oposto: '))
ca = float(input('Qual o comprimento do cateto adjacente: '))
h = math.hypot(co, ca)
print('A hipotenusa vai medir {:.2f}'.format(h))