# coding: utf-8
print('Escolha uma Conversao de temperatura:')
escolha = str(input('Celcius -> Fahrenheit [CF]\nFahrenheit -> Celcius [FC]\n__'))
temperatura = int(input("Qual a temperatura?"))

if escolha == 'FC':
    celcius = fahrenheitToCelcius(temperatura)
    print("A temperatura de {}° fahrenheit é de {}° celcius".format(temperatura, celcius))
elif escolha == 'CF':
    fahrenheit = celciusToFahrenheit(temperatura)
    print("A temperatura de {}° celcius é de {}° fahrenheit".format(temperatura, fahrenheit))
else:
    print("Conversão Inválida")

def celciusToFahrenheit(temperatura):
    return ((temperatura * 9) / 5) + 32

def fahrenheitToCelcius(temperatura):
    return ((temperatura - 32) * (5/9))