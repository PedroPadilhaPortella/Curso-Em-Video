try:
    a = int(input("Numerador: "))
    b = int(input("Denominador: "))
    r = a/b
except ZeroDivisionError:
    print("Não dá pra dividir por zero!")
except Exception as erro:
    print(f"O erro foi: {erro.__class__}")
else:
    print(f"O resultado é {r:.1f}")
finally:
    print("Volte sempre")