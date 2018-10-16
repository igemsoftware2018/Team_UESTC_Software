import numpy as np
import csv
import matplotlib.pyplot as plt
from sklearn.linear_model import LogisticRegression
from sklearn.linear_model import LogisticRegressionCV
from sklearn.pipeline import Pipeline
from sklearn.preprocessing import PolynomialFeatures
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import GridSearchCV
from sklearn.cross_validation import train_test_split
from mpl_toolkits.mplot3d import Axes3D

data_train=np.loadtxt("newtrainning.csv",delimiter=',',skiprows=1,usecols=(11,9,10,12))
data_val=np.loadtxt("exa_filt.csv",delimiter=',',skiprows=1,usecols=(11,9,10))
prediction=open("log_reg_predict.csv",'w',newline="")
writer=csv.writer(prediction)
X=data_train[:,:3]
X_val=data_val[:]
Y=data_train[:,3:]
Y=Y.flatten().astype(int)

#3d scatter plot
def plot_3d(x,y,z,c='black',alpha=0.4,s=10):
    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')  # Create a 3D drawing project
    #  Divide data points into three parts, distinguish colors
    ax.scatter(x, y, z, c=c, alpha=alpha, s=s)  # Draw data points

    ax.set_xlabel('pident')
    ax.set_ylabel('int_evalue')
    ax.set_zlabel('pqlen')
    plt.show()

#Non-cross-validated logistic regression with polynomial features
def PolymomialLogreg(degree,C,penalty='l1',solver='liblinear'):
    return Pipeline([
        ('poly',PolynomialFeatures(degree=degree)),
        ('std_scaler',StandardScaler()),
        ('log_reg',LogisticRegression(C=C,penalty=penalty,solver=solver))
    ])

#training
def train_model(X,Y,degree=6,C=1):
    poly_log_reg=PolymomialLogreg(degree=6,C=1)
    poly_log_reg.fit(X,Y)
    score=poly_log_reg.score(X,Y)
    print(score)
    return poly_log_reg

model=train_model(X,Y,degree=3,C=0.44)

#prediction
def predicting(model=model,X=X_val):
    pre=model.predict(X)
    return pre
pre=predicting()

#write the prediction result into file
def result_writing(pre):
    val_list = open(r"C:\Users\ASUS\Desktop\blast_model\training_examples\results\exa_filt.csv").readlines()
    i = 0
    f = 0
    for item in val_list:
        item = item.strip("\n")
        item = item.split(",")
    #    print(item)
        if f == 0:
            f = 1
            item.append("label")
        else:
            item.append(pre[i])
            i += 1
        # writer.writerow(item)

#Draw the prediction result scatter plot
def plt_prediction(pre=pre,X_val=X_val):
    pre=pre.reshape(-1,1)
    labeled_out=np.concatenate((X_val,pre),axis=1)
    X_tr=labeled_out[labeled_out[:,3]==1,:]
    X_fal=labeled_out[labeled_out[:,3]==0,:]
    print(len(X_tr))
    print(len(X_fal))

    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')  # Create a 3D drawing project
    ax.scatter(X_tr[:,0],X_tr[:,1],X_tr[:,2],c='g',alpha=0.6,s=20)
    ax.scatter(X_fal[:,0],X_fal[:,1],X_fal[:,2],c='r',alpha=0.6,s=20)
    ax.set_xlabel('pident')
    ax.set_ylabel('int_evalue')
    ax.set_zlabel('pqlen')
    plt.show()

# plt_prediction()

#Display decision boundaries by even random points
def decision_bondery_randpoint(model=model,num=10000):
    x=np.random.uniform(20,100,(num,1))
    y=np.random.uniform(6,190,(num,1))
    z=np.random.uniform(0.1,1.1,(num,1))
    X_rand=np.concatenate((x,y),axis=1)
    X_rand=np.concatenate((X_rand,z),axis=1)

    pre=model.predict(X_rand)
    pre=pre.reshape(-1,1)
    labeled_out=np.concatenate((X_rand,pre),axis=1)

    X_tr=labeled_out[labeled_out[:,3]==1,:]
    X_fal=labeled_out[labeled_out[:,3]==0,:]
    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')  # Create a 3D drawing project
    ax.scatter(X_tr[:,0],X_tr[:,1],X_tr[:,2],c='g',alpha=0.6,s=20)
    ax.scatter(X_fal[:,0],X_fal[:,1],X_fal[:,2],c='r',alpha=0.6,s=20)
    ax.set_xlabel('pident')
    ax.set_ylabel('int_evalue')
    ax.set_zlabel('pqlen')
    plt.show()

decision_bondery_randpoint(num=50000)
