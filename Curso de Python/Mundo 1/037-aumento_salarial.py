salario = int(input("Salario: "))

if(salario <= 1250):
    salarioAjustado = salario + salario * 0.15
elif(salario > 1250):
    salarioAjustado = salario + salario * 0.1

print("Seu salario ajustado será: R${:.2f}".format(salarioAjustado))