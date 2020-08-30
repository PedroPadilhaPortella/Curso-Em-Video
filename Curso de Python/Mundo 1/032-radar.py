vel = int(input('Qual velocidade você está? '))
if vel > 80:
    print('MULTADO! Você excedeu o limite de 80kn/h')
    multa = (vel - 80) * 7
    print('Você deve pagar uma multa de R${:.2f}!'.format(multa))
print('Tenha um bom dia! Dirija com segurança!')
