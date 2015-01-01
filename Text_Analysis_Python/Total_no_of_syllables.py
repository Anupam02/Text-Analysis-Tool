# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 02:56:50 2014

@author: anupam
"""
from nltk.corpus import cmudict
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
               
    
    total_num_of_syllables_res= num_of_syllables(test_data)
    print total_num_of_syllables_res
    
def num_of_syllables(test_data):
    """Counts the total numbers of syllables in test data"""
    
    test_data_list = []
    for word in test_data.split():
        test_data_list.append(word)
    
    test_data_letters_only = []
    
    for index in range(len(test_data_list)):
        test_data_letters_only.append(''.join(i for i in test_data_list[index] if  i in 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'))
    
    
    d = cmudict.dict()
    count = 0
    syllable_list = []
    for word in test_data_letters_only:
        syllable_list.append([len(list(y for y in x if y[-1].isdigit())) for x in d[word.lower()]])
    print syllable_list
    for l in syllable_list:
        
    return count    

if __name__ == '__main__':
    main()
        
