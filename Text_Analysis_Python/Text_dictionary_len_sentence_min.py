# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 13:20:48 2014

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
               
    largest_sentence_len_min_res  =  largest_sentence_len_min(test_data,min_char_per_word,special_word,stop_list)
    print largest_sentence_len_min_res
    
def largest_sentence_len_min(test_data,min_no_chars,spec_words,stop_list):
    """Counts the number of words in each sentece and creates a dictionary for key:len of sen value : sentence"""
    test_data_sentences = []
    for word in test_data.split('.'):
        """conversion of test_data from string to sentence list"""
        if word != '':
            test_data_sentences.append(word)
    d = {}
    for word in test_data_sentences:
        count = 0
        for words in word.split():
            count += 1
        d[count] = word
        
    return min(d)
    
if __name__ == '__main__':
    main()
        