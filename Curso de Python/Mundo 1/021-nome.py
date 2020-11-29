nome = str(input('Qual seu nome? ')).strip()
nomes = nome.split()
print("Seu primeiro nome e {}".format(nomes[0]))
print('Seu ultimo nome e {}'.format(nomes[len(nomes) - 1]))
