# -*- coding: utf-8 -*-
"""
Created on Sat Dec 13 03:43:52 2014

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
               
    
    number_of_syllables_res= syllable_count(test_data,min_char_per_word,special_word,stop_list)
    print number_of_syllables_res
def syllable_count(text,min_char,sp,sto):
                count = 0
                vowels = 'aeiouy'
                text = text.lower().strip(".:;?!)(")
                if text[0] in vowels:
                    count += 1
                for index in range(1, len(text)):
                    if text[index] in vowels and text[index-1] not in vowels:
                        count += 1
                if text.endswith('e'):
                    count -= 1
                if text.endswith('le'):
                    count += 1
                if count == 0:
                    count += 1
                count = count - (0.1*count)
                return (round(count))    
    
if __name__ == '__main__':
    main()
        

