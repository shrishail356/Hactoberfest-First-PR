import pandas as pd 
import numpy as np
from  sklearn.metrics import accuracy_score
from sklearn.datasets import load_iris
import xgboost
import tkinter.font as font

from tkinter import messagebox


data=load_iris()

df=pd.DataFrame(data['data'],columns=data["feature_names"])

x=df.copy()
y=pd.DataFrame(data["target"])
y.columns=['targets']

y=np.array(y).reshape(-1,1)

model1=xgboost.XGBClassifier()
model1.fit(x,y.ravel())



limits=[]

for i in range(4):
	maximum=df.iloc[:,i].max()
	minimum=df.iloc[:,i].min()
	dual=(minimum,maximum)
	limits.append(dual)
							


from tkinter import *

def  prediction(a,b,c,d,model=model1,column=data['feature_names'],targets=data['target_names']):
	array=pd.DataFrame([[a,b,c,d]],columns=column)
	pred=model1.predict(array)
	if pred==0:
		return targets[0]
	if pred==1:
		return targets[1]
	if pred==2:
		return targets[2]
	if pred==3:
		return targets[3]

root=Tk()
root.title('PREDICTOR')

root.geometry('400x300')
myfont=font.Font(weight='bold',size=25)

fram1=Frame(root,bg='green').pack(side=TOP,fill=BOTH,expand=YES)

fram2=Frame(root,bg='yellow').pack(side=BOTTOM,fill=BOTH,expand=YES)

fram3=Frame(fram2,bg='red').pack(side=TOP,fill=BOTH,expand=YES)

fram4=Frame(fram2).pack(side=BOTTOM,fill=BOTH,expand=YES)

fram5=Frame(fram2).pack(fill=BOTH,expand=YES)


label1=Label(fram1,text='IRIS DATA PREDICTION',fg='red').pack(side=TOP,fill=BOTH,expand=YES)


label2=Label(fram4,text='sepal length:-{}' .format( limits[0])).pack()
entry1=Entry(fram4,bd=5)

entry1.pack(expand=YES)
label3=Label(fram4,text='sepal width:-{}'.format(limits[1])).pack(expand=YES)
entry2=Entry(fram4,bd=5)

entry2.pack(expand=YES)
label4=Label(fram4,text='petal length:-{}'.format(limits[2])).pack(expand=YES)
entry3=Entry(fram4,bd=5)

entry3.pack(expand=YES)
label5=Label(fram4,text='petal width:-{}'.format(limits[3])).pack(expand=YES)
entry4=Entry(fram4,bd=5)

entry4.pack(expand=YES)

def onclick():
	a=float(entry1.get())
	b=float(entry2.get())
	c=float(entry3.get())
	d=float(entry4.get())
	messagebox.showinfo('predictions',message=prediction(a,b,c,d))


	
button=Button(fram5,text='predict',command=onclick,fg='red').pack(expand=YES)


root.mainloop()
