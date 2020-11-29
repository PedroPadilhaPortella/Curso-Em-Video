def notas(*n, sit = False):
    '''
    -> Funcao para mostrar dados das notas de alunos
    :param n: lista com as notas dos alunos
    :param sit: opcao para mostrar ou não a situação do aluno
    :return: um dicionario com o total de notas, maior e menor nota, media e situacao opcional
    '''
    r = dict()
    r['total'] = len(n)
    r['maior'] = max(n)
    r['menor'] = min(n)
    r['media'] = sum(n) / len(n)
    if(sit):
        if(r['media'] >= 7):
            r['situacao'] = 'Boa'
        elif(r['media'] >= 5):
            r['situacao'] = 'Razoavel'
        else:
            r['situacao'] = 'Ruim'
    return r


n = notas(5.5, 3.4, 7, 3.3, sit=True)
print(n)
help(notas)