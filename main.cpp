#include <iostream>

using namespace std;
class Queue
{
private:
    int arr[10]= {0};
    int start=0;
    int endv=0;
public:
    void enQueue(int a)
    {

        //int j=1;
        if(start<11)
        {
            arr[start]=a;
            //cout<<arr[start]<<endl;
            start++;
        }
        else
            cout<<"Reached last Limit"<<endl;
    }
    void deQueue()
    {
        if(start==0)
        {
            cout<<"No value!"<<endl;
        }
        else
        {
            arr[endv]=0;
            for(int i=endv ; i<start ; i++)
            {
                arr[i]=arr[i+1];
            }

        }



    }
    void peekTop()
    {
        cout<<arr[endv]<<endl;

    }
    void clearQueue()
    {
        for(int j=0 ; j<11 ; j++)
        {
            arr[j]= {0};

        }
           start=0;
           endv=0;
        cout<<"All Data is Deleted!"<<endl;
    }

    void displayAll()
    {
        for(int j=0 ; j<10 ; j++)
        {
            cout<<' '<<arr[j]<<' ';

        }
        cout<<endl;
    }



};

class Stack
{
private:
    int arry[10]= {0};
    int top=0;
    int last=9;
public:
    void pushArray(int a)
    {
        if(last>=0)
        {
            arry[last]=a;
            top=last;
            last--;


        }
        else
            cout<<"Reached top of value!"<<endl;
    }
    void popArray()
    {
        if(arry[top]!=0)
        {
            arry[top]=0;
            top++;
            last++;
        }
        else if(arry[top]==0)
            cout<<"Array is Empty!"<<endl;
    }

    void topPeek()
    {
        cout<<arry[top]<<endl;

    }
    void clearStack()
    {
        for(int j=0 ; j<11 ; j++)
        {
            arry[j]= {0};
        }
            top=0;
            last=0;
        cout<<"All Data is deleted!"<<endl;
    }

    void displayAll()
    {
        for(int z=0 ; z < 10 ; z++)
        {
            cout<<arry[z]<<endl;

        }
    }




};
class Circular
{
private:
    int arry[10]= {0};
    int start=0;
    int endv=0;
public:
    void add(int a)
    {

         if(start<10)
        {
            arry[start]=a;
            start++;
        }
        else if(start>=10 && endv>0)

        {
            start=0;
            arry[start]=a;
            start++;

        }


        //if(arry[endv]!=0)
       else
        {
            cout<<"Queue is Full!"<<endl;
        }

    }

    void display()
    {
        for(int a=0 ; a<10 ; a++)
        {

            cout<<arry[a]<<' ';

        }
        cout<<endl;
    }


    void removeValue()
    {
        if(endv<10)
        {
            arry[endv]=0;
            endv++;
        }
        else if(endv>9 && start>0)
        {
            endv = 0;
            arry[endv]= 0;
            endv++;


        }
          //  if(arry[endv]==0)
        else
        {

            cout<<"NO data to remove!"<<endl;
        }
    }
    void clearAll()
    {

        for(int b=0 ; b<9 ; b++)
        {
            arry[b]=0;

        }
        start=0;
        endv=0;
        cout<<"All Data is deleted!"<<endl;
    }
};
int main()
{
    Queue q;
    Stack s;
    Circular c;
    c.display();
    c.add(33);
    c.add(23);
    c.add(22);
    c.add(11);
    c.add(23);
    c.add(66);
    c.add(77);
    c.add(33);
    c.add(99);
    c.add(66);
    c.add(75);
    c.display();
    c.removeValue();
    c.removeValue();
    c.removeValue();
    c.display();
    c.add(45);
    c.display();
    c.removeValue();
    c.display();
    int w;

    do
    {
        cout<<"------------QUEUE_STACK_MENU------------"<<endl;
        cout<<"press 1 to Inqueue in Queue!"<<endl;
        cout<<"press 2 to Dequeue from Queue!"<<endl;
        cout<<"press 3 to PeekTop!"<<endl;
        cout<<"press 4 to Clear Queue!"<<endl;
        cout<<"press 5 to Display all in Queue!"<<endl;
        cout<<"_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-"<<endl;
        cout<<"press 6 to Push in Stack!"<<endl;
        cout<<"press 7 to Pop from Stack!"<<endl;
        cout<<"Press 8 to Top peek in stack!"<<endl;
        cout<<"Press 9 to Clear Stack!"<<endl;
        cout<<"Press 10 to Display all Stack!"<<endl;
        cout<<"_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-"<<endl;
        cout<<"Press 11 to add in Circular Queue!"<<endl;
        cout<<"press 12 to remove from Circular Queue!"<<endl;
        cout<<"press 13 to clear all!"<<endl;
        cout<<"press 14 to display All in circular queue!"<<endl;
        cin>>w;
        switch (w)
        {
        case 1:
            int x;
            cout<<"Enter the value you want to add in Queue!"<<endl;
            cin>>x;
            q.enQueue(x);

            break;
        case 2:

            q.deQueue();
            break;
        case 3:
            q.peekTop();

            break;
        case 4:
            q.clearQueue();
            break;
        case 5:
            q.displayAll();

            break;
        case 6:
            int y;
            cout<<"Enter any number to add in stack!"<<endl;
            cin>>y;
            s.pushArray(y);

            break;
        case 7:
            s.popArray();
            break;
        case 8:
            s.topPeek();

            break;
        case 9:

            s.clearStack();
            break;
        case 10:
            s.displayAll();

            break;
        case 11:
            int st;
            cout<<"Enter any Number to enter!"<<endl;
            cin>>st;
            c.add(st);
            break;
        case 12:
            c.removeValue();

            break;
        case 13:

            c.clearAll();

            break;

        case 14:

            c.display();

            break;
        default:
            cout<<"Unkown Command!!!"<<endl;
            break;
        }
        cout<<"If you want to close the program press 0 otherwise press 1!"<<endl;
        cin>>w;
    }
    while(w!=0);
    return 0;
}
