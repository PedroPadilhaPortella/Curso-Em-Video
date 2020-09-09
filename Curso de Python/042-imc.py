import math


altura = float(input("Altura (m): "))
peso = float(input("Peso (kg): "))

imc = peso / math.pow(altura, 2)
print("Seu IMC é {:.2f}".format(imc))

if(imc < 18.5):
    print("Abaixo do peso")
elif(imc >= 18.5 and imc < 25):
    print("Normal")
elif(imc >= 25 and imc < 30):
    print("Sobrepeso")
elif(imc >= 30 and imc < 40):
    print("Obesidade")
else:
    print("Obesidade mórbida")