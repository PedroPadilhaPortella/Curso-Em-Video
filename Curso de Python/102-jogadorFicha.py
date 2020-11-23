def ficha(nome = "<desconhecido>", gols = 0):
    print(f"O jogador {nome} fez {gols} gols.")



n = input("Nome do jogador: ")
g = input(f"Numero de gols do jogador {n}: ")

if(g.isnumeric()):
    g =  int(g)
else:
    g = 0

if(n.strip() == ''):
    ficha(gols = g)
else:
    ficha(n, g)
