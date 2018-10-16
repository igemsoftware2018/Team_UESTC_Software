import numpy as np
from sklearn import svm
import matplotlib.pyplot as plt
from mpl_toolkits.mplot3d import Axes3D
from sklearn.linear_model import LogisticRegression
from sklearn.linear_model import LogisticRegressionCV
from sklearn.pipeline import Pipeline
from sklearn.preprocessing import PolynomialFeatures
from sklearn.preprocessing import StandardScaler
from sklearn.model_selection import GridSearchCV
from sklearn.cross_validation import train_test_split
from sklearn.model_selection import StratifiedKFold
from sklearn.metrics import roc_curve, auc
from scipy import interp


data_train=np.loadtxt("newtrainning.csv",delimiter=',',skiprows=1,usecols=(11,9,10,12))
X = data_train[:, :3]
Y = data_train[:, 3]
Y = Y.flatten().astype(int)
print(len(X))

# logistic regression classifier with polynomial features using sklearn pipline
def PolymomialLogreg(degree,C,penalty='l1',solver='liblinear'):
    return Pipeline([
        ('poly',PolynomialFeatures(degree=degree)),
        ('std_scaler',StandardScaler()),
        ('log_reg',LogisticRegression(C=C,penalty=penalty,solver=solver))
    ])


# logistic regression classifier with polynomial features and cross validation using sklearn pipline
def PolymomialLogregCV(degree,Cs=20,cv=3,penalty='l1',solver='liblinear'):
    return Pipeline([
        ('poly',PolynomialFeatures(degree=degree)),
        ('std_scaler',StandardScaler()),
        ('log_reg',LogisticRegressionCV(Cs=Cs,cv=cv,penalty=penalty,solver=solver))
    ])

# grid search to find optimal parameters
def gs_logreg_cv(X=X,Y=Y,degmax=20,Crange=3,fold=3):

    # preprocessing
    # X_train,X_test,Y_train,Y_test = train_test_split(X,Y,test_size=0.33)
    length=len(X)
    node1=int(1*length/3)
    node2=int(2*length/3)
    X_train1 = X[:node2, :]
    Y_train1 = Y[:node2]
    X_test1 = X[node2:, :]
    Y_test1 = Y[node2:]
    X_train2 = X[node1:, :]
    Y_train2 = Y[node1:]
    X_test2 = X[:node1, :]
    Y_test2 = Y[:node1]
    X_train3 = np.concatenate([X_test2, X_test1])
    Y_train3 = np.concatenate([Y_test2, Y_test1])
    X_test3 = X[node1:node2, :]
    Y_test3 = Y[node1:node2]


    best_score=0
    degree_set=np.arange(1,degmax,1)
    C_set=np.logspace(-Crange,Crange,40,base=2)
    print(C_set)
    best_C=1
    best_deg=5
    best_penalty='null'

#grid search
    for i in range(0,2):
        if i == 0:
            penalty='l1'
        else:
            penalty='l2'
        for degree in degree_set:
            pf=PolynomialFeatures(degree)
            std=StandardScaler()

            #dataset1
            pf_train1=pf.fit(X_train1)
            pf_test1=pf.fit(X_test1)
            X_train1_poly=pf_train1.transform(X_train1)
            X_test1_poly=pf_test1.transform(X_test1)
            std_train1=std.fit(X_train1_poly)
            X_train1_fi=std_train1.transform(X_train1_poly)
            std_test1 = std.fit(X_test1_poly)
            X_test1_fi=std_test1.transform(X_test1_poly)

            #dataset2
            pf_train2 = pf.fit(X_train2)
            pf_test2 = pf.fit(X_test2)
            X_train2_poly = pf_train2.transform(X_train2)
            X_test2_poly = pf_test2.transform(X_test2)
            std_train2 = std.fit(X_train2_poly)
            X_train2_fi = std_train2.transform(X_train2_poly)
            std_test2 = std.fit(X_test2_poly)
            X_test2_fi = std_test2.transform(X_test2_poly)

            #dataset3
            pf_train3 = pf.fit(X_train3)
            pf_test3 = pf.fit(X_test3)
            X_train3_poly = pf_train3.transform(X_train3)
            X_test3_poly = pf_test3.transform(X_test3)
            std_train3 = std.fit(X_train3_poly)
            X_train3_fi = std_train3.transform(X_train3_poly)
            std_test3 = std.fit(X_test3_poly)
            X_test3_fi = std_test3.transform(X_test3_poly)

            for C in C_set:
                log_reg=LogisticRegression(penalty=penalty,C=C,solver='liblinear')
                log_reg.fit(X_train1_fi,Y_train1)
                score1=log_reg.score(X_test1_fi,Y_test1)
                log_reg.fit(X_train2_fi, Y_train2)
                score2 = log_reg.score(X_test2_fi, Y_test2)
                log_reg.fit(X_train3_fi, Y_train3)
                score3 = log_reg.score(X_test3_fi, Y_test3)

                score=(score1+score2+score3)/3
                if score>best_score:
                    best_score=score
                    best_C=C
                    best_deg=degree
                    best_penalty=penalty
                print('[ degree:{},C:{},penalty:{},score:{} ]'.format(degree,C,penalty,score))

    print(count)
    print('[ best_degree:{} best_C:{}   best_score:{}  best_penalty:{} ]'.format(best_deg,best_C,best_score,best_penalty))


