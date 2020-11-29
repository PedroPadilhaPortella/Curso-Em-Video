frase = input("Digite uma frase: ").strip().upper()
palavras = frase.split()
junto = ''.join(palavras)
inverso = ''

for letra in range(len(junto) -1, -1 , -1):
    inverso += junto[letra]

print(inverso)

if(inverso == junto):
    print("É um Palindromo")
else:
    print("Não é um Palindromo")

inverso = junto[::-1]
print("O inverso de {} é {}".format(frase, inverso))

# APOS A SOPA
# A SACADA DA CASA
# A TORRE DA DERROTA
# O LOBO AMA O BOLO
# ANOTARAM A DATA DA MARATONA.