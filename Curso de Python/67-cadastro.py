maior18 = 0
masc = 0
novinha = 0


while(True):
    sexo = input("Sexo [m/f]: ").lower()
    idade = int(input("Idade: "))
    if(sexo == 'm'):
        masc += 1
    if(sexo == 'f' and idade >= 20):
        novinha += 1
    if(idade >= 18):
        maior18 += 1
    resp = input("Quer continuar [s/n]? ").lower()
    if(resp == 'n'):
        break

print(f"Maiores de 18: {maior18}")
print(f"Homens: {masc}")
print(f"Mulheres maiores de 20: {novinha}")