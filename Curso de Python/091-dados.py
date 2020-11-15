from random import randint
from time import sleep
from operator import itemgetter

jogo = {
    'pedro': randint(1, 6),
    'bunhak': randint(1, 6),
    'casalli': randint(1, 6),
    'vini': randint(1, 6)}
rank = dict()
print("Valores Sorteados:")
for key, value in jogo.items():
    print(f"O {key} tirou {value} no dado")
    sleep(1)

rank = sorted(jogo.items(), key = itemgetter(1), reverse = True)
print("-="*30)
print("Rank dos Jogadores\n")
for indice, value in enumerate(rank):
    print(f"{indice + 1}° Lugar: {value[0]} com {value[1]} pontos")
    sleep(1)