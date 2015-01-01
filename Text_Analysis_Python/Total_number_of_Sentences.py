# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 04:04:54 2014

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
               
    
    number_of_sentences_res= num_of_sentences(test_data,min_char_per_word,special_word,stop_list)
    print number_of_sentences_res
    
def num_of_sentences(test_data,min_no_chars,spec_words,stop_list):
    """Counts the total number of Sentences"""
    test_data_sentences = []
    for word in test_data.split('.'):
        """conversion of test_data from string to sentence list"""
        if word != '':
            test_data_sentences.append(word)
        
    
    return len(test_data_sentences)
    
if __name__ == '__main__':
    main()
        