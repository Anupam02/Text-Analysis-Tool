# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 02:43:40 2014

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
               
    
    number_of_chars_without_space_res= num_of_letters(test_data)
    print number_of_chars_without_space_res
    
def num_of_letters(test_data):
    """Counts the total number of letters"""
    letters_only = ''.join(i for i in test_data if  i in 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM')
    
    return len(letters_only)    

if __name__ == '__main__':
    main()
        
