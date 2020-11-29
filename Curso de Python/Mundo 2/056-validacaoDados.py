sexo = input("Digite seu sexo [M/F]: ").strip().upper()[0]
while sexo not in "mMfF":
    sexo = input("Dados Inválidos!\nDigite seu sexo novamente [M/F]: ").strip().upper()[0]
print(f"Sexo '{sexo}' registrado!")