# gs_logreg_cv(degmax=10,Crange=2)

#3d scatter plot
def plot_3d(x,y,z,pro,c='black',alpha=0.8,s=10):
    pro.scatter(x, y, z, c=c, alpha=alpha, s=s)  # Draw data points
    # ax.scatter(x[w == 1,0], y[w == 1,0], z[w == 1,0], c='g',alpha=0.4,s=10)  # Draw data points

#k-fold cross validation using PolymomialLogregCV
def log_cv(degree=5,penalty='l1',C=1,X=X,Y=Y):
    log_reg = PolymomialLogregCV(degree)
    clc=log_reg.fit(X,Y)
    pre_pra=clc.predict_proba(X_val)#X_val[0]=0,X_val[1]=1

    score=clc.score(X,Y)
    print(score)
    count=0
    for num in pre_pra[:,1]:
        if num>0.5:
            count+=1
    print(count)

# roc curve
def roc_plt(X=X,Y=Y):
    skf = StratifiedKFold(n_splits=3)
    cv=skf.split(X,Y)
    classifierLG=PolymomialLogreg(degree=3,C=0.44)
    classifierSVM = svm.SVC(C=1.4, gamma=8.0, probability=True)
    mean_tpr_LG =mean_tpr_SVM= 0.0
    mean_fpr_LG =mean_fpr_SVM=np.linspace(0, 1, 100)


    for i, (train, test) in enumerate(cv):
        # construct model with logistic regression, test with the test set and obtain prediction probability
        probasLG = classifierLG.fit(X[train], Y[train]).predict_proba(X[test])
        probasSVM = classifierSVM.fit(X[train], Y[train]).predict_proba(X[test])
        # Compute ROC curve and area the curve
        #calculate fpr, tpr and threshold with roc_curve()function
        fprLG, tprLG, thresholdsLG = roc_curve(Y[test], probasLG[:, 1])
        fprSVM, tprSVM, thresholdsSVM = roc_curve(Y[test], probasSVM[:, 1])
        mean_tpr_LG += interp(mean_fpr_LG, fprLG, tprLG)  # Interpolate the mean_tpr at mean_fpr, call the interp() function via the scipy package.
        mean_tpr_LG[0] = 0.0  # The initial position is 0
        mean_tpr_SVM += interp(mean_fpr_SVM, fprSVM, tprSVM)  # Interpolate the mean_tpr at mean_fpr, call the interp() function via the scipy package.
        mean_tpr_SVM[0] = 0.0  # The initial position is 0
        roc_auc_LG = auc(fprLG, tprLG)
        roc_auc_SVM = auc(fprSVM, tprSVM)
        # plt.plot(fpr, tpr, lw=1, label='ROC fold %d (area = %0.2f)' % (i, roc_auc))

    # Draw diagonal
    ax=plt.subplot(111)
    plt.xticks(fontsize=20)
    plt.yticks(fontsize=20)
    ax.set_xlabel('False Positive Rate', fontsize=20)
    ax.set_ylabel('True Positive Rate', fontsize=20)


    plt.plot([0, 1], [0, 1], '--', color=(0.6, 0.6, 0.6), label='Luck')

    mean_tpr_LG /= 3  # calculate the mean_tpr_LG
    mean_tpr_LG[-1] = 1.0  # The last point of the coordinate is (1,1)
    mean_auc_LG = auc(mean_fpr_LG, mean_tpr_LG)  # Calculate the average AUC value
    mean_tpr_SVM /= 3
    mean_tpr_SVM[-1] = 1.0
    mean_auc_SVM = auc(mean_fpr_SVM, mean_tpr_SVM)
    # Draw average ROC curve
    # print mean_fpr,len(mean_fpr)
    # print mean_tpr
    plt.plot(mean_fpr_LG, mean_tpr_LG, 'g--',label='logistic regression (area = %0.2f)' % mean_auc_LG, lw=2)
    # plt.plot(mean_fpr_SVM, mean_tpr_SVM, 'r--', label='support vector machine(SVM) (area = %0.2f)' % mean_auc_SVM, lw=2)

    plt.xlim([-0.05, 1.05])
    plt.ylim([-0.05, 1.05])
    # plt.xlabel('False Positive Rate')#
    # plt.ylabel('True Positive Rate')#
    plt.title('Receiver operating characteristic curve',fontsize=25)
    plt.legend(loc="lower right",fontsize=15)
    plt.show()

# roc_plt(X,Y)


#Draw a three-dimensional scatter plot of the training data
def plt_train_data(data_train=data_train,):
    X_tr=data_train[data_train[:,3]==1,:]
    X_fal=data_train[data_train[:,3]==0,:]

    fig = plt.figure()
    ax = fig.add_subplot(111, projection='3d')  # Create a 3D drawing project
    plot_3d(X_tr[:,0],X_tr[:,1],X_tr[:,2],pro=ax,c='g')
    plot_3d(X_fal[:,0],X_fal[:,1],X_fal[:,2],pro=ax,c='r')
    ax.set_xlabel('pident')
    ax.set_ylabel('int_evalue')
    ax.set_zlabel('pqlen')
    plt.show()
# plt_train_data(data_train[:,:])

#main
gs_logreg_cv(degmax=20,Crange=3)
log_cv(degree=3,C=0.44,penalty='l1')
roc_plt(X,Y)
plt_train_data(data_train[:,:])