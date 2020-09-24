from random import randint
from time import sleep

aleatorio = randint(0, 10)
palpites = 0
acertou = False

print('Tente pensar no mesmo numero que eu, entre 0 e 10....')

while(not acertou):
    numero = int(input("Sua Tentativa? "))
    palpites += 1

    if(numero > 10 or numero < 0):
        print("Esse numero não vale, ele tem que ser entre 0 e 10!")
    else:
        if( numero == aleatorio):
            acertou = True
        else:
            if(numero < aleatorio):
                print("Errou.Talvez seja um numero maior...")
            else:
                print("Errou. Talvez seja um numero menor...")

print("Acertou!\nPrecisou de {} tentativas".format(palpites))
