import random
number = random.randint(1, 10)

player_name = input("Hi, What's your name? ")
no_of_guess = 0
print('Okay! ' + player_name + " I'm guessing a number between 1 to 10." )

while no_of_guess < 5:
    print('Take a guess')
    guess = int(input())
    no_of_guess += 1
    if guess < number:
        print('Your guess is too low. Try again!')
    if guess > number:
        print('Your guess is too high. Try again!')
    if guess == number:
        break

if guess == number:
    print('You guessed the number in ' + str(no_of_guess) + ' tries!')
else:
    print('You did not guess the number, The number was ' + str(no_of_guess))