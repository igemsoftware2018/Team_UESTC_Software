import csv
import numpy as np
from Bio import SeqIO
from keras.models import load_model
import tensorflow as tf
import sys

oneHotDict = {'A': np.array([1, 0, 0, 0]), 'G': np.array([0, 1, 0, 0]), 'C': np.array([0, 0, 1, 0]),
              'T': np.array([0, 0, 0, 1]), 'N': np.array([0, 0, 0, 0]), 'M': np.array([0, 0, 0, 0]),
              'K': np.array([0, 0, 0, 0]), 'D': np.array([0, 0, 0, 0]), 'R': np.array([0, 0, 0, 0]),
              'Y': np.array([0, 0, 0, 0]), 'S': np.array([0, 0, 0, 0]), 'W': np.array([0, 0, 0, 0])}


def vectorizeseq(seq):  # Convert DNA sequence to numerical value
    return np.array(list(map(lambda letter: oneHotDict[letter], seq)))


def prom_identify(species, file_path):  # Process a fasta format file to predict promoter
    result_file = open("./data/result.csv", 'w', newline='')
    writer = csv.writer(result_file)
    flag = 0
    tlen = 0
    if species == 'Human' or species == 'Mouse' or species == 'Arabis':
        classifier_exon = load_model('./model/{0}_Prom_Exon.h5'.format(species))
        classifier_intron = load_model('./model/{0}_Prom_Intron.h5'.format(species))
        classifier_3utr = load_model('./model/{0}_Prom_3UTR.h5'.format(species))
        for record in SeqIO.parse("./data/{0}".format(file_path), "fasta"):
            record.seq = str(record.seq).upper()
            writer.writerow([">"+str(record.id)+str(record.description)])
            if len(record.seq) > 260:
                flag = 1
            i = 0
            if len(record.seq) < 251:
                writer.writerow(["- 251bp at least!"])
            else:
                tlen = 1
                writer.writerow(["Region_start", "Region_end", "Prom_Exon", "Prom_Intron", "Prom_3UTR", "Average_score", "Label"])
                temp_list = list()
                while i < (len(record.seq) - 250):
                    temp_list.append([np.array(vectorizeseq(str(record.seq[i:251 + i]))), i])
                    if len(temp_list) >= 300000:
                        x_pre_temp = np.array([temp[0] for temp in temp_list])
                        pos_list = np.array([temp[1] for temp in temp_list])
                        temp_list = []
                        y_cur_exon = classifier_exon.predict(x_pre_temp)
                        y_cur_intron = classifier_intron.predict(x_pre_temp)
                        y_cur_3utr = classifier_3utr.predict(x_pre_temp)
                        for j in range(len(y_cur_3utr)):
                            r = 0
                            if y_cur_exon[j][1] > 0.7:
                                r += 1
                            if y_cur_intron[j][1] > 0.7:
                                r += 1
                            if y_cur_3utr[j][1] > 0.7:
                                r += 1
                            if r >= 2:
                                y_final = 'Y'
                            else:
                                y_final = 'N'
                            writer.writerow([str(pos_list[j] + 1), str(pos_list[j] + 251), format(y_cur_exon[j][1], '.5f'),
                                             format(y_cur_intron[j][1], '.5f'), format(y_cur_3utr[j][1], '.5f'),
                                             format((y_cur_exon[j][1]+y_cur_intron[j][1]+y_cur_3utr[j][1])/3.0, '.5f'),
                                             y_final])
                    i += 1
                x_pre_temp = np.array([temp[0] for temp in temp_list])
                pos_list = np.array([temp[1] for temp in temp_list])
                y_cur_exon = classifier_exon.predict(x_pre_temp)
                y_cur_intron = classifier_intron.predict(x_pre_temp)
                y_cur_3utr = classifier_3utr.predict(x_pre_temp)
                for j in range(len(x_pre_temp)):
                    r = 0
                    if y_cur_exon[j][1] > 0.7:
                        r += 1
                    if y_cur_intron[j][1] > 0.7:
                        r += 1
                    if y_cur_3utr[j][1] > 0.7:
                        r += 1
                    if r >= 2:
                        y_final = 'Y'
                    else:
                        y_final = 'N'
                    writer.writerow([str(pos_list[j] + 1), str(pos_list[j] + 251), format(y_cur_exon[j][1], '.5f'),
                                     format(y_cur_intron[j][1], '.5f'), format(y_cur_3utr[j][1], '.5f'),
                                     format((y_cur_exon[j][1] + y_cur_intron[j][1] + y_cur_3utr[j][1]) / 3.0, '.5f'),
                                     y_final])
        if tlen == 0:
            raise RuntimeError('Input sequence must more than 251bp!')
    else:
        classifier = load_model('./model/{0}.h5'.format(species))
        for record in SeqIO.parse("./data/{0}".format(file_path), "fasta"):
            record.seq = str(record.seq).upper()
            writer.writerow([str(">" + str(record.id) + str(record.description))])
            if len(record.seq) > 81:
                flag = 1
            i = 0
            if len(record.seq) < 81:
                writer.writerow(["- 81bp at least!"])
            else:
                tlen = 1
                writer.writerow(["Region_start", "Region_end", "Score", "Label"])
                temp_list = list()
                while i < (len(record.seq) - 80):
                    temp_list.append([np.array(vectorizeseq(str(record.seq[i:81 + i]))), i])
                    if len(temp_list) >= 300000:
                        x_pre_temp = np.array([temp[0] for temp in temp_list])
                        pos_list = np.array([temp[1] for temp in temp_list])
                        temp_list = []
                        y_cur = classifier.predict(x_pre_temp)
                        for j in range(len(y_cur)):
                            if y_cur[j][1] > 0.5:
                                y_final = 'Y'
                            else:
                                y_final = 'N'
                            writer.writerow([str(pos_list[j] + 1), str(pos_list[j] + 81), format(y_cur[j][1], '.5f'),
                                             y_final])
                    i += 1
                x_pre_temp = np.array([temp[0] for temp in temp_list])
                pos_list = np.array([temp[1] for temp in temp_list])
                y_cur = classifier.predict(x_pre_temp)
                for j in range(len(y_cur)):
                    if y_cur[j][1] > 0.5:
                        y_final = 'Y'
                    else:
                        y_final = 'N'
                    writer.writerow([str(pos_list[j] + 1), str(pos_list[j] + 81), format(y_cur[j][1], '.5f'),
                                     y_final])
        if tlen == 0:
            raise RuntimeError('Input sequence must more than 81bp!')
    result_file.close()
    return flag


