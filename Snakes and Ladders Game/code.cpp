#include <bits\stdc++.h>
#include <iostream>
#include <conio.h>
#include <cstdlib>
#include <stdio.h>
#include <ctime>

void draw_line(int n, char ch);
void board();
void gamescore(char name1[], char name2[], int p1, int p2);
void play_dice(int & score);

int main()
{
    int player1 = 0, player2 = 0, lastposition;
    char player1name[80], player2name[80];
    
    
    draw_line(50, '=');
    std::cout<< "\n\n\n\n\t\tSNAKE LADDER GAME\n\n\n\n";
    draw_line(50, '=');
    std::cout<< "\n\n\nEnter Name of player 1 :";
    gets(player1name);
    std::cout<< "\n\nEnter Name of player 2 :";
    gets(player2name);
    while (player1 <= 100 && player2 <= 100) 
	{
        board();
        gamescore(player1name, player2name, player1, player2);
        std::cout<< "\n\n--->" << player1name << " Now your Turn >> Press any key to play ";
        getch();
        lastposition = player1;
        play_dice(player1);
        if (player1 < lastposition)
            std::cout<< "\n\aOops!! Snake found !! You are at postion " << player1 << "\n";
        else if (player1 > lastposition + 6)
            std::cout<< "\nGreat!! you got a ladder !! You are at position " << player1;
            std::cout<< "\n\n--->" << player2name << " Now your Turn >> Press any key to play ";
        getch();
        lastposition = player2;
        play_dice(player2);
        if (player2 < lastposition)
            std::cout<< "\n\n\aOops!! Snake found !! You are at position " << player2 << "\n";
        else if (player2 > lastposition + 6)
            std::cout<< "\n\nGreat!! you got a ladder !! You are at position " << player2 << "\n";
        getch();
    }
    
    std::cout<< "\n\n\n";
    draw_line(50, '+');
    std::cout<< "\n\n\t\tRESULT\n\n";
    draw_line(50, '+');
    std::cout<<std::endl;
    gamescore(player1name, player2name, player1, player2);
    std::cout<< "\n\n\n";
    if (player1 >= player2)
        std::cout<< player1name << " !! You are the winner of the game\n\n";
    else
        std::cout<< player2name << " !! You are the winner of the game\n\n";
    draw_line(50, '+');
    getch();
}
void draw_line(int n, char ch) 
{
    for (int i = 0; i < n; i++)
        std::cout<< ch;
}

void board() 
{
    
    std::cout<< "\n\n";
    draw_line(50, '-');
    std::cout<< "\n\t\tSNAKE AT POSITION\n";
    draw_line(50, '-');
    std::cout<< "\n\tFrom 98 to 28 \n\tFrom 95 to 24\n\tFrom 92 to 51\n\tFrom 83 to 19\n\tFrom 73 to 1\n\tFrom 69 to 33\n\tFrom 64 to 36\n\tFrom 59 to 17\n\tFrom 55 to 7\n\tFrom 52 to 11\n\tFrom 48 to 9\n\tFrom 46 to 5\n\tFrom 44 to 22\n\n";
    draw_line(50, '-');
    std::cout<< "\n\t\t LADDER AT POSITION\n";
    draw_line(50, '-');
    std::cout<< "\n\tFrom 8 to 26\n\tFrom 21 to 82\n\tFrom 43 to 77\n\tFrom 50 to 91\n\tFrom 62 to 96\n\tFrom 66 to 87\n\tFrom 80 to 100\n";
    draw_line(50, '-');
    std::cout<<std::endl;
}

void gamescore(char name1[], char name2[], int p1, int p2) 
{
    std::cout<< "\n";
    draw_line(50, '~');
    std::cout<< "\n\t\tGAME STATUS\n";
    draw_line(50, '~');
    std::cout<< "\n\t--->" << name1 << " is at position " << p1 << std::endl;
    std::cout<< "\t--->" << name2 << " is at position " << p2 << std::endl;
    draw_line(50, '_');
    std::cout<<std::endl;
}

int dice()
{
    for (int counter = 0; counter < 2; counter++)
    {
      srand(time(NULL));
      for (int i = 0; i <6; i++)
        {
          std::cout<< rand()% 6+1 <<std::endl;
          return rand()%6+1;
        }
    }      
}

void play_dice(int &score) 
{
    int d;
    d=dice();
    std::cout<< "\nYou got " << d << " Point !! ";
    score = score + d;
    std::cout<< "Now you are at position " << score;
    switch (score) 
	{
    case 98:
        score = 28;
        break;
    case 95:
        score = 24;
        break;
    case 92:
        score = 51;
        break;
    case 83:
        score = 19;
        break;
    case 73:
        score = 1;
        break;
    case 69:
        score = 33;
        break;
    case 64:
        score = 36;
        break;
    case 59:
        score = 17;
        break;
    case 55:
        score = 7;
        break;
    case 52:
        score = 11;
        break;
    case 48:
        score = 9;
        break;
    case 46:
        score = 5;
        break;
    case 44:
        score = 22;
        break;
    case 8:
        score = 26;
        break;
    case 21:
        score = 82;
        break;
    case 43:
        score = 77;
        break;
    case 50:
        score = 91;
        break;
    case 54:
        score = 93;
        break;
    case 62:
        score = 96;
        break;
    case 66:
        score = 87;
        break;
    case 80:
        score = 100;
    }
}