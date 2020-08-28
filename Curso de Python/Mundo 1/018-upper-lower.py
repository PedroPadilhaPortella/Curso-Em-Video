nome = str(input("Qual seu nome?"))
print("Seu nome maisuculo é {}".format(nome.upper()))
print("Seu nome minusculo é {}".format(nome.lower()))
print("Seu nome tem {} caracteres".format(len(nome) - nome.count(' ')))
array = nome.split(' ')
print("Seu primeiro nome é {} e tem {} letas".format(array[0], len(array[0])))

