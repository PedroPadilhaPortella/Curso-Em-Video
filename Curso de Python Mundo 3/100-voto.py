from datetime import date

def voto(ano):
    atual = date.today().year
    idade = atual - ano
    voto = ''
    if(idade < 16):
        voto = "não pode votar"
    elif(idade >= 16 and idade < 18 or idade > 65):
        voto = "pode votar"
    else:
        voto = "deve votar"
    return f"Sua idade é {idade} anos e você {voto}."


idade = int(input("Qual seu ano de nascimento? "))
print(voto(idade))