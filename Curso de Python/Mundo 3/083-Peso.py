temp = []
princ = []
max = min = 0

while True:
    temp.append(str(input("Nome: ")))
    temp.append(float(input("Peso: ")))

    if(len(princ) == 0):
        max = min = temp[1]
    else:
        if(temp[1] > max):
            max = temp[1]
        if(temp[1] < min):
            min = temp[1]
    princ.append(temp[:])
    temp.clear()

    resp = input("Quer continuar? [S/N]: ")
    if resp in "Nn":
        break
print("Os dados foram: {}".format(princ))
print(f"{len(princ)} pessoas foram cadastradas.")
print(f"Maior Peso: {max}, Menor peso: {min}")
