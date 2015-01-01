# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 14:51:56 2014

@author: anupam
"""

import sys

def main():
    """Accessing the command line arguments as per constraint"""
    test_data                   = sys.argv[1]       #string to be analysed
    minimum_characters_per_word = sys.argv[2]       #minimum characters per word to be analysed
    special_word                = sys.argv[3]       #special word to be analysed
    stop_list_string            = sys.argv[4]       #stop list to be ignored in the anaysis
    
    """Conversion of minimum characters per word to integer type"""
    min_char_per_word          = int(minimum_characters_per_word)
    
    """conversion of stop list as a string type to a list type"""
    stop_list = []                                  #stop list initially empty
    for words in stop_list_string.split():
        stop_list.append(words)                     #appending the stop list as per spaces between them
               
    smallest_sentence_res  =  smallest_sentence(test_data,min_char_per_word,special_word,stop_list)
    print smallest_sentence_res
    
def smallest_sentence(test_data,min_no_chars,spec_words,stop_list):
    """Counts the number of words in each sentece and creates a dictionary for key:len of sen value : sentence"""
    test_data_sentences = []
    for word in test_data.split('.'):   
        """conversion of test_data from string to sentence list"""
        if word != '':
            test_data_sentences.append(word)
    test_data_sentence_letters_only = []    
    d = {}
    #i = 0
    count = 0
    for word in test_data_sentences:
        for words in word.split():
            count += 1
            test_data_sentence_letters_only.append(''.join(i for i in words if  i in 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'))
        
        d[count] =  test_data_sentence_letters_only 
        count = 0
        test_data_sentence_letters_only = []
    #i += 1
    temp = d[min(d)]
        #print temp
    res_str = ''
    for j in temp:
        res_str += " " + j
    return res_str

if __name__ == '__main__':
    main()
        