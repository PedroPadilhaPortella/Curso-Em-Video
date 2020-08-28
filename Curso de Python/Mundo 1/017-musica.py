import pygame

pygame.init()
pygame.mixer.music.load('letodie.mp3')
print("Letodie Pontes e Muros")
pygame.mixer.music.play()
pygame.event.wait()