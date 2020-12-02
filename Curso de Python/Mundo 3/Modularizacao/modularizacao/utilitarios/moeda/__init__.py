def aumentar(preco, taxa, formatar = False):
    """
    -> Aumenta o valor de um float com base em uma taxa em Porcentagem
    :param preco: (Obrigatorio) Preco sobre o qual sera calculado o aumento
    :param taxa: (Obrigatorio) Taxa em Porcentagem sobre o qual o preço vai aumentar
    :param formatar: Incluir formatacao de UTF-8
    :return: preco + (preco * taxa / 100)
    """
    res = preco + (preco * taxa / 100)
    return res if formatar is False else moeda(res)


def diminuir(preco, taxa, formatar = False):
    """
    -> Diminuir o valor de um float com base em uma taxa em Porcentagem
    :param preco: (Obrigatorio) Preco sobre o qual sera calculado o aumento
    :param taxa: (Obrigatorio) Taxa em Porcentagem sobre o qual o preço vai diminuir
    :param formatar: Incluir formatacao de UTF-8
    :return: preco - (preco * taxa / 100)
    """
    res = preco - (preco * taxa / 100)
    return res if formatar is False else moeda(res)


def dobro(preco, formatar = False):
    """
    -> Dobrar o preco
    :param preco: (Obrigatorio) Preco a ser dobrado
    :param formatar: Incluir formatacao de UTF-8
    :return: preco * 2
    """
    res =  preco * 2
    return res if formatar is False else moeda(res)


def metade(preco, formatar = False):
    """
    -> Dividir o preco por 2
    :param preco: (Obrigatorio) Preco a ser dividido por 2
    :param formatar: Incluir formatacao de UTF-8
    :return: preco / 2
    """
    res = preco / 2
    return res if formatar is False else moeda(res)


def moeda(preco, moeda = 'R$'):
    """
    -> Formatar moeda para UTF-8 encoding, adicionado R$ e ',' nos valores
    :param preco: Valor Numerico
    :param moeda: Formato monetário
    :return: string
    """
    return f"{moeda}{preco:.2f}".replace('.', ',')

def resumo(preco, taxaAumento = 10, taxaReducao = 50):
    print('-'*30)
    print("RESUMO DO VALOR".center(30))
    print('-'*30)
    print("Preco Analisado: {}".format(moeda(preco)))
    print("Metade: {}".format(metade(preco, True)))
    print("Dobro: {}".format(dobro(preco, True)))
    print("Aumento em 10%: {}".format(aumentar(preco, taxaAumento, True))) 
    print("Desconto de 50%: {}".format(diminuir(preco, taxaReducao, True)))