def final_process(species):  # Select result from raw result file
    result_file = open('./data/result.csv', 'r')
    reader = csv.reader(result_file)
    final_file = open('./data/final_result.csv', 'w', newline='')
    writer = csv.writer(final_file)
    temp_list = []
    dog = 0
    f = 0
    end = 0
    writer.writerow(["Region_start", "Region_end", "Score"])
    if species == 'Human' or species == 'Mouse' or species == 'Arabis':
        for item in reader:
            if str(item[0])[0] == ">" or str(item[0])[0] == "-":
                if len(temp_list) < 15:
                    dog = 0
                    f = 0
                    end = 0
                    temp_list = []
                else:
                    # temp_max = [temp_list[0][0], temp_list[-1][1]]
                    # writer.writerow(temp_max)
                    # f = 0
                    # dog = 0
                    # end = 0
                    # temp_list = []
                    temp_max = temp_list[0]
                    for temp in temp_list:
                        if temp[2] > temp_max[2]:
                            temp_max = temp
                    end = 0
                    writer.writerow(temp_max)
                    dog = 0
                    f = 0
                    temp_list = []
                writer.writerow([item[0]])
                continue
            else:
                if item[6] == 'Y' and int(item[0]) > int(end):
                    temp_list.append([item[0], item[1], item[5]])
                    f = 0
                else:
                    if len(temp_list) > 0:  # 判断是不是第一个符合条件的
                        if dog < int((len(temp_list)+1) / 5) and f < 4:  # 判断N出现的次数是否超过限制
                            f += 1
                            dog += 1
                            temp_list.append([item[0], item[1], item[5]])
                        elif len(temp_list) < 15:
                            dog = 0
                            f = 0
                            temp_list = []
                        else:
                            temp_max = temp_list[0]
                            for temp in temp_list:
                                if temp[2] > temp_max[2]:
                                    temp_max = temp
                            end = temp_list[-1][1]
                            writer.writerow(temp_max)
                            dog = 0
                            f = 0
                            temp_list = []
        if len(temp_list) >= 15:
            temp_max = temp_list[0]
            for temp in temp_list:
                if temp[2] > temp_max[2]:
                    temp_max = temp
            writer.writerow(temp_max)
    else:
        for item in reader:
            if str(item[0])[0] == ">" or str(item[0])[0] == "-":
                writer.writerow([item[0]])
                if len(temp_list) < 15:
                    dog = 0
                    f = 0
                    end = 0
                    temp_list = []
                else:
                    temp_max = temp_list[0]
                    for temp in temp_list:
                        if temp[2] > temp_max[2]:
                            temp_max = temp
                    end = 0
                    writer.writerow(temp_max)
                    dog = 0
                    f = 0
                    temp_list = []
                continue
            else:
                if item[3] == 'Y' and int(item[0]) > int(end):
                    temp_list.append([item[0], item[1], format(float(item[2]), "0.5f")])
                    f = 0
                else:
                    if len(temp_list) > 0:
                        if dog < int((len(temp_list) + 1) / 5) and f < 4:
                            f += 1
                            dog += 1
                            temp_list.append([item[0], item[1], format(float(item[2]), "0.5f")])
                        elif len(temp_list) < 15:
                            dog = 0
                            f = 0
                            temp_list = []
                        else:
                            temp_max = temp_list[0]
                            for temp in temp_list:
                                if temp[2] > temp_max[2]:
                                    temp_max = temp
                            end = temp_list[-1][1]
                            writer.writerow(temp_max)
                            dog = 0
                            f = 0
                            temp_list = []


try:
    selected_species = 'Ecoli_sigma70'
    pre_file = 'Ecoli_K12.fna'
    prom_identify(selected_species, pre_file)
    final_process(selected_species)
except Exception as err:
    print(err)
