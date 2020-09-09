from random import randint
from time import sleep

print('Tente pensar no mesmo numero entre 0 e 5....')
numero = int(input(":: "))
aleatorio = randint(0, 5)

if(numero > 5 or numero < 0):
    print("Esse numero não vale, ele tem que ser entre 0 e 5!")
    exit()

print('Analizando...')
sleep(1)
print('...huuummm...')
sleep(1)

if( numero == aleatorio):
    print("Nós pensamos no mesmo Numero, {}, Parabéns!".format(numero))
else:
    print("Errouu!! Não pensamos no mesmo numero, eu pensei em {} e voce em {}".format(numero, aleatorio))