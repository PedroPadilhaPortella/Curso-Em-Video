print("NUBANK")
valor = int(input("Quanto será sacado? "))
ced = 50
total = valor
totcedula = 0
while(True):
    if(total >= ced):
        total -= ced
        totcedula += 1
    else:
        if(totcedula > 0):
            print(f"Total de {totcedula} cedulas de R${ced}")
        if(ced == 50):
            ced = 20
        elif(ced == 20):
            ced = 10
        elif(ced == 10):
            ced = 1
        totcedula = 0
        if(total == 0):
            break