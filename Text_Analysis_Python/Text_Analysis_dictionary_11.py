# -*- coding: utf-8 -*-
"""
Created on Sun Dec 14 01:29:15 2014

@author: anupam
"""

import operator
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
               
    required_result  =  making_a_dict(test_data,min_char_per_word,special_word,stop_list)
    print required_result
    
def making_a_dict(test_data,min_no_chars,spec_words,stop_list):
    """making a dictionary of words and its occurences as keys"""
    
    test_data_list = []
    "" "conversion of test data to list."""
    for word in test_data.split():
   
        test_data_list.append(word)
    
    test_data_list_letters_only = []
    
    for word in test_data_list :
        
        test_data_list_letters_only.append( ''.join(i for i in word if  i in 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM'))
    test_data_list_letters_only_filtered = []
    for word in test_data_list_letters_only:
        if len(word) > min_no_chars and word not in(stop_list):
            test_data_list_letters_only_filtered.append(word)
    d = {}
    s = set(test_data_list_letters_only_filtered)
    total_count_filtered = 0
    for word in s:
        wc = test_data_list_letters_only_filtered.count(word)
        d[word]  = wc
        total_count_filtered += wc
    #print total_count_filtered
    #x = {1: 2, 3: 4, 4:3, 2:1, 0:0}
    sorted_x = sorted(d.items(), key=operator.itemgetter(1))
    sorted_x.reverse()
    if len(s) >= 2:
        return sorted_x[1][1]
    else:
        return ""
    
    
    
    
if __name__ == '__main__':
    main()
        