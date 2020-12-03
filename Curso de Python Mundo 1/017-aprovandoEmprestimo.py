from cgi import print_form


casa = float(input("Qual o valor da casa? "))
salario = float(input("Qual seu salario?"))
anos = int(input("Quantos anos de financiamento?"))
prestacao = casa / (anos * 12)
minimo = salario * 30 / 100
print("Para pagar uma casa de R${:.2f} em {} anos, a prestação será de R${:.2f}".format(casa, anos, prestacao))
if(prestacao <= minimo):
    print("Emprestimo CONCEDIDO")
else:
    print("Emprestimo NEGADO")