# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 00:48:06 2014

@author: anupam
"""
from collections import Counter
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
               
    
    total_no_of_chars_without_spaces_res            = count_letters(test_data)
    print total_no_of_chars_without_spaces_res

def count_letters(test_data):
    counter = Counter()
    for word in test_data.split():
        counter.update(word)
    return sum(counter.itervalues())
   

if __name__ == '__main__':
    main()



