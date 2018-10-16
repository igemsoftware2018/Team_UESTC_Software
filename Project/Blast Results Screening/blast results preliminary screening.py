#screening the redundant matches by calculating the matching site
def nonredundant_dict(dict,line):
    ele = line.split('\t')
    qacc = ele[1]
    qstart=float(ele[8])
    qend=float(ele[9])
    length=float(ele[3])
    if qstart>qend:
        temp=qstart
        qstart=qend
        qend=temp
    if qacc in dict.keys():
        judge=0
        for dic in dict[qacc]:
            if qend<dic['qstart']+length*0.1 or qstart>dic['qend']-length*0.1:
                judge=1
            else:
                judge=0
                break
        if judge==1:
            dict[qacc].append({'qstart': qstart, 'qend': qend})
            print(line)
            return 1
        elif judge==0:
            return 0
    else:
        print(line)
        dict[qacc]=[{'qstart':qstart,'qend':qend}]
        return 2

def main():
    fi = open("promec_blast.tabular", 'r')
    fo = open("promec_to_parts_nonredundant.txt", 'w')

    lines = fi.readlines()
    dict={}
    for line in lines:
        temp=nonredundant_dict(dict,line)
        if temp==0:
            print('ooooooo')
        elif temp==1:
            print(line)
            fo.write(line)
        elif temp==2:
            print(line)
            fo.write(line)
    fi.close()
    fo.close()

if __name__=='__main__':
    main()