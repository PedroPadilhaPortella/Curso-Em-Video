def FindVogais(palavras, vogais):
    for palavra in palavras:
        print(f"Na palavra {palavra} temos", end=" ")
        for letra in palavra:
            if(letra.lower() in 'aáàãâeéêioóõôu'):
                print(letra, end='')
        print('')


vogais = ('a', 'e', 'i', 'o', 'u')
palavras = ('Viajar', 'Elegante', 'Animal', 'Carro', 'Brasileiro', 'Abacate', 'Otorrinolaringologista', 'pneumoultramicroscopicossilicovulcanoconiótico')
FindVogais(palavras, vogais)