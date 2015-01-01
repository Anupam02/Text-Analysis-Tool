# -*- coding: utf-8 -*-
"""
Created on Fri Dec 12 23:01:45 2014

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
               
    
    number_of_different_words_res= num_of_diff_words(test_data,min_char_per_word,special_word,stop_list)
    print number_of_different_words_res
    
def num_of_diff_words(test_data,min_no_chars,spec_words,stop_list):
    """Counts the total number of diffrent words"""
    test_data_list = []
    for word in test_data.split():
        """conversion of test_data from string to list"""
        test_data_list.append(word)
    
    test_data_filtered_list = []                      #empty filtered list initially
    
    for word in test_data_list:
        """filtering of words as per constraints in list"""
        if len(word) >= min_no_chars and word not in(stop_list):
            test_data_filtered_list.append(word)      #appending the list as per constraints
              
    """Creating a Set of filtered list"""
    set_of_diff_words = set(test_data_filtered_list)
    
    """Returning the length of set of different words in filtered list"""
    return len(set_of_diff_words)
    
if __name__ == '__main__':
    main()
        