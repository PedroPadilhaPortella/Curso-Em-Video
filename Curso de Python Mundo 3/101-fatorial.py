def fatorial(n, show = False):
    '''
    ->Calcular o fatorial de um numero
    :param n: numero
    :param show: boolen para mostrar ou nao as iteracoes
    '''
    f = 1
    for c in range(n, 0, -1):
        if(show):
            print(c, end="")
            if(c > 1):
                print(" x ", end = "")
            else:
                print(" = ", end="")
        f *= c
    return f

help(fatorial)
print(fatorial(3, True))