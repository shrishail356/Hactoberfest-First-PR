// Frequency of each number in array
#include <stdio.h>
int find(int a[],int );
int main()
{
  int cases,i,x,case1,j;
  scanf("%d",&cases);
  for(i=0;i<cases;i++){
    scanf("%d",&case1);
    int a[case1];
    for(j=0;j<case1;j++){
      scanf("%d",&a[j]);
	}
    x=find(a,case1);
    printf("%d\n",x);
  }
}
int find(int a[],int case1){
  int i,c=0,temp=0,j,num=0;
  for(i=0;i<case1;i++){
    for(j=0;j<case1;j++){
      if(a[i]==a[j]){
        c++;
      }
    }
    if(c>temp){
      num=a[i];
      temp=c;
    }
    if(c==temp){
      if(a[i]<num){
        num=a[i];
        temp=c;
      }
    }
    c=0;
  }
  return num;
